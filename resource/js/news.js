function stripHtml(html)
{
   let tmp = document.createElement("DIV");
   tmp.innerHTML = html;
   return tmp.textContent || tmp.innerText || "";
}

var index = 0;
news.forEach(el => {
    let imgsrc = el.content.match(/src="(\w|\d|[-/:._])+"/);
    if(index && imgsrc.length)
    {
        $('#newsList').append(
            `
                <div class="col-xl-3 col-md-4 col-sm-6 col-12 my-1">
                    <div class="card-news">
                        <a href="/news/detail/?id=${el.id}" class="card-news-img mb-4">
                            <img ${imgsrc[0]} >
                        </a>
                        <a href="/news/detail/?id=${el.id}" class="card-news-title">${el.title}</a>
                        <p class="card-news-content text-secondary mb-0">${stripHtml(el.content).substr(0,200)}</p>
                    </div>
                </div>
            `
        )
    } else {
        $('#newsList').append(
            `
                <div class="col-12">
                    <div class="card-news card-hoz">
                        <a href="/news/detail/?id=${el.id}" class="card-news-img mb-4">
                            <img ${imgsrc[0]} >
                        </a>
                        <div class="card-news-body">
                            <a href="/news/detail/?id=${el.id}" class="card-news-title">${el.title}</a>
                            <p class="card-news-content text-secondary">${stripHtml(el.content).substr(0,400)}</p>
                        </div>
                    </div>
                </div>
            `
        )
    }
    index++;
});
