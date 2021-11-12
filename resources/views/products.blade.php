@extends('partials.master')

@section('content')
<div class="main-content main-content-product no-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-trail breadcrumbs">
					<ul class="trail-items breadcrumb">
						<li class="trail-item trail-begin">
							<a href="index.php">{{ config('app.name') }} </a>
						</li>
						<li class="trail-item trail-begin">
							<a href="">Produktet</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="site-main">
					{{-- <h3 class="custom_blog_title">
						<small style="font-size:18px; color:#666; font-weight:bold;">Produktet -> </small>
					</h3> --}}
					<!-- <div class="shop-top-control">
						<form class="select-item select-form">
							<span class="title">Sort</span>
							<select title="sort" data-placeholder="9 Products/Page" class="chosen-select">
								<option value="2">9 Products/Page</option>
								<option value="1">12 Products/Page</option>
								<option value="3">10 Products/Page</option>
								<option value="4">8 Products/Page</option>
								<option value="5">6 Products/Page</option>
							</select>
						</form>
						<form class="filter-choice select-form">
							<span class="title">Sort by</span>
							<select title="sort-by" data-placeholder="Price: Low to High" class="chosen-select">
								<option value="1">Price: Low to High</option>
								<option value="2">Sort by popularity</option>
								<option value="3">Sort by average rating</option>
								<option value="4">Sort by newness</option>
								<option value="5">Sort by price: low to high</option>
							</select>
						</form>
						<div class="grid-view-mode">
							<div class="inner">
								<a href="produktet(liste).html" class="modes-mode mode-list">
									<span></span>
									<span></span>
								</a>
								<a href="produktet(grid).html" class="modes-mode mode-grid  active">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
					</div> -->
					<ul class="row list-products auto-clear equal-container product-grid">
                        @forelse ($products as $product)
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
                            <hr>
                            <p class="text-danger">{{ __("Nuk ka produkte!") }}</p>
                        @endforelse
					</ul>
				</div>
			</div>
            <div class="d-flex justify-content-center">
                {!! $products->links() !!}
            </div>
		</div>
	</div>
</div>

@endsection
