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
@endpush
@section('content')
    <main class="packageDetails">
        <div class="container">
            <div class="row">
                login
            </div>
        </div>
    </main>
@endsection
@push('feature-js')
@endpush
