for (let i = 0; i < 5; i++) {
    $('#newsList').append(
        ' \
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 my-1"> \
                <div class="card-news"> \
                    <a href="/news.html" class="card-news-img mb-4"> \
                        <img src="/img/news1.jpg" alt=""> \
                    </a> \
                    <a href="/news.html" class="card-news-title">Chú chó \'nghiện\' giao thông công cộng.</a> \
                    <p class="card-news-content text-secondary mb-0">Trong chuyến phà chở khách đông đúc ở Istanbul, mọi con mắt đều hướng về một chú chó đang ngắm nhìn phong cảnh từ cửa sổ.</p> \
                </div> \
            </div> \
        '
    )
}

news.forEach(el => {
    console.log(el)
});