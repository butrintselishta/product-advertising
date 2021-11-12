@extends('partials.master')

@section('content')

<div class="main-content main-content-details single no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index.php">AS-Hoot</a>
                        </li>
                        <li class="trail-item">
                            <a href="produktet.php">Produktet</a>
                        </li>
                        <li class="trail-item trail-end active">
                            {{-- title --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-details full-width col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="details-product" > <!-- style="float:none; margin:0 auto;"-->
                        <div class="details-thumd"> <!--   style="float:none; margin:0 auto;" -->
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom" data-zoom-image="{{ $product->getFirstMediaUrl(strtolower($product->menu->slug)) }}"
                                src="{{ $product->getFirstMediaUrl(strtolower($product->menu->slug)) }}" alt="img">
                                <a href="{{ $product->getFirstMediaUrl(strtolower($product->menu->slug)) }}" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <div class="product-preview image-small product_preview">
                                <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach ($product->getMedia(strtolower($product->menu->slug)) as $media)
                                        <a href="#" data-image="{{ $media->getUrl() }}"
                                        data-zoom-image="{{ $media->getUrl() }}">
                                            <img src="{{ $media->getUrl() }}"
                                                data-large-image="{{ $media->getUrl() }}" alt="img">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details-infor" > <!-- style="width:50%; float:none; margin:0 auto;"-->
                            <h1 class="product-title" > <!-- style="float:none; text-align:center; margin-top: 15px;" -->
                                {{ $product->{(\LaravelLocalization::getCurrentLocale()). "_title"} }}
                            </h1>
                            <hr>
                            @if ($product->new_price !== null)
                                <div class="product-item" style="margin-bottom:10px;">
                                    <div class="product-top" style="position:static;">
                                        <div class="flash" style="float:left;">
                                            <span class="onnew">
                                                <span class="text">{{ $product->percentage_discount }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="price">
                                @if ($product->new_price !== null)
                                    <small> nga: </small>
                                    <del style="color: #ec3b20;margin-right: 5px;font-size: 24px;"> {{ $product->price_with_euro }} </del>&nbsp;
                                    <small> në: </small>
                                    <inc style="/* display: block; */font-size: 26px;color: #36469e;font-weight: 550;line-height: 100%;">{{ $product->new_price_with_euro }}</inc>
                                @else
                                    <inc style="/* display: block; */font-size: 26px;color: #36469e;font-weight: 550;line-height: 100%;">{{ $product->price_with_euro }}</inc>
                                @endif
                            </div>
                            <hr>
                            <div class="product-details-description">
                                @if ($product->{(LaravelLocalization::getCurrentLocale())."_color"} !== null)
                                    <div class="availability">
                                        <strong>Ngjyra: </strong> {{ $product->{(LaravelLocalization::getCurrentLocale())."_color"} }}
                                    </div>
                                @endif
                                <div class="availability">
                                    <strong>SPECIFIKAT: </strong>
                                </div>
                                {!! $product->{(LaravelLocalization::getCurrentLocale()). "_description"} !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related products product-grid mt-4">
                <h2 class="product-grid-title">{{ __("Të ngjashme") }}</h2>
                <ul class="row list-products auto-clear equal-container product-grid">
                    @forelse ($latestUpdatedProducts as $product)
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    @if($product->new_price !== null)
                                    <div class="flash">
                                        <span class="onnew">
                                            <span class="text">
                                               {{  $product->percentage_discount  }}
                                            </span>
                                        </span>
                                    </div>
                                    @endif
                                    <div class="flash_brand">
                                        <span class="onnew">
                                            <span class="text">
                                                   {{ $product->menu->{(\LaravelLocalization::getCurrentLocale())."_menu_title"} }}
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="{{ route($product->route_name, [$product->menu->slug, $product->slug]) }}">
                                            @if ($product->getMedia(strtolower($product->menu->sq_menu_title))->isNotEmpty())
                                                <img src="{{ $product->getFirstMediaUrl(strtolower($product->menu->sq_menu_title),'thumb') }}">
                                            @else
                                                <img src="{{ asset('media/no-image.png') }}">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="{{ route($product->route_name, [$product->menu->slug, $product->slug]) }}">{{ $product->{(\LaravelLocalization::getCurrentLocale())."_title"} }}</a>
                                    </h5>
                                    <div class="price">
                                        @if ($product->new_price !== null)
                                            <ins>{{ $product->new_price_with_euro }}</ins>
                                            <del>{{ $product->price_with_euro }}</del>
                                        @else
                                            <ins>{{ $product->price_with_euro }}</ins>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty

                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
