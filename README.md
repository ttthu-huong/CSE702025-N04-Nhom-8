# 🎠 MyKingToys — Hệ thống quản lý bán đồ chơi

 - MyKingToys là hệ thống quản lý bán đồ chơi dành cho cửa hàng vừa và nhỏ. Dự án được phát triển nhằm hỗ trợ quá trình quản lý sản phẩm, khách hàng, đơn hàng một cách hiệu quả, trực quan và tiết kiệm thời gian.
 - Với tinh thần "Đồ chơi không chỉ dành cho trẻ em, mà còn là biểu tượng của tuổi thơ và sự sáng tạo", chúng tôi mong muốn đem đến một nền tảng quản lý đơn giản – trực quan – hiệu quả cho các cửa hàng đồ chơi truyền thống và trực tuyến.

---

## 🎯 Mục tiêu dự án

- Xây dựng hệ thống bán hàng đồ chơi trực tuyến đơn giản và dễ sử dụng
- Hỗ trợ người bán quản lý sản phẩm, đơn hàng và người dùng hiệu quả
- Đảm bảo tính an toàn, rõ ràng trong phân quyền và thao tác dữ liệu
- Tăng trải nghiệm người dùng với giao diện đẹp, dễ thao tác

---

## 🧩 Cấu trúc chức năng chính

🔐 Đăng nhập, quên mật khẩu qua Gmail  
🧑‍🤝‍🧑 Ba loại người dùng với vai trò rõ ràng:

- 👑 Admin (role = 0): thêm/sửa/xóa sản phẩm, quản lý seller
- 🛍️ Seller (role = 1): thêm/sửa/xóa sản phẩm, xác nhận đơn hàng
- 🧸 Customer (role = 2): duyệt sản phẩm, thêm vào giỏ, thanh toán

📦 Quản lý sản phẩm: tên, mô tả, ảnh, giá, tồn kho  
🧾 Quản lý đơn hàng: trạng thái giao hàng, chi tiết đơn  
📊 Thống kê đơn giản: doanh thu, số lượng sản phẩm, tổng đơn hàng

---

## 🛠️ Công nghệ sử dụng

| Thành phần     | Công nghệ                |
|----------------|---------------------------|
| Backend        | PHP (Laravel framework), Laravel Breeze, Eloquent ORM, Laravel Security  |
| Frontend       |Blade engine, Tailwind CSS, Figma (thiết kế giao diện UI trước khi code)|
| Cơ sở dữ liệu  | MySQL (Aiven Cloud)         |
| Dev Tools      | GitHub (quản lý mã nguồn), VS Code (môi trường lập trình)    |

---

## 📸 Giao diện mẫu

> ![image](https://github.com/user-attachments/assets/52e4a22d-5861-4c5a-ab62-06da83f2fe1b)

---

## 👥 Nhóm phát triển

| Thành viên             | Vai trò               | Công việc chính                           |
|------------------------|-----------------------|-------------------------------------------|
| Hoàng Minh Quân        |       Trưởng nhóm         |Phụ trách toàn bộ phần lập trình hệ thống, bao gồm cả frontend, backend và cơ sở dữ liệu|
| Nguyễn Thành Long      |    Thành viên      | Viết toàn bộ báo cáo, thiết kế sơ đồ và tổng hợp tài liệu |
| Nguyễn Thị Thương      |  Thành viên  | Thiết kế giao diện người dùng trên Figma, xây dựng wireframe, UI flow  |
| Trần Thị Thu Hường     |  Thành viên   | Thiết kế giao diện người dùng trên Figma, xây dựng wireframe, UI flow |

---

## 💬 Quá trình thực hiện

Dự án được chia thành 3 giai đoạn chính:

1. 📌 Phân tích yêu cầu & thiết kế hệ thống (tuần 1-2):
* Khảo sát nhu cầu thực tế, thống nhất ý tưởng dự án.
* Lập sơ đồ ERD, Use Case, thiết kế CSDL và giao diện(Figma).

2. 🧱 Xây dựng chức năng (tuần 3-4):
* Phát triển backend bằng Laravel.
* Thiết kế frontend đồng bộ giao diện thân thiện, dễ sử dụng.

3. ✅ Kiểm thử & triển khai (tuần 5-6):
* Kiểm thử chức năng.
* Viết báo cáo và tổng hợp tài liệu hướng dẫn sử dụng.

---

## 🌱 Định hướng phát triển trong tương lai

- 🌐 Responsive hoàn toàn (hỗ trợ thiết bị di động)
- 💳 Tích hợp thanh toán trực tuyến (VNPay, Momo)
- 📈 Thống kê nâng cao theo thời gian
- 📮 Tính năng phản hồi & đánh giá sản phẩm
- 🔐 Nâng cấp phân quyền chi tiết hơn

---

## 📫 Liên hệ nhóm

📬 GitHub: [MyKingToys Repository](https://github.com/ttthu-huong/CSE702025-N04-Nhom-8)  
🧠 Đóng góp: Vui lòng tạo issue hoặc pull request

---

> 🤝 Cảm ơn bạn đã ghé thăm và tìm hiểu về dự án MyKingToys!
>  
> Hãy ⭐ star nếu bạn thấy dự án hữu ích hoặc truyền cảm hứng nhé!
