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
    <title>GoSafer | Tin tức giao thông</title>
</head>
<body>
    <?php view('components/header-page')->render() ?>

    <nav class="container-lg mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="/">Trang Chủ</a></li>
          <li class="breadcrumb-item" aria-current="page"><a>Tin tức</a></li>
        </ol>
    </nav>

    <section class="news container-lg mb-5">
        <h2 class="news-title">Tin giao thông nổi bật</h2>
        <div class="row" id="newsList">
            <div class="col-12">
                <div class="card-news card-hoz">
                    <a href='/news.html' class="card-news-img mb-4">
                        <img src="/img/news1.jpg" alt="">
                    </a>
                    <div class="card-news-body">
                        <a href='/' class="card-news-title">Chú chó 'nghiện' giao thông công cộng.</a>
                        <p class="card-news-content text-secondary">Trong chuyến phà chở khách đông đúc ở Istanbul, mọi con mắt đều hướng về một chú chó đang ngắm nhìn phong cảnh từ cửa sổ.</p>
                        <div class="card-news-relate">
                            <a href='/news.html' class="">Chú chó 'nghiện' giao thông công cộng.Chú chó 'nghiện' giao thông công cộng.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php view('components/footer')->render() ?>

    <script src="/js/jquery.js"></script>
    <script src="/js/boootstrap5.js"></script>
    <script>
        const news = <?php echo json_encode($news) ?>
    </script>
    <script src="/js/news.js"></script>
</body>
</html>