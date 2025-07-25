<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipper;
use Barryvdh\DomPDF\Facade\Pdf;

class HistoryController extends Controller
{
    // Hiển thị lịch sử các đơn ship (giao hàng)
    public function cart_history()
    {
        $shipers = Shipper::all()->sortDesc();
        return view('admin/cart/history', compact('shipers'));
    }
    public function cart_delete($id){
        $shipers = Shipper::findOrFail($id);

        try {
            $shipers->delete();
            return redirect()->route('admin.cart.history')->with(['success' => "Xóa đơn ship của ID $shipers->id thành công!"]);
        } catch (Exception $e) {
            echo $e->getMessage();
            return redirect()->back()->with('error', 'Lỗi , không xóa được sản phẩm!');
        }
    }
    public function cart_photos_pdf($id) {
        $shiper_order = Shipper::find($id);

        $pdfOptions = [
            'defaultFont' => 'DejaVu Sans',
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
        ];

        $pdf = Pdf::loadView('admin.cart.inovar', compact('shiper_order'))->setOptions($pdfOptions);

        return $pdf->download(($shiper_order->ship_users ?? "Ko có").time().".pdf");
    }

    public function cart_search(Request $request)
    {
        $searchTerm = $request->input('search_shipper');
        // Log::info('Từ khóa tìm kiếm:', ['search_ship' => $searchTerm]);

        $shipers = Shipper::where('ship_users', 'like', "%$searchTerm%")
            ->orWhere('ship_product', 'like', "%$searchTerm%")
            ->orWhere('ship_quantity', 'like', "%$searchTerm%")
            ->orWhere('ship_price', 'like', "%$searchTerm%")
            ->orWhere('ship_phonenumber', 'like', "%$searchTerm%")
            ->orWhere('ship_address', 'like', "%$searchTerm%")
            ->orWhere('ship_thank', 'like', "%$searchTerm%")
            ->orWhereHas('order', function ($query) use ($searchTerm) {
                $query->where('orders_id', 'like', "%$searchTerm%");
            })
            ->get();

        if ($shipers->isEmpty()) {
            return response('<tr><td colspan="9">Không tìm thấy đơn hàng này</td></tr>');
        }

        $output = '';
        foreach ($shipers as $shiper) {
            $output .= '
        <tr>
            <td>' . $shiper->order->orders_id. '</td>
            <td>' . $shiper->ship_users . '</td>
            <td>' . $shiper->ship_product . '</td>
            <td>' . $shiper->ship_quantity . '</td>
            <td>' . $shiper->ship_price . '</td>
            <td>' . $shiper->ship_phonenumber . '</td>
            <td>' . $shiper->ship_address . '</td>
            <td>' . $shiper->ship_thank . '</td>
            <td>
                <form action="' . route('admin.cart.delete' , $shiper->id) . '" method="post" class="d-inline">
                    ' . csrf_field() . method_field('delete') . '
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
            <td>
                <a href="' . route('admin.cart.print_pdf' , $shiper->id) . '" class="btn btn-secondary"><i class="fa-regular fa-file-pdf"></i></a>
            </td>
        </tr>
        ';
        }

        return response($output);
    }




    //================Order=========================
    
    // Hiển thị lịch sử các đơn đặt hàng
    public function order_history()
    {
        $orders = Orders::all()->sortDesc();
        return view('admin/order/history', compact('orders'));
    }

    // Xóa một đơn đặt hàng theo id
    public function order_delete($id)
    {
        $orders = Orders::findOrFail($id);

        try {
            $orders->delete();
            return redirect()->route('admin.order.history')->with(['success' => "Xóa đơn hàng của ID $orders->id thành công!"]);
        } catch (Exception $e) {
            echo $e->getMessage();
            return redirect()->back()->with('error', 'Lỗi , không xóa được sản phẩm!');
        }
    }

    // Hiển thị form chỉnh sửa đơn hàng
    public function order_edit($id)
    {
        $orders_info = Orders::find($id);
        return view('admin.order.edit_order', compact('orders_info'));
    }

