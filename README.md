# 🎠 MyKingToys — Hệ thống quản lý bán đồ chơi
---
## 🪁 Giới thiệu chung

MyKingToys là một hệ thống quản lý bán đồ chơi dành cho cửa hàng vừa và nhỏ. Dự án được phát triển nhằm hỗ trợ quá trình quản lý sản phẩm, khách hàng, đơn hàng một cách hiệu quả, trực quan và tiết kiệm thời gian.
Với tinh thần "Đồ chơi không chỉ dành cho trẻ em, mà còn là biểu tượng của tuổi thơ và sự sáng tạo", chúng tôi mong muốn đem đến một nền tảng quản lý đơn giản – trực quan – hiệu quả cho các cửa hàng đồ chơi truyền thống và trực tuyến.

---

## 🎯 Mục tiêu dự án

- Tạo ra một hệ thống quản lý đơn giản, dễ dùng cho người bán đồ chơi
- Hỗ trợ thao tác thêm/sửa/xóa sản phẩm
- Quản lý đơn hàng và trạng thái giao hàng
- Phân quyền người dùng cơ bản (quản trị viên, nhân viên, khách hàng)
- Giao diện thân thiện với người dùng

---

## 🔧 Công nghệ sử dụng

| Thành phần     | Công nghệ                |
|----------------|---------------------------|
| Backend        | PHP (Laravel 10)          |
| Frontend       | Blade Template, Bootstrap |
| Cơ sở dữ liệu  | MySQL                     |
| Dev Tools      | GitHub, VS Code           |

---

## 👥 Thành viên nhóm
💼 Hoàng Minh Quân
* Vai trò: Trưởng nhóm, định hướng kiến trúc dự án, quản lý tiến độ chung.
Công việc chính: Thiết kế cơ sở dữ liệu, xử lý logic backend, kiểm thử tổng thể.
Ghi chú đặc biệt: Làm việc chỉn chu, quyết đoán và luôn tạo động lực tích cực cho cả nhóm 💪✨.

🧩 Nguyễn Thành Long – “Người xấu trai nhất Thế giới và đã có người yêu”
Vai trò: Backend Developer
Công việc chính: Phát triển chức năng quản lý đơn hàng, báo cáo doanh thu, xử lý API.
Ghi chú đặc biệt: Luôn sẵn sàng hỗ trợ các thành viên khác, vui tính và chịu khó tìm hiểu sâu 🔧🧠.

## 🪄 Hướng dẫn cài đặt & chạy dự án

```bash
git clone https://github.com/your-username/mykingtoys.git
cd mykingtoys

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
