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
    <title>GoSafer | Tài liệu</title>
</head>
<body>
    <?php view('components/header-page')->render() ?>

    <nav class="container-lg mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="/">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/report">Biên bản</a></li>
        </ol>
    </nav>

    <section class="main-content container-lg">
        <?php if(session()->old('notify')) { $notify = session()->old('notify'); echo "<div class=\"alert alert-success mb-4\">$notify</div>";}  ?>
        <table class="table table-light mb-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã biên bản</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(auth()->loggined())
                {
                    $deleteBtn = '<a role="button" class="d-inline-block link-dark me-2" onclick="deleteReport({id})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        Xóa 
                    </a>';
                } 
                    
                foreach($reports as $index => $report)
                {
                    $name = $report['title']; $i = $index + 1;
                    $deleteBtnReplace = str_replace("{id}", $report['id'], $deleteBtn);
                    $id = $report['id'];
                    $code = $report['code'];
                    echo "
                        <tr report-id='$id'> 
                            <th scope='row'>${code}</th>
                            <td>${name}</td>
                            <td>
                                <a class='d-inline-block link-dark me-2' href='/reports/lookup?search=$code'>
                                    Xem nội dung
                                </a>
                                ${deleteBtnReplace}
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </section>

    <?php view('components/footer')->render() ?>

    <script src="/js/jquery.js"></script>
    <script src="/js/boootstrap5.js"></script>
    <script src="/js/report.js"></script>
</body>
</html>
