$(document).ready(function () {
    let carousel = function () {
        $('.slider').slick({
            rows: 1,
            arrows: true,
            prevArrow: "<button type='button' class='left-slider-arrow slick-prev'>◀️</button>",
            nextArrow: "<button type='button' class='right-slider-arrow slick-next'>▶️</button>",
            // prevArrow: "<img class='left-slider-arrow slick-prev' src='https://uploads-ssl.webflow.com/5ffc7d9c41880c19fc8b613a/62423ee0140311ada418533d_left-slider-arrow.svg'>",
            // nextArrow: "<img class='right-slider-arrow slick-next' src='https://uploads-ssl.webflow.com/5ffc7d9c41880c19fc8b613a/62423ee54a33c9a2cf14e0de_right-slider-arrow.svg'>",
            speed: 1000,
            infinite: false,
            loop: true,
            // loopAdditionalSlides: 1,
            pauseOnHover: false,
            autoplay: false,
            autoplaySpeed: 7000,
            draggable: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    };

    carousel();

    let refreshCount = 0;
    const maxRefreshCount = 3;
    const refreshInterval = 3300; // 3.3초

    const intervalId = setInterval(function () {
        $('.slider').slick('refresh');
        refreshCount++;
        if (refreshCount >= maxRefreshCount) {
            clearInterval(intervalId);
        }
    }, refreshInterval);

});