@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
        <div class="container">
            <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/dasbor.jpg') }}">
                <div class="hero__text">
                    
                    <a href="#" class="primary-btn">SHOP NOW</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($menu_categories as $menu_category)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ $menu_category->photo->getUrl() }}">
                                <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produk Tersedia</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter" id="product-list">
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    
    <!-- Banner End -->
@endsection
