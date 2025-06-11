<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Hiển thị form xác nhận lại mật khẩu cho người dùng.
     * Trả về view: resources/views/auth/confirm-password.blade.php
    */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Xử lý xác nhận lại mật khẩu của người dùng.
     * - Kiểm tra mật khẩu nhập vào có đúng với tài khoản hiện tại không.
     * - Nếu sai, trả về lỗi xác thực.
     * - Nếu đúng, lưu thời gian xác nhận vào session để xác nhận các hành động nhạy cảm tiếp theo.
     * - Sau khi xác nhận thành công, chuyển hướng về trang dashboard khách hàng.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            // Nếu không đúng, trả về lỗi xác thực mật khẩu
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }
        // Nếu đúng, lưu thời gian xác nhận vào session
        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('customer.dashboard', absolute: false));
    }
}