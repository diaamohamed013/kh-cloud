@extends('site.master')

@section('title')
    {{ 'Features' }}
@endsection

@section('bread-title')
    {{ 'Features' }}
@endsection

@section('content')
    @include('site.include.breadcrumb')
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Features</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                        quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>Unlimited Bandwidth</h3>
                        <p>Our Landigoo responsive site template elements 100% compatible with all mobile devices and modern
                            browsers!
                            <small class="readmore">
                                <a href="#">Read more</a>
                            </small>
                        </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>Unlimited Traffic</h3>
                        <p>When you need anything about for Landigoo template, just drop an email or leave a feedback from
                            TF!
                            <small class="readmore">
                                <a href="#">Read more</a>
                            </small>
                        </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>1 Domain Free</h3>
                        <p>We offer pixel perfect icons, graphic sources for high-resolution devices! Landigoo compatible
                            retina display!
                            <small class="readmore"><a href="#">Read more</a></small>
                        </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Awards Winner Support</h3>
                        <p>Our Landigoo responsive site template elements 100% compatible with all mobile devices and modern
                            browsers!
                            <small class="readmore">
                                <a href="#">Read more</a>
                            </small>
                        </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>Free SSL Certifica</h3>
                        <p>We offer pixel perfect icons, graphic sources for high-resolution devices! Landigoo compatible
                            retina display!
                            <small class="readmore">
                                <a href="#">Read more</a>
                            </small>
                        </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>High Security</h3>
                        <p>When you need anything about for Landigoo template, just drop an email or leave a feedback from
                            TF!
                            <small class="readmore">
                                <a href="#">Read more</a>
                            </small>
                        </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    @include('site.include.info_content')
    @include('site.include.testimonials_content')
    @include('site.include.partners_content')
@endsection
