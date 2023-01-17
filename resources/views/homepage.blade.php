@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('page-content')
    
    <section class="ms-hero">
        
        <div class="ms-hero-container">
            <img class="img-fluid ms-hero-img" src="{{ Vite::asset("resources/img/jumbotron.jpg") }}" alt="Hero Image">
        </div>

    </section>

    <section class="ms-products py-4">

        <div class="container">
            <h5 class="ms-current-series">CURRENT SERIES</h5>
        </div>

        <div class="container py-4">

            <div class="row gx-2 gy-4">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <img src="{{ $comic["thumb"] }}" alt="">
                        <strong class="py-2 ms-card-title">{{ $comic["title"] }}</strong>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-1">
                <button class="ms-load-btn">LOAD MORE</button>
            </div>
            
        </div>

    </section>

    <section class="ms-bonus">

        <div class="container-fluid py-4">
            <div class="row flex-nowrap">
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="ms-bonus-img" src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}" alt="Bonus 1">
                    <strong class="px-2">DIGITAL COMICS</strong>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="ms-bonus-img" src="{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}" alt="Bonus 1">
                    <strong class="px-2">DC MERCHANDISE</strong>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="ms-bonus-img" src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}" alt="Bonus 1">
                    <strong class="px-2">SUBSCRIPTION</strong>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="ms-bonus-img" src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="Bonus 1">
                    <strong class="px-2">SHOP LOCATOR</strong>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="ms-bonus-img" src="{{ Vite::asset("resources/img/buy-dc-power-visa.svg") }}" alt="Bonus 1">
                    <strong class="px-2">DC POWER VISA</strong>
                </div>
            </div>
        </div>

    </section>

@endsection