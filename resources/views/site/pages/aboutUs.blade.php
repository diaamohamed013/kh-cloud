@extends('site.master')

@section('title')
    {{ 'About Us' }}
@endsection

@section('bread-title')
    {{ 'About Us' }}
@endsection

@section('content')
    @include('site.include.breadcrumb')
    @include('site.include.aboutUs_content')
    @include('site.include.testimonials_content')
    @include('site.include.partners_content')
@endsection
