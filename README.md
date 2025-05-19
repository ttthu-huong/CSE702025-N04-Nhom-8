# 🎠 MyKingToys — Hệ thống quản lý bán đồ chơi

MyKingToys là một hệ thống quản lý bán đồ chơi dành cho cửa hàng vừa và nhỏ. Dự án được phát triển nhằm hỗ trợ quá trình quản lý sản phẩm, khách hàng, đơn hàng một cách hiệu quả, trực quan và tiết kiệm thời gian.

---

## 🎯 Mục tiêu dự án

- Tạo ra một hệ thống quản lý đơn giản, dễ dùng cho người bán đồ chơi
- Hỗ trợ thao tác thêm/sửa/xóa sản phẩm
- Quản lý đơn hàng và trạng thái giao hàng
- Phân quyền người dùng cơ bản (quản trị viên, nhân viên)
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

## 🚀 Hướng dẫn cài đặt & chạy dự án

```bash
git clone https://github.com/your-username/mykingtoys.git
cd mykingtoys

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
