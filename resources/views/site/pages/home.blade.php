@extends('site.master')

@section('title')
    {{ 'Home' }}
@endsection

@section('content')
    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover"
        data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/images/slider.png') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        {{-- حلول البرمجة المتكاملة --}}
                                        <h2>
                                            Integrated Programming Solutions
                                            {{-- <strong></strong> --}}
                                        </h2>
                                        <p class="lead">With Landigoo responsive landing page template, you can promote
                                            your all hosting, domain and email services. </p>
                                        <a href="{{ route('site.contactUs') }}" class="hover-btn-new"><span>Contact
                                                Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/images/slider2.jpg') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight">
                                            {{-- التكنولوجيا المتقدمة في البرمجة --}}
                                            Advanced Technology in Programming
                                            {{-- <strong></strong> --}}
                                        </h2>
                                        <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive
                                            landing page template, you can promote your all hosting, domain and email
                                            services. </p>
                                        <a href="{{ route('site.contactUs') }}" class="hover-btn-new"><span>Contact
                                                Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/images/slider3.jpg') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight">
                                            {{-- فريق من المحترفين في البرمجة --}}
                                            A team of professionals in programming
                                            {{-- <strong></strong> --}}
                                        </h2>
                                        <p class="lead" data-animation="animated fadeInLeft">1 IP included with each
                                            server
                                            Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                            FREE Reboots</p>
                                        <a href="{{ route('site.contactUs') }}" class="hover-btn-new"><span>Contact
                                                Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    @include('site.include.aboutUs_content')

    <section class="page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Our history</h3>
                    <p class="lead">
                        Founded with a vision to innovate, our company has grown through dedication, expertise, and a
                        commitment to delivering outstanding digital solutions for diverse industries.
                    </p>
                </div>
            </div><!-- end title -->
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>2024</h2>
                                <p>
                                    Our company is now a global player, known for delivering innovative software solutions
                                    and outstanding customer support to a diverse client base.
                                </p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>2021</h2>
                                <p>
                                    We strengthened our position as an industry leader, expanding our services and refining
                                    our software to meet evolving market demands.
                                </p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-03">
                                <h2>2019</h2>
                                <p>
                                    Building on our success, we refined our offerings, focusing on delivering tailored
                                    software solutions that addressed specific customer needs.
                                </p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-04">
                                <h2>2018</h2>
                                <p>
                                    Our team expanded, and we introduced new solutions that set the stage for future success
                                    and deeper market engagement.
                                </p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>2016</h2>
                                <p>
                                    We started with a passion for innovation and technology, laying the foundation for a
                                    company that would grow to meet industry needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.include.info_content')

    <div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
                <p>
                    Let’s work together to create innovative solutions that drive your business forward. Reach out today to
                    discuss your project.
                </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="pricing-table pricing-table-highlighted h-100">
                                <div class="pricing-table-header grd1">
                                    <h2>Edu Cloud System</h2>
                                </div>
                                <div class="pricing-table-space"></div>
                                <div class="pricing-table-features">
                                    <p>
                                        EDU Cloud System is a comprehensive and flexible solution for managing nurseries,
                                        educational institutes, academies, and learning centers. It enables you to organize
                                        and manage all aspects of the educational institution with high efficiency.
                                    </p>
                                </div>
                                <div class="pricing-table-sign-up">
                                    <a href="{{ route('site.products.features') }}" class="hover-btn-new" target="_b"><span>Order
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="pricing-table pricing-table-highlighted h-100">
                                <div class="pricing-table-header grd1">
                                    <h2>Khwarizmiworld platform</h2>
                                </div>
                                <div class="pricing-table-space"></div>
                                <div class="pricing-table-features">
                                    <p>
                                        Al-Khwarizmi platform is an integrated platform for mental arithmetic, which seeks
                                        to create a generation of geniuses and competent trainers, by providing global
                                        training opportunities, with interactive content and an endless number of electronic
                                        questions
                                    </p>
                                </div>
                                <div class="pricing-table-sign-up">
                                    <a href="https://www.khwarizmiworld.com/service" class="hover-btn-new" target="_b"><span>Order
                                            Now</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div
                                class="pricing-table pricing-table-highlighted h-100 d-flex justify-content-between flex-column">
                                <div class="pricing-table-header grd1">
                                    <h2>Vet Applications</h2>
                                </div>
                                <div class="pricing-table-space"></div>
                                <p style="font-size: 22px; color: #c2c2c2;">Coming Soon</p>
                                <div class="pricing-table-sign-up">
                                    <a href="#" class="hover-btn-new"><span>Order
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    @include('site.include.testimonials_content')

    @include('site.include.partners_content')
@endsection

@push('home-js')
    <script src="{{ asset('site/js/timeline.min.js') }}"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
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
@endpush
