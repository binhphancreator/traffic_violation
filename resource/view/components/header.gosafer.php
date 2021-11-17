<header class="py-2 position-relative mb-5 header-home">
    <div id="map" class="overlay"></div>
    <?php view('components/nav')->render() ?>
    <div class="header-bottom container-lg mt-5 overflow-hidden">
        <div class="mask"></div>
        <div>
            <div class="mb-5">
                <h1 class="text-secondary fs-1 mb-4"><span id="numberOfViolation">6805 </span> <span class="fs-3">vụ tai nạn</span></h1>
                <p class="header-bottom-content text-secondary mb-0">Hãy tuân thủ luật giao thông để  tránh mất mát cho gia đình và xã hội. Bạn có thể tra cứu lỗi vi phạm của mình trên GoSafer!</p>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-center mb-4">
                <button data-city='hn'  class="p-2 btn-rounded-left text-light me-4 active">Hà Nội</button>
                <button data-city='hcm' class="p-2 btn-rounded-left text-light me-4">Hồ Chí Minh</button>
                <button data-city='all' class="p-2 btn-rounded-left text-light">Toàn Quốc</button>
            </div>
        </div>
    </div>
</header>