@extends('partials.master')

@section('content')
<form method="post" action="{{ route("storemedia") }}" enctype="multipart/form-data">
    @csrf
    @method("put")
    <input type="file" name="foto">
    <input type="submit">
</form>
<div class="">
    <div class="fullwidth-template">
        <div class="home-slider fullwidth rows-space-60">
            <div class="slider-owl owl-slick equal-container nav-center equal-container" data-slick='{"autoplay":true, "autoplaySpeed":10000, "arrows":true, "dots":true, "infinite":true, "speed":800, "rows":1}'data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                @foreach ($latestProducts as $product)
                <div class="slider-item style{{ $loop->iteration }}" style="background-image: url({{ $product->getFirstMediaUrl(strtolower($product->menu->sq_menu_title)) }})">
                    <div class="slider-inner equal-element" style="background-image: url({{ $product->getFirstMediaUrl(strtolower($product->menu->sq_menu_title)) }})">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    <div class="flash_brand">
                                        <span class="onnew">
                                            <span class="text">
                                                {{ $product->menu->{(\LaravelLocalization::getCurrentLocale())."_menu_title"} }}
                                            </span>
                                        </span>
                                    </div>
                                </h5>
                                <br/>
                                <h3 class="title-big" style="color:#fbf100">
                                    {{ $product->{(\LaravelLocalization::getCurrentLocale())."_title"} }}
                                </h3>
                                <div class="price">
                                    <span class="number-price">
                                        @if($product->new_price !== null)
                                            <del style="color:#ec3b20;"> {{ $product->price_with_euro }} </del> &nbsp;
                                            <inc> {{ $product->new_price_with_euro }}</inc>
                                        @else
                                            <inc> {{ $product->price_with_euro }}</inc>
                                        @endif
                                    </span>
                                </div>
                                <a href="{{ route($product->menu->route_name, [$product->menu->slug,$product->slug]) }}" class="button btn-shop-the-look bgroud-style">shiko produktin</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="ysera-product produc-featured rows-space-40">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    PRODUKTE TË TJERA
                </h3>
                <ul class="row list-products auto-clear equal-container product-grid">
                    @foreach ($latestProducts as $product)
						<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
							<div class="product-inner equal-element">
								<div class="product-top">
                                    @if ($product->new_price !== null)
									<div class="flash">
										<span class="onnew">
											<span class="text">
												{{ $product->percentage_discount }}
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
										<a href="{{ route($product->menu->route_name, [$product->menu->slug, $product->slug]) }}">
                                            <img src="{{ $product->getFirstMediaUrl(strtolower($product->menu->sq_menu_title),'thumb') }}">
										</a>
									</div>
								</div>
								<div class="product-info">
									<h5 class="product-name product_title">
                                        {{ $product->{(\LaravelLocalization::getCurrentLocale())."_title"} }}
									</h5>
									<div class="price">
                                        @if($product->new_price !== null)
                                            <inc> {{ $product->new_price_with_euro }}</inc>
                                            <del> {{ $product->price_with_euro }} </del> &nbsp;
                                        @else
                                            <inc> {{ $product->price_with_euro }}</inc>
                                        @endif
                                    </div>
								</div>
							</div>
						</li>
                    @endforeach
				</ul>
            </div>
        </div>

        <div class="banner-pinmap-wrapp rows-space-70">
            <div>
                <div class="banner">
                    <div class="item-banner style21" style="height:500px">
                        <div class="inner" style="height:100%;background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(

                            ); ">
                            <div class="banner-content container">
                                <div class="banner-content-inner">
                                    <h4 class="ysera-subtitle">Kurse nga zbritjet tona deri në  <b style=""></b></h4>
                                    <h3 class="title">
                                    </h3>
                                    <div class="start-from">
                                        nga <span><del style="font-size:20px;"></del></span> në <span><inc style="font-size:20px;"> </inc></span>
                                    </div>

                                    <a href="prod_detajet.php?prod=" class="button btn-shop-now">shiko produktin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
