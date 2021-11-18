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
    <title>GoSafer | <?php echo $news->title ?></title>
</head>
<body>
    <?php view('components/header-page')->render() ?>

    <nav class="container-lg mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="/">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a>Tin tức</a></li>
        </ol>
    </nav>

    <section class="main-content container-lg">
        <div class="news-content">
            <h3 class="news-title mb-0"><?php echo $news->title ?></h3>
            <small class="text-secondary mb-4 d-block">Đăng ngày: <?php echo $news->created_at ?></small>
            <?php echo $news->content ?>
        </div>
        
    </section>
    <?php view('components/footer')->render() ?>

    <script src="/js/jquery.js"></script>
    <script src="/js/boootstrap5.js"></script>
</body>
</html>