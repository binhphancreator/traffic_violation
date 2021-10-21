for(let i=0;i<5;i++) {
    $('#newsList').append(
        ' \
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 my-1"> \
                <div class="card-news"> \
                    <a href="/news.html" class="card-news-img mb-4"> \
                        <img src="/resource/img/news1.jpg" alt=""> \
                    </a> \
                    <a href="/news.html" class="card-news-title">Chú chó \'nghiện\' giao thông công cộng.</a> \
                    <p class="card-news-content text-secondary mb-0">Trong chuyến phà chở khách đông đúc ở Istanbul, mọi con mắt đều hướng về một chú chó đang ngắm nhìn phong cảnh từ cửa sổ.</p> \
                </div> \
            </div> \
        '
    )
}

for(let i=0;i<20;i++) {
    $('#bodyTableDocument').append(
        `\
            <tr> \
                <th scope="row">${i+1}</th> \
                <td>Tài liệu về an toàn giao thông.</td> \
                <td><a class="d-inline-block link-dark" href="#"> \
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="d-inline-block" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/></svg> \
                    Tải về  \
                </a></td> \
            </tr> \
        `
    )
}

function includeHtml() {
    var element = document.querySelectorAll("[include-html]")
    element.forEach(el => {
        var nameComponent = el.getAttribute('include-html')
        $(`[include-html='${nameComponent}']`).load(`/components/${nameComponent}.html`)
    })

}

includeHtml();

function counterNumberIncrease(container, counter, max) {
    setTimeout(() => {
        counter+=Math.round(max/15);
        document.getElementById(container).innerHTML = `${counter}`
        if(counter < max) setTimeout(() => counterNumberIncrease(container,counter , max), 0.000000001) 
        else document.getElementById(container).innerHTML = `${max}`
    }, 50)
}

var cities = {
    hn:{number:8000},
    hcm:{number:7000},
    all:{number:15000},
}

setTimeout(() => counterNumberIncrease('numberOfViolation',1 , cities['hn']['number']), 10)

$('button[data-city]').each((index, btn) => {
    btn.onclick = e => {
        let city = e.target.getAttribute('data-city')
        setTimeout(() => counterNumberIncrease('numberOfViolation',1 , cities[city]['number']), 10)
        $('button[data-city].active').removeClass('active')
        e.target.classList.add('active')
    }
})