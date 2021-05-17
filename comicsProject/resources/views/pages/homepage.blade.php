@extends('layouts.main-layout')

@section('title')
    <title>Homepage - Comics </title>
@endsection

@section('main')

<main>
    <section class="jumbotron">
        <img src=" {{ asset('storage/assets/jumbotron.jpg') }}">
    </section>

    <section class="comics">
        <div class="container">
            <div class="section-label">
                Current series
            </div>
            @foreach ($data as $comic)
                <div class="comic">
                    <div class="comic-cover">
                        <img src="{{ $comic['thumb'] }}">
                    </div>
                    <div class="comic-name">
                        {{ $comic['title'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="merchandise">
        <div class="container">
            <ul class="buy-links">
                <li>   
                    <a href="#">
                        <img src=" {{ asset('storage/assets/buy-comics-digital-comics.png')}}">
                        <span class="merch-text">Digital Comics</span>
                    </a>     
                </li>
                <li>
                    <a href="#">
                        <img src=" {{ asset('storage/assets/buy-comics-merchandise.png')}}">
                        <span class="merch-text">DC Merchandise</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src=" {{ asset('storage/assets/buy-comics-shop-locator.png')}}">
                        <span class="merch-text">Comic Shop Locator</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src=" {{ asset('storage/assets/buy-comics-subscriptions.png')}}">
                        <span class="merch-text">Subscription</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src=" {{ asset('storage/assets/buy-dc-power-visa.svg')}}">
                        <span class="merch-text">DC Power Visa</span>
                    </a>
                </li>
            </ul>
        </div>
    <section> 
</main>
@endsection