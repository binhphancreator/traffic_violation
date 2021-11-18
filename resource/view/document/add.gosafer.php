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
    <title>GoSafer | Thêm mới biên bản</title>
</head>
<body>
    <?php view('components/header-page')->render() ?>

    <nav class="container-lg mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="/">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a>Thêm mới tài liệu</a></li>
        </ol>
    </nav>

    <section class="main-content container-lg mb-5">
        <?php if(session()->old('notify')) { $notify = session()->old('notify'); echo "<div class=\"alert alert-success mb-4\">$notify</div>";}  ?>
        <form enctype="multipart/form-data" action="/document/add" method="POST">
            <div class="p-3 py-4 shadow-sm rounded-3">
                <div class="row mb-4">
                    <div class="col-12 mb-4">
                        <label for="nameInput" class="form-label">Tên tài liệu</label>
                        <input require type="text" class="form-control" id="nameInput" name="name">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="fileInput" class="form-label">File</label>
                        <input require type="file" class="form-control" id="fileInput" name="file">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="descriptionInput" class="form-label">Mô tả</label>
                        <textarea class="form-control resize-none" class="form-control" id="descriptionInput" name="description" rows="3"></textarea>
                    </div>
                </div>
                <?php if(session()->old('error')) { $error = session()->old('error'); echo "<div class=\"alert-danger p-2 mb-4\">$error</div>";}  ?>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn-rounded-left p-2" href="/lookup-violation.html">Thêm mới</button>
                </div>
            </div>
        </form>
    </section>

    <?php view('components/footer')->render() ?>

    <script src="/js/boootstrap5.js"></script>
</body>
</html>