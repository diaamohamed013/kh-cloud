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

        .middle {
            width: 100%;
            text-align: center;
        }

        .middle .notHaveAccount,
        .middle .haveAccount {
            width: calc((100% / 2) - 10px);
            margin: 0 5px;
        }

        .middle .box {
            width: 100%;
            padding: 0 20px;
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #06a3da;
        }

        .middle .box span:before {
            font-size: 25px;
            font-family: FontAwesome;
            display: block;
            transition: all 300ms ease-in-out;
            font-weight: normal;
            color: white;
        }

        .middle .haveAccount span:before {
            content: "\f090";
        }

        .middle .notHaveAccount span:before {
            content: "\f234";
        }

        .middle .box span {
            font-size: 16px;
            user-select: none;
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

        @media (max-width: 768px) {
            .middle .notHaveAccount,
            .middle .haveAccount {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
@endpush
@section('content')
    <main class="packageDetails">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('site/products/images/course-02.jpg') }}"
                            alt="Course Two">
                        <form id="exam-form" method="GET" action="{{ route('site.signup') }}">
                            <div class="mb-3">
                                <select name="IDPeriodPackage" id='periodPackageSelect'
                                    class="mb-3 form-select form-control-lg bg-thirdColor mx-auto text-white"style="text-align:center; font-size:1.1rem;"
                                    required>
                                    {{-- <option value="">{{ trans('website.PeriodSelect') }}</option>
                                    @foreach ($PackagePeriods as $period)
                                        <option value="{{ $period->IDPeriodPackage }}">
                                            {{ $Lang == 'en' ? $period->PeriodNameEn : $period->PeriodNameAr }}
                                        </option>
                                    @endforeach --}}
                                    <option value="">Select subscription period</option>
                                    <option value="113">
                                        Monthly
                                    </option>
                                    <option value="116">
                                        Yearly
                                    </option>
                                </select>
                                {{-- <div class="alert alert-danger" id="errortext" style="display: none">
                                    <strong>{{ trans('website.Attention') }}</strong>{{ trans('website.SelectPeriodError') }}
                                </div> --}}
                                <select name="currencySelect" id='currencySelect'
                                    class="mb-3 form-select form-control-lg bg-thirdColor mx-auto text-white"style="text-align:center; font-size:1.1rem;"
                                    required>
                                    {{-- <option value=''>{{ trans('form.ChooseCurrency') }}</option>
                                    <option value="DOLAR">{{ trans('form.Dolar') }}</option>
                                    <option value="POUND">{{ trans('form.Pound') }}</option> --}}
                                    <option value="">Choose Currency</option>
                                    <option value="DOLAR">Dolar</option>
                                    <option value="POUND">Pound</option>
                                </select>
                                {{-- <div class="card">
                                    <div class="card-body">
                                        @if ($Package->PackageDiscount != 0)
                                            <div class="alert alert-info">
                                                <strong>{{ trans('website.Note') }}</strong>
                                                {{ __('website.Discount') }}
                                                {{ $Package->PackageDiscount }} %
                                                {{ __('website.OnThisPackage') }}
                                                <input type="hidden" id="PackageDiscount"
                                                    value="{{ $Package->PackageDiscount }}">
                                            </div>
                                        @endif
                                        <h6 class="card-title">{{ __('website.KidsNumber') }}</h6>
                                        <h6 class="card-subtitle mb-2 text-muted" id="maxKids">
                                            {{ $PackagePeriodMonthly->PackageMaxKids }}</h6>
                                        <h6 class="card-title" id="currencyLabel">{{ trans('form.PriceInPound') }}
                                        </h6>
                                        <h6 class="card-subtitle mb-2 text-muted"id="package_price">
                                            @if ($Package->PackageDiscount == 0)
                                                {{ $PackagePeriodMonthly->PackagePriceInPound }}
                                            @else
                                                <del class="del"
                                                    style="color:#c73a40">{{ $PackagePeriodMonthly->PackagePriceInPound }}</del>
                                                {{ $PackagePeriodMonthly->PackagePriceInPound - ($PackagePeriodMonthly->PackagePriceInPound * $Package->PackageDiscount) / 100 }}
                                            @endif
                                            {{ trans('website.EGP') }}
                                            {{ $Lang == 'ar' ? $PackagePeriodMonthly->PeriodNameAr : $PackagePeriodMonthly->PeriodNameEn }}
                                        </h6>
                                        <p class="card-text" id='priceNote'>
                                        <p>
                                    </div>
                                </div> --}}
                                {{-- @if ($User)
                                    <button type='submit' id="submitExamPackage"
                                        class="btn btn-primary form-control form-control-lg btn-block"
                                        disabled>{{ __('website.PackageCheckoutBtn') }}</button>
                                @else
                                    <button type="button" id="checkAccountButtonExam"
                                        class="btn btn-primary form-control form-control-lg btn-block"
                                        data-bs-toggle="modal" data-bs-target="#checkAccount" disabled>
                                        {{ __('website.PackageCheckoutBtn') }}
                                    </button>
                                @endif --}}
                                <button type="button" id="checkAccountButtonExam"
                                    class="btn btn-primary form-control form-control-lg btn-block" data-bs-toggle="modal"
                                    data-bs-target="#checkAccount" disabled>
                                    Continue to checkout
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 ">
                    Text
                </div>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="checkAccount" tabindex="-1" aria-labelledby="checkAccountLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="middle d-flex justify-content-center flex-column flex-md-row">
                        <label class="haveAccount" style="cursor: pointer">
                            <div class="box">
                                <span class="text-white">Already Have Account</span>
                            </div>
                        </label>
                        <label class="notHaveAccount" style="cursor: pointer">
                            <div class="box">
                                <span class="text-white">Don't Have Account</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('feature-js')
    <script type="text/javascript">
        $(document).ready(function() {
            var form = document.getElementById("exam-form");
            $('.haveAccount').on("click", function() {
                $(form).attr('action', '{{ route('site.login.system') }}');
                form.submit();
            });
            $('.notHaveAccount').on("click", function() {
                $(form).attr('action', '{{ route('site.signup') }}');
                form.submit();
            });
            $(document).on('change', '#periodPackageSelect', function() {
                var Currency = '';
                var IDPeriodPackage = $(this).val();
                if (IDPeriodPackage != '') {
                    $('#errortext').hide();
                }
                if (IDPeriodPackage != '' && $('#currencySelect').val() != '') {
                    $('#submitExamPackage').removeAttr("disabled");
                    $('#checkAccountButtonExam').removeAttr("disabled");
                } else {
                    $("#submitExamPackage").prop("disabled", true);
                    $("#checkAccountButtonExam").prop("disabled", true);
                }
                if (!$('#currencySelect').val()) {
                    Currency = 'POUND';
                }
            });
            $(document).on('change', '#currencySelect', function() {
                var Currency = $(this).val();
                var IDPeriodPackage = $('#periodPackageSelect').val();
                if (IDPeriodPackage != '') {
                    $('#errortext').hide();
                }
                if (IDPeriodPackage != '' && $('#currencySelect').val() != '') {
                    $('#submitExamPackage').removeAttr("disabled");
                    $('#checkAccountButtonExam').removeAttr("disabled");
                } else {
                    $("#submitExamPackage").prop("disabled", true);
                    $("#checkAccountButtonExam").prop("disabled", true);
                }
                if (IDPeriodPackage == '') {
                    $('#errortext').show();
                } else {
                    $('#errortext').hide();
                }
            });
        });
    </script>
@endpush
