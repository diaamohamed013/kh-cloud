@extends('site.pages.products.master')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('site/products/images/course-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Welcome to Edu Cloud System</h6>
                            <h2>An Integrated System for Managing Your Educational Institutions</h2>
                            {{-- <p>This is an edu meeting HTML CSS template provided by <a rel="nofollow"
                                    href="https://templatemo.com/page/1" target="_blank">TemplateMo website</a>. This is
                                a Bootstrap v5.1.3 layout. The video background is taken from Pexels website, a group of
                                young people by <a rel="nofollow" href="https://www.pexels.com/@pressmaster"
                                    target="_blank">Pressmaster</a>.</p> --}}
                            <p>
                                At Edu Cloud System, we offer a comprehensive system for managing nurseries and educational
                                institutes, enabling you to organize all aspects of your operations efficiently. From
                                registration, attendance, to communication with parents, the system provides innovative
                                tools to streamline your institution's workflow. With Edu Cloud System, you can create a
                                more organized and professional educational environment. We are here to support you in
                                delivering an exceptional learning experience that keeps up with the digital age.
                            </p>
                            <div class="main-button-red">
                                <div class="scroll-to-section">
                                    <a href="#contact">Join Us Now!</a>
                                    <a href="{{ route('site.products.features') }}" class="mx-2" target="_b"
                                        style="color: #3f5d50; background-color: #fff;" id="featurePage">
                                        Features
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src="{{ asset('site/products/images/service-icon-01.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Best System </h4>
                                <p>Edu Cloud System is an all-in-one solution designed to simplify the management of
                                    educational institutions. It provides a seamless, intuitive platform that integrates all
                                    administrative functions into one unified system, ensuring smooth operations for both
                                    staff and students.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ asset('site/products/images/service-icon-02.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Best Teachers</h4>
                                <p>With Edu Cloud System, teachers have access to a powerful tool that helps them manage
                                    their classrooms efficiently. From grading and attendance to communication with parents,
                                    the system supports teachers in delivering high-quality education while saving time on
                                    administrative tasks.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ asset('site/products/images/service-icon-03.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Best Students</h4>
                                <p>Edu Cloud System offers students an interactive platform that makes learning more
                                    engaging and accessible. The system provides easy access to lessons, assignments, and
                                    results, ensuring students stay on track and have a clear view of their progress.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ asset('site/products/images/service-icon-02.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Best Education</h4>
                                <p>By streamlining administrative tasks and enhancing communication, Edu Cloud System
                                    ensures that educational institutions can focus more on delivering quality education.
                                    The system promotes a collaborative environment that fosters student success and teacher
                                    productivity.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{ asset('site/products/images/service-icon-03.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Best Networking</h4>
                                <p>Edu Cloud System facilitates seamless communication and collaboration between all
                                    stakeholders – teachers, students, and parents. The system helps build a strong network,
                                    fostering a sense of community and enhancing the learning experience for everyone
                                    involved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-now" id="apply" style="padding-top: 255px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>SUBSCRIBE TO EDU CLOUD SYSTEM FOr Your Nursery</h3>
                                <p>You can easily enhance your nursery's management with the Edu Cloud System. Our system is
                                    designed to make daily operations smoother and more efficient for both staff and
                                    parents.</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>JOIN EDU CLOUD SYSTEM NOW For Your Institute</h3>
                                <p>Improve the management of your institute or academy with Edu Cloud System. This platform
                                    offers powerful tools to enhance your operations, student communication, and overall
                                    educational experience.</p>
                                <div class="main-button-yellow">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Efficient Management</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    {{-- <p>If you want to get the latest collection of HTML CSS templates for your websites,
                                        you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too
                                            CSS website</a>. If you need a working contact form
                                        script, please visit <a href="https://templatemo.com/contact" target="_parent">our
                                            contact page</a> for more info.</p> --}}
                                    <p>
                                        Efficient management is crucial for smooth operation. Edu Cloud System streamlines
                                        all administrative tasks, helping institutions stay organized and efficient.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>High User Satisfaction</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Edu Cloud System has received an outstanding satisfaction rate, with 95% of users
                                        reporting improved communication and operational efficiency.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Customizable Features </span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Our system offers over 100 customizable features, allowing institutions to tailor Edu
                                        Cloud System according to their unique needs, ensuring a perfect fit for your
                                        educational environment.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Cloud-Based Accessibility</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>With Edu Cloud System, you can access your platform 24/7 from any device, ensuring
                                        you stay connected and productive at all times.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Popular Courses</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-01.jpg') }}" alt="Course One">
                            <div class="down-content">
                                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$160</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-02.jpg') }}" alt="Course Two">
                            <div class="down-content">
                                <h4>Curabitur molestie dignissim purus vel</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-03.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Nulla at ipsum a mauris egestas tempor</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-04.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Aenean molestie quis libero gravida</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-01.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$250</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-02.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>TemplateMo is the best website for Free CSS</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$270</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-03.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Web Design Templates at your finger tips</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$340</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-04.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Please visit our website again</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$360</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-01.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Responsive HTML Templates for you</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$400</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-02.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Download Free CSS Layouts for your business</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$430</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-03.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Morbi in libero blandit lectus cursus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$480</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('site/products/images/course-04.jpg') }}" alt="">
                            <div class="down-content">
                                <h4>Curabitur molestie dignissim purus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$560</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>A Few Facts About Our Edu Cloud</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">Over 500</div>
                                        <div class="count-title">Efficient Management</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">95%</div>
                                        <div class="count-title">High User Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">more than 100</div>
                                        <div class="count-title">Customizable Features</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">24/7 access</div>
                                        <div class="count-title">Cloud-Based Accessibility</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank">
                            <img src="{{ asset('site/products/images/play-icon.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject"
                                                placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>info@meeting.edu</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.meeting.edu</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 Edu Cloud System Co., Ltd. All Rights Reserved.
                {{-- <br>
                Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
                <br>
                Distibuted By: <a href="https://themewagon.com" target="_blank"
                    title="Build Better UI, Faster">ThemeWagon</a> --}}
            </p>
        </div>
    </section>
@endsection
