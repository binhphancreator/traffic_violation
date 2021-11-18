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
                        return `${context[0].label}`;
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
            tension: {
                duration: 500,
                easing: 'easeInQuad',
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
