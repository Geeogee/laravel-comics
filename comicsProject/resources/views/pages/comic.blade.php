@extends('layouts.main-layout')
@section('main')
    <main>
        <section class="comic">
            <div class="comic-cover-bar">
                <div class="wrapper-comic-cover">
                    <div class="label comic-type-label">
                        {{ $comic['type'] }}
                    </div>
                    <img class="comic-cover" src=" {{ $comic['thumb'] }} ">
                    <div class="label view-gallery-label">
                        View Gallery
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="comic-info">
                    <span class="comic-title">
                        {{ $comic['title'] }}
                    </span>
                    <div class="availability-bar">
                        <span class="wrapper-price">
                            U.S. Price: 
                            <span class="price">
                                {{ $comic['price'] }}
                            </span>
                        </span>
                        <span class="availability">
                            Available
                        </span>
                        <div class="select-check-availabilty">
                            Check availability
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    
                </div>
                <div class="banner-adv">
                    aaa
                </div>
            </div>
            
        </section>
    </main>
@endsection