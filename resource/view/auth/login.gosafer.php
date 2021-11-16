<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="GoSafer | Trang tin tức, tra cứu vi phạm giao thông">
    <meta property="og:type" content="article">
    <meta property="og:description" content="GoSafer | Trang tin tức, tra cứu vi phạm giao thông">
    <meta property="og:image" content="https://gosafer.xyz/img/static.png">
    <link rel="stylesheet" href="/css/boootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>GoSafer | Đăng nhập</title>
</head>
<body>
    <?php view('components/header-page')->render() ?>

    <nav class="container-lg mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="/">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a>Đăng nhập</a></li>
        </ol>
    </nav>

    <section class="main-content container-lg mb-5">
        <form action="/login" method="POST">
            <div class="p-3 py-4 shadow-sm rounded-3">
                <div class="row mb-4">
                    <div class="col-12 mb-4">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="text" placeholder="Email bạn dùng để đăng nhập" class="form-control" id="emailInput" name="email">
                    </div>
                    <div class="col-12">
                        <label for="passwordInput" class="form-label">Mật khẩu</label>
                        <input type="password" placeholder="Mật khẩu" class="form-control" id="passwordInput" name="password">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn-rounded-left p-2" href="/lookup-violation.html">Đăng nhập</button>
                </div>
            </div>
        </form>
    </section>

    <?php view('components/footer')->render() ?>

    <script src="/js/jquery.js"></script>
    <script src="/js/boootstrap5.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>