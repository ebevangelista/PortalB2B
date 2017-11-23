<!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/banner1.jpg"></div>
			<div class="swiper-slide"><img src="img/banner2.jpg"></div>
			<div class="swiper-slide"><img src="img/banner3.jpg"></div>
			<div class="swiper-slide"><img src="img/banner4.jpg"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
	
	<!-- Swiper JS -->
    <script src="slider/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
		autoplay: 7000,
		pagination: '.swiper-pagination',
		paginationClickable: true,
        paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
    });
    </script>
