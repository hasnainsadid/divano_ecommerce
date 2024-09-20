@extends('web.layouts.master')
@section('title', 'Home')
@section('content')
    @include('web.pages.home.sections.slider')
    @include('web.pages.home.sections.feature')
    @include('web.pages.home.sections.popular_products')
    @include('web.pages.home.sections.popup_products')
    @include('web.pages.home.sections.card')
    @include('web.pages.home.sections.newsletter')
    @include('web.pages.home.sections.benefit')

    <!-- ========================  Instagram ======================== -->
    {{-- <section class="instagram">

        <!--Header-->

        <header>
            <h2 class="h6 title">
                <i class="fa fa-instagram fa-3x"></i> <br>
                #DivanoFurniture
            </h2>
        </header>

        <!--Gallery-->

        <div class="container">

            <div class="gallery clearfix">
                <a class="item" href="#">
                    <img src="{{ asset('web') }}/assets/images/product-1.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="{{ asset('web') }}/assets/images/product-2.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="{{ asset('web') }}/assets/images/product-3.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="{{ asset('web') }}/assets/images/product-4.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="{{ asset('web') }}/assets/images/product-5.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="{{ asset('web') }}/assets/images/product-6.jpg" alt="Alternate Text">
                </a>
            </div> <!--/gallery-->

        </div>

    </section> --}}
@endsection