    // Cập nhật thông tin đơn hàng
    public function order_update(Request $request, $id)
    {
        $order_edit = Orders::findOrFail($id);

        // Validate dữ liệu đầu vào
        $request->validate([
            'orders_status' => 'required|string|max:255',
            'orders_phonenumber' => 'nullable|string|max:15', // Đổi thành kiểu string nếu số điện thoại phức tạp
            'orders_address' => 'nullable|string|max:255',
        ]);

        try {
            // Cập nhật thông tin đơn hàng
            $order_edit->update([
                'orders_censor' => $request->orders_status,
                'orders_phonenumber' => ($request->orders_phonenumber == 0) ? "0" : $request->orders_phonenumber,
                'orders_address' => ($request->orders_address === "Trống") ? "Trống" : $request->orders_address,
            ]);

            return redirect()->route('admin.order.history')->with('success', "Cập nhật đơn hàng $order_edit->id thành công!");
        } catch (Exception $e) {
            return redirect()->back()->with('error', "Lỗi cập nhật đơn hàng: " . $e->getMessage());
        }
    }

    // Hiển thị form để chèn thông tin ship cho đơn hàng
    public function order_insertship($id)
    {
        $orders_info = Orders::find($id); // Sử dụng findOrFail để đảm bảo nếu không tìm thấy sẽ trả về lỗi 404
        return view('admin.order.ship_order', compact('orders_info'));
    }

    // Lưu thông tin ship mới cho đơn hàng
    public function order_createship(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'ship_order_id' => 'required|exists:orders,id', // Kiểm tra sự tồn tại của ID đơn hàng
            'ship_users' => 'required|string|max:255',
            'ship_product' => 'required|string',
            'ship_quantity' => 'required|integer',
            'ship_price' => 'required|numeric|min:0',
            'ship_phonenumber' => 'required|integer',
            'ship_address' => 'required|string',
            'ship_thank' => 'required|string'
        ]);

        try {
            // Tạo mới bản ghi shipper
            Shipper::create([
                'ship_users' => $request->ship_users,
                'ship_orders_id' => $request->ship_order_id,
                'ship_product' => $request->ship_product,
                'ship_quantity' => $request->ship_quantity,
                'ship_price' => $request->ship_price,
                'ship_phonenumber' => $request->ship_phonenumber,
                'ship_address' => $request->ship_address,
                'ship_thank' => $request->ship_thank
            ]);

            return redirect()->route('admin.cart.history')->with('success', 'Đơn hàng đã được gửi đi thành công.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Lỗi khi thêm sản phẩm: ' . $e->getMessage());
        }
    }

    // Tìm kiếm đơn đặt hàng theo nhiều trường
    public function order_search(Request $request)
    {
        $searchTerm = $request->input('search_orders');

        $orders = Orders::where('orders_id', 'like', "%$searchTerm%")
            ->orWhere('orders_product', 'like', "%$searchTerm%")
            ->orWhere('orders_quantity', 'like', "%$searchTerm%")
            ->orWhere('orders_price', 'like', "%$searchTerm%")
            ->orWhere('orders_censor', 'like', "%$searchTerm%")
            ->orWhere('created_at', 'like', "%$searchTerm%")
            ->orWhereHas('user', function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%");
            })
            ->get();

        if ($orders->isEmpty()) {
            return response('<tr><td colspan="1">Không tìm thấy đơn hàng này</td></tr>');
        } else {
            $output = '';
            foreach ($orders as $order) {
                $censorClass = '';
                if ($order->orders_censor == "Đang kiểm duyệt") {
                    $censorClass = '<div class="bg-warning bg-gradient bg-opacity-75 text-center rounded-pill p-1">' . $order->orders_censor . '</div>';
                } elseif ($order->orders_censor == "Đã kiểm duyệt") {
                    $censorClass = '<div class="bg-success bg-gradient bg-opacity-75 text-center rounded-pill p-1">' . $order->orders_censor . '</div>';
                } else {
                    $censorClass = $order->orders_censor;
                }

                $output .= '
                <tr>
                    <td>' . $order->id . '</td>
                    <td>' . $order->orders_id . '</td>
                    <td>' . ($order->user->name ?? "Không có") . '</td>
                    <td>' . $order->orders_product . '</td>
                    <td>' . $order->orders_quantity . '</td>
                    <td>' . $order->orders_price . '</td>
                    <td>' . $censorClass . '</td>
                    <td>' . $order->created_at . '</td>
                    <td>
                        <a href="' . route('admin.order.edit', $order->id) . '" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <form action="' . route('admin.order.delete', $order->id) . '" method="post" class="d-inline">
                            ' . csrf_field() . method_field('delete') . '
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="' . route('admin.order.insertship', $order->id) . '" class="btn btn-primary"><i class="fa-solid fa-truck-fast"></i></a>
                    </td>
                </tr>
            ';
            }
            return response($output);
        }
    }
}
