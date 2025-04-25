@extends('site.master')

@section('title')
    {{ 'Pricing' }}
@endsection

@section('bread-title')
    {{ 'Pricing' }}
@endsection

@section('content')
    @include('site.include.breadcrumb')
    <div id="pricing-box" class="section wb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Edu Cloud System</h3>
                            </span>
                            <span class="price-value">$15<span class="month">month</span> <span>Lorem ipsum
                                </span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-adjust"></i>
                            <ul>
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>10 subdomains</li>
                                <li>50 Domains</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="{{ route('site.products.product_subscribe') }}" class="hover-btn-new" target="_b"><span>Subscribe</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Business</h3>
                            </span>
                            <span class="price-value">$30<span class="month">month</span> <span>Lorem
                                    ipsum</span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-briefcase"></i>
                            <ul>
                                <li>70GB Disk Space</li>
                                <li>70 Email Accounts</li>
                                <li>70GB Monthly Bandwidth</li>
                                <li>30 subdomains</li>
                                <li>70 Domains</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="{{ route('site.products.product_subscribe') }}" class="hover-btn-new" target="_b"><span>Subscribe</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Premium</h3>
                            </span>
                            <span class="price-value">$45<span class="month">month</span> <span>Lorem
                                    ipsum</span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-cube"></i>
                            <ul>
                                <li>80GB Disk Space</li>
                                <li>80 Email Accounts</li>
                                <li>80GB Monthly Bandwidth</li>
                                <li>40 subdomains</li>
                                <li>80 Domains</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="{{ route('site.products.product_subscribe') }}" class="hover-btn-new" target="_b"><span>Subscribe</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end section -->
    @include('site.include.testimonials_content')
    @include('site.include.partners_content')
@endsection
