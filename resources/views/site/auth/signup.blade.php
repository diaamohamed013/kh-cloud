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
                <ul id="progressbar" class="form-wizard-steps {{ session()->get('Lang') == 'en' ? '' : 'right' }}">
                    <li class="active">{{ __('website.PersonalInformation') }}</li>
                    <li>{{ __('website.AccountInfo') }}</li>
                    <li>{{ __('website.ProgramInfo') }}</li>
                    <li>{{ __('website.Payment') }}</li>
                </ul>
                <!-- fieldsets -->
                <div class="row g-3 justify-content-center {{ session()->get('Lang') == 'en' ? '' : 'right' }}">
                    <fieldset id="account_information" class="row g-3" style="height: auto;">
                        <div class="col-md-12 text-center">
                            <h2 class="fs-title text-dark">{{ __('website.CreateNewAccount') }}</h2>
                        </div>
                        <div class="col-md-12 text-center">
                            <h3 class="fs-subtitle text-thirdColor">{{ __('website.PersonalInformation') }}</h3>
                        </div>
                        <div class="col-md-12">
                            <label for="FirstName" class="form-label">{{ __('website.FirstName') }}</label>
                            <input type="text" class="form-control" id="FirstName" name="FirstName"
                                placeholder="{{ __('website.FirstName') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="LastName" class="form-label">{{ __('website.LastName') }}</label>
                            <input type="text" class="form-control" id="LastName" name="LastName"
                                placeholder="{{ __('website.LastName') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="Gender" class="form-label">{{ __('website.Gender') }}</label>
                            <select class="form-control {{ session()->get('Lang') == 'en' ? '' : 'rtl' }}" id="Gender"
                                name="Gender" style="font-size: 15px">
                                <option selected disabled>{{ __('website.ChooseYourGender') }}</option>
                                <option value="MALE">{{ __('website.Male') }}</option>
                                <option value="FEMALE">{{ __('website.Female') }}</option>
                            </select>
                        </div>
                        <input type="button" name="next" class="next next-form action-button"
                            value="{{ __('website.Next') }}" />
                    </fieldset>
                    <fieldset id="company_information" class="row g-3" style="height: auto;">
                        <div class="col-md-12 text-center">
                            <h3 class="fs-subtitle text-primary">{{ __('website.AccountInfo') }}</h3>
                        </div>
                        <div class="col-md-12">
                            <label for="Email" class="form-label">{{ __('website.Email') }}</label>
                            <input type="email" class="form-control" id="Email" value="" name="UserEmail"
                                placeholder="{{ __('website.Email') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="Mobile" class="form-label">{{ __('website.Mobile') }}</label>
                            <input type="tel" class="form-control PhoneNumber" id="PhoneNumber" value=""
                                name="UserPhone" style="direction: ltr">
                            <span id="valid-msg" class="hide" style="color:green">valid</span>
                            <span id="error-msg" class="hide" style="color:red"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="Password" class="form-label">{{ __('website.Password') }}</label>
                            <input type="password" class="form-control" id="Password" name="UserPassword"
                                placeholder="{{ __('website.Password') }}" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="ConfirmPassword" class="form-label">{{ __('website.ConfirmPassword') }}</label>
                            <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword"
                                placeholder="{{ __('website.ConfirmPassword') }}" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">{{ __('website.Country') }}</label>
                            <select class="form-control {{ session()->get('Lang') == 'en' ? '' : 'rtl' }}"
                                name="IDCountry" id="country" data-live-search="true" style="font-size: 15px">
                                <option value="">{{ __('website.ChooseCountry') }}</option>
                                {{-- @foreach ($Countries as $Country)
                                    <option value="{{ $Country->id }}">
                                        {{ $Lang == 'ar' ? $Country->country_name_ar : $Country->country_name_en }}
                                    </option>
                                @endforeach --}}
                                <option value="egypt">
                                    Egypt
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">{{ __('website.City') }}</label>
                            <select class="form-control {{ session()->get('Lang') == 'en' ? '' : 'rtl' }}" name="IDCity"
                                id="city" style="font-size: 15px">
                                <option value="">{{ __('website.ChooseCity') }}</option>
                                <option value="cairo">
                                    Cairo
                                </option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">{{ __('website.Address') }}</label>
                            <input type="text" class="form-control" id="address" value="" name="UserAddress"
                                placeholder="{{ __('website.Address') }}">
                        </div>
                        <input type="button" name="previous" class="previous action-button"
                            value="{{ __('website.Previous') }}" />
                        <input type="button" name="next" class="next next-form action-button"
                            value="{{ __('website.Next') }}" />
                    </fieldset>
                    <fieldset id="personal_information" class="row g-3" style="height: auto;">
                        <div class="col-md-12 text-center">
                            <h3 class="fs-subtitle text-primary">{{ __('website.ProgramInfo') }}</h3>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="form-control-img">
                                <div class="profile-pic">
                                    <label class="-label " for="profile-img">
                                        <i class="fa-solid fa-camera"></i>
                                        <span class="mx-2">{{ __('website.ChangeImg') }}</span>
                                    </label>
                                    <input id="profile-img" type="file" name="CompanyLogo" />
                                    <img src="{{ asset('./site/images/profile-picture.webp') }}" id="output" />
                                </div>
                            </div>
                            <label id="profile-img-error" class="error mt-2 text-danger" for="profile-img"></label>
                            <div class="col-md-4 m-auto text-center py-2">{{ __('form.CompanyLogo') }}</div>
                        </div>
                        <div class="col-md-12">
                            <label for="CompanyName" class="form-label">{{ __('website.CompanyName') }}</label>
                            <input type="text" class="form-control" id="CompanyName" value=""
                                name="CompanyName" placeholder="{{ __('website.CompanyName') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="CompanyArea" class="form-label">{{ __('website.CompanyArea') }}</label>
                            <input type="text" class="form-control" id="CompanyArea" value=""
                                name="CompanyArea" placeholder="{{ __('website.CompanyArea') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="CompanyAddress" class="form-label">{{ __('website.CompanyAddress') }}</label>
                            <input type="text" class="form-control" id="CompanyAddress" name="CompanyAddress"
                                placeholder="{{ __('website.CompanyAddress') }}" value="">
                        </div>
                        <div class="col-md-12">
                            <label for="CompanyColor" class="form-label">{{ __('website.CompanyColor') }}</label>
                            <input type="text" class="form-control" id="CompanyColor" name="CompanyColor"
                                placeholder="{{ __('website.CompanyColor') }}" value="">
                        </div>
                        <input type="button" name="previous" class="previous action-button"
                            value="{{ __('website.Previous') }}" />
                        <input type="button" name="next" class="next next-form action-button"
                            value="{{ __('website.Next') }}" />
                    </fieldset>
                    <fieldset id="payment_information" class="row g-3" style="height: auto;">
                        <div class="col-md-12 text-center">
                            <h3 class="fs-subtitle text-primary">{{ __('website.PaymentMethods') }}</h3>
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
                        <input type="button" name="previous" class="previous action-button"
                            value="{{ __('website.Previous') }}" />
                        <input type="submit" name="next" class="next action-button"
                            value="{{ __('website.Submit') }}" />
                    </fieldset>
                </div>
            </form>
        </div>
    </main>
@endsection
@push('feature-js')
    @include('site.auth.js.validation')
    <script src="{{ asset('site/products/js/countryCode.js') }}"></script>
    <script src="{{ asset('site/products/js/signUp.js') }}"></script>
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
