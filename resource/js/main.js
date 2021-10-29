for (let i = 0; i < 5; i++) {
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

for (let i = 0; i < 20; i++) {
    $('#bodyTableDocument').append(
        `\
            <tr> \
                <th scope="row">${i + 1}</th> \
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

function counterNumberIncrease(number) {
    $('#numberOfViolation').animate({
        counter: number
    }, {
        duration: 600,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        },
    });
}

var cities = {
    hn: { number: 8000, img: 'map.jpeg' },
    hcm: { number: 7000, img: 'hcm.jpg' },
    all: { number: 15000, img: 'vn.jpg' },
}


$('button[data-city]').each((index, btn) => {
    btn.onclick = e => {
        let city = e.target.getAttribute('data-city')
        $('button[data-city].active').removeClass('active')
        counterNumberIncrease(cities[city].number)
        e.target.classList.add('active')
    }
})

var canvasViolationYearly  = document.getElementById('chart-violation-yearly');

if (canvasViolationYearly ) var chartViolationYearly = new Chart(canvasViolationYearly.getContext('2d'), {
    type: 'line',
    data: {
        labels: ['2016', '2017', '2018', '2019', '2020', '2021'],
        datasets: [{
            label: 'Số vụ vi phạm (nghìn vụ)',
            data: [12, 22, 19, 16, 10, 14],
            backgroundColor: 'rgba(35, 155, 86, .5)',
            borderColor: '#239B56',
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    font: {
                        family: "'Inter', sans-serif",
                        size:16,
                    }
                }
            },
            title: {
                display: false,
                text: ''
            },
            tooltip: {
                callbacks:{
                    label: function(context) {
                        return `Số vụ vi phạm: ${context.formattedValue} nghìn vụ`;
                    },
                    title: function(context) {
                        return `Năm ${context[0].label}`;
                    },
                },
                bodyFont: {
                    family: "'Inter', sans-serif",
                    size:14,
                },
                titleFont: {
                    family: "'Inter', sans-serif",
                    size:16,
                },
                usePointStyle: false,
                intersect: false,
                displayColors: false,
            },
        },
        animations: {
            radius: {
                duration: 500,
                easing: 'easeInQuad',
                from: 5,
                to: 15,
                loop: true
            }
        },
        scales: {
            x: {
                ticks: {
                    font: {
                        family: "'Inter', sans-serif",
                        size:14,
                    },
                    color: '#1C2833',
                }
            },
            y: {
                ticks: {
                    font: {
                        family: "'Inter', sans-serif",
                        size:14,
                    },
                    color: '#1C2833'
                }
            }
        }
    }
});

var canvasTop10Violation  = document.getElementById('chart-top10-violation');

if (canvasTop10Violation ) var canvasTop10Violation = new Chart(canvasTop10Violation.getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Hồ Chí Minh', 'Hà Nội', 'Hải Phòng', 'Đà Nẵng', 'Khánh Hòa', 'Nam Định', 'Hưng Yên', 'Ninh Bình', 'Hải Dương', 'Phú Thọ',],
        datasets: [{
            label: 'Số vụ vi phạm (nghìn vụ)',
            data: [2, 4, 9, 6, 8, 10, 1, 4, 7, 5],
            backgroundColor: 'rgba(35, 155, 86, .5)',
            borderColor: '#239B56',
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        indexAxis: 'y',
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    font: {
                        family: "'Inter', sans-serif",
                        size:16,
                    }
                }
            },
            title: {
                display: false,
                text: ''
            },
            tooltip: {
                callbacks:{
                    label: function(context) {
                        return `Số vụ vi phạm: ${context.formattedValue} nghìn vụ`;
                    },
                    title: function(context) {
                        return `Năm ${context[0].label}`;
                    },
                },
                bodyFont: {
                    family: "'Inter', sans-serif",
                    size:14,
                },
                titleFont: {
                    family: "'Inter', sans-serif",
                    size:16,
                },
                usePointStyle: false,
                intersect: false,
                displayColors: false,
            },
        },
        animations: {
            radius: {
                duration: 500,
                easing: 'easeInQuad',
                from: 5,
                to: 15,
                loop: true
            }
        },
        scales: {
            x: {
                ticks: {
                    font: {
                        family: "'Inter', sans-serif",
                        size:14,
                    },
                    color: '#1C2833',
                }
            },
            y: {
                ticks: {
                    font: {
                        family: "'Inter', sans-serif",
                        size:14,
                    },
                    color: '#1C2833'
                }
            }
        }
    }
});
