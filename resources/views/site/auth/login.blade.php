@extends('site.pages.products.master')
@push('feature-css')
    <style>
        .header-feature {
            position: sticky;
        }

        img {
            width: auto;
        }

        .bg-thirdColor {
            background-color: #53665dd6;
        }

        @media(max-width: 992px) {
            .header-feature {
                position: fixed;
            }
        }

        @media(max-width: 769px) {
            main {
                margin-top: 130px
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('site/products/css/signUp.css') }}">
@endpush
@section('content')
    <main class="packageDetails sign-up-page">
        <div class="container">
            <form id="msform" class="row g-0 p-3 justify-content-center" action="{{ route('site.signup.submit') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 justify-content-center {{ session()->get('Lang') == 'en' ? '' : 'right' }}">
                    <fieldset class="row g-3" style="height: auto;">
                        <div class="col-md-12 text-center">
                            <h3 class="fs-subtitle text-primary">{{ __('website.Login') }}</h3>
                        </div>
                        <div class="col-md-12">
                            <label for="Email" class="form-label">{{ __('website.Email') }}</label>
                            <input type="email" class="form-control" id="Email" value="" name="UserEmail"
                                placeholder="{{ __('website.Email') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="Password" class="form-label">{{ __('website.Password') }}</label>
                            <input type="password" class="form-control" id="Password" name="UserPassword"
                                placeholder="{{ __('website.Password') }}" value="">
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <input type="radio" class="option-1 form-control payment-method" name="paymentType"
                                    id="ManualPayment" value="Offline">
                                <input type="radio" class="option-2 form-control payment-method" name="paymentType"
                                    id="OnlinePayment"value="Online">
                                <label for="ManualPayment" class="option option-1">
                                    <div class="dot"></div>
                                    <span>{{ __('website.OfflinePayment') }}</span>
                                </label>
                                <label for="OnlinePayment" class="option option-2">
                                    <div class="dot"></div>
                                    <span>{{ __('website.OnlinePayment') }}</span>
                                </label>
                            </div>
                            <div class="alert alert-warning mt-5" id='OnlinePaymentMsg' style="display: none">
                                <strong class="mx-2">{{ trans('website.Note') }}</strong>
                                {{ __('website.OnlinePaymentMsg') }}
                            </div>
                            <div class="alert alert-info mt-5" id='ManualPaymentMsg' style="display: none">
                                <strong class="mx-2 fw-bold"
                                    style="font-weight: 800 !important;font-size: 1.3rem;">{{ trans('website.Note') }}</strong>
                                @lang('website.ManualPaymentMsg')
                            </div>
                            <div class="col-md-12">
                                <div class="m-5"></div>
                            </div>
                        </div>
                        <input type="submit" name="next" class="next action-button"
                            value="{{ __('website.Submit') }}" />
                    </fieldset>
                </div>
            </form>
        </div>
    </main>
@endsection
@push('feature-js')
    @include('site.auth.js.validation_login')
    <script>
        var langvalue = $('html').attr('lang');

        $(document).ready(function() {
            $(".payment-method").change(function() {
                if ($(this).is(":checked")) {
                    var pay = $(this).val();
                    if (pay == 'Online') {
                        $('#OnlinePaymentMsg').show();
                    } else {
                        $('#OnlinePaymentMsg').hide();
                    }
                }
                if (pay == 'Offline') {
                    $('#ManualPaymentMsg').show();
                } else {
                    $('#ManualPaymentMsg').hide();
                }
            });
            // $("#country").on('change', function() {
            //     var country_id = $(this).val();
            //     console.log(country_id);

            //     $.ajax({
            //         url: "<?php echo route('site.cities.get'); ?>",
            //         type: "get",
            //         data: {
            //             country_id: country_id,
            //         },
            //         success: function(result) {

            //             $('#city').empty();
            //             $('#city').append(
            //                 `<option value="" style="color:grey;font-size:15px">-- <?php echo strtolower(trans('website.ChooseCity')); ?>--</option>`
            //             );

            //             $.each(result, function(index, value) {
            //                 $('#city').append(
            //                     '<option value="' + value['id'] +
            //                     '">' + value[langvalue == 'ar' ? 'city_name_ar' :
            //                         'city_name_en'] + '</option>'
            //                 );

            //             });

            //         },

            //     });


            // });
        });
    </script>
@endpush
