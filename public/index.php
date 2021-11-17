<?php

// Đăng ký cơ chế autoload bằng composer
require_once(__DIR__.'/../vendor/autoload.php');

// Khởi tạo ứng dụng.
$app = new GoSafer\App\Application(dirname(__DIR__));

//Chụp lại toàn bộ Request và xử lý
$app->make('http')->handle(\GoSafer\Http\Request::capture())->send();

//Đóng ứng dụng
$app->close();