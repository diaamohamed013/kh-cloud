<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('site/products/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('site/products/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('site/products/js/isotope.min.js') }}"></script>
<script src="{{ asset('site/products/js/owl-carousel.js') }}"></script>
<script src="{{ asset('site/products/js/lightbox.js') }}"></script>
<script src="{{ asset('site/products/js/tabs.js') }}"></script>
<script src="{{ asset('site/products/js/video.js') }}"></script>
<script src="{{ asset('site/products/js/slick-slider.js') }}"></script>
<script src="{{ asset('site/products/js/custom.js') }}"></script>
@stack('feature-js')

<script>
    //according to loftblog tut
    // $('.nav li:first').addClass('active');

    // var showSection = function showSection(section, isAnimate) {
    //     var
    //         direction = section.replace(/#/, ''),
    //         reqSection = $('.section').filter('[data-section="' + direction + '"]'),
    //         reqSectionPos = reqSection.offset().top - 0;

    //     if (isAnimate) {
    //         $('body, html').animate({
    //                 scrollTop: reqSectionPos
    //             },
    //             800);
    //     } else {
    //         $('body, html').scrollTop(reqSectionPos);
    //     }

    // };

    // var checkSection = function checkSection() {
    //     $('.section').each(function() {
    //         var
    //             $this = $(this),
    //             topEdge = $this.offset().top - 80,
    //             bottomEdge = topEdge + $this.height(),
    //             wScroll = $(window).scrollTop();
    //         if (topEdge < wScroll && bottomEdge > wScroll) {
    //             var
    //                 currentId = $this.data('section'),
    //                 reqLink = $('a').filter('[href*=\\#' + currentId + ']');
    //             reqLink.closest('li').addClass('active').
    //             siblings().removeClass('active');
    //         }
    //     });
    // };

    // $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
    //     if ($(this).attr('id') === 'featurePage') {
    //     }
    //     e.preventDefault();
    //     showSection($(this).attr('href'), true);
    // });

    // $('.navLink .dropdown-toggle').on('click', function(e) {
    //     e.preventDefault();
    //     $(".dropdown-menu").toggle();
    // });

    // $(window).scroll(function() {
    //     checkSection();
    // });
</script>
<script>
    const selectCat = document.querySelector(".categories");
    const listCat = document.getElementById("lists");
    const arrowIcon = document.getElementById("IconArrow");
    const catOptions = document.querySelectorAll(".categoryOptions");
    const selectText = document.getElementById("selectText");


    selectCat.addEventListener("click", function() {
        listCat.classList.toggle("open");
        arrowIcon.classList.toggle("openIcon");
    });

    for (option of catOptions) {
        option.addEventListener("click", function() {
            selectText.innerHTML = this.innerText;
        });
    }
</script>
</body>

</body>

</html>
