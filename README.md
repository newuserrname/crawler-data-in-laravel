# crawler-data-in-laravel
user "simple_html_dom"

các bước cào dữ liệu từ 1 trang web

Bước 1: Download file simple_html_dom.php

Bước 2: tạo 1 thư mục (đặt tên tùy thích) trong App -> copy + paste file simple_html_dom.php vào thư mục vừa tạo
và sửa $offset = 0 thành $offset = -1 (tại function file_get_html)

- Khai báo trong file App\Providers\AppServiceProvider.php
- require_once __DIR__ . '/../(thư mục vừa tạo khi nãy)/simple_html_dom.php' (tại function register())

Bước 3: Tạo command->đặt tên cho lệnh chạy command

Bước 4: Xem cấu trúc html của trang cần cào dữ liệu

Bước 5: Viết hàm lấy dữ liệu trong function handle

Bước 6: Chạy lệnh command
