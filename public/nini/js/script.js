$(function () {
	$('.carousel').carousel({
		interval: false
	})

	$('#responsive-carousel').slick({
		dots: true,
		arrows: true,
		infinite: false,
		speed: 1300,
		slidesToShow: 4,
		slidesToScroll: 4,
		//prevArrow: '.slick-prev',
		//nextArrow: '.slick-next',
		responsive: [{
			breakpoint: 960,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
			}
		}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	$('#responsive-carousel input').on('change', function () {
		$('#responsive-carousel .radio-inline').removeClass('selected');
		$(this).closest('.radio-inline').addClass('selected');
	});

	var filterString = '';

	$('.letter-filter a').on('click', function (event) {
		event.preventDefault();
		$('#responsive-carousel').slick('slickUnfilter');
		var filterString = $(this).attr('data-filter-by');
		console.log(filterString);
		$('#responsive-carousel').slick('slickFilter', '[data-first-letter="' + filterString + '"]');
		//$(this).text('Unfilter Slides');
		filtered = true;
	});
	$('.select-filter select').on('change', function (event) {
		var filterString = $(this).val();
		console.log(filterString);
		if (filterString == "reset") {
			$('#responsive-carousel').slick('slickUnfilter');
		} else {
			$('#responsive-carousel').slick('slickFilter', '[data-first-letter="' + filterString + '"]');
		}


	});
	$('.reset').on('click', function (event) {
		event.preventDefault();
		$('#responsive-carousel').slick('slickUnfilter');
		filtered = false;
	});
});