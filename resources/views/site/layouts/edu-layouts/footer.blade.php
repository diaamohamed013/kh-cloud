<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('site/products/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('site/products/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="{{ asset('site/products/js/isotope.min.js') }}"></script>
<script src="{{ asset('site/products/js/owl-carousel.js') }}"></script>
<script src="{{ asset('site/products/js/lightbox.js') }}"></script>
<script src="{{ asset('site/products/js/tabs.js') }}"></script>
<script src="{{ asset('site/products/js/video.js') }}"></script>
<script src="{{ asset('site/products/js/slick-slider.js') }}"></script>
<script src="{{ asset('site/products/js/custom.js') }}"></script>
<script src="{{ asset('site/products/js/jquery.validate.min.js') }}"></script>
<script>
    var input = document.querySelector('#PhoneNumber'),
        errorMsg = document.querySelector('#error-msg'),
        validMsg = document.querySelector('#valid-msg');


    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long"];

    // var iti = window.intlTelInput(input, {
    //     utilscript:
    //     "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    // });

    var iti = window.intlTelInput(input, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");

    }

    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove('hide');
                input.classList.remove('inValidPhone');
                input.classList.add('validPhone');
            } else {
                input.classList.add('error');
                input.classList.add('inValidPhone');
                input.classList.remove('validPhone');
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });


    input.addEventListener('change', reset);
    input.addEventListener("keyup", reset);
</script>
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
