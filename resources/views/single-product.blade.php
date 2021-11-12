@extends('partials.master')

@section('content')

<div class="main-content main-content-product no-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-trail breadcrumbs">
					<ul class="trail-items breadcrumb">
						<li class="trail-item trail-begin">
							<a href="index.php">AS & HOOT</a>
						</li>
						<li class="trail-item trail-begin">
							<a href="produktet.php">Produktet</a>
						</li>
						<li class="trail-item trail-end active"><!--  -->
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
						<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
							<div class="product-inner equal-element">
								<div class="product-top">
									<div class="flash">
										<span class="onnew">
											<span class="text">
												{{-- zbritja --}}
											</span>
										</span>
									</div>
									<div class="flash_brand">
										<span class="onnew">
											<span class="text">
                                                    {{-- menu title --}}
											</span>
										</span>
									</div>
								<?php } ?>
								</div>
								<div class="product-thumb">
									<div class="thumb-inner">
										<a href="">
											<img src="" alt="img">
											{{-- <img src="assets/images/produktet/no-image.png" alt="img"> --}}
										</a>
									</div>
								</div>
								<div class="product-info">
									<h5 class="product-name product_title">
										<a href="">{{-- title --}}</a>
									</h5>
									<div class="price">
										<del>€</del>
                                        <ins>€</ins>
                                    </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12">
                {{-- pagiantion --}}
            </div>
		</div>
	</div>
</div>

@endsection
