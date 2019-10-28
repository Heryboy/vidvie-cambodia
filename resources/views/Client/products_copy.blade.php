@extends('Client.common.layout') 

@section('content')

	<!-- section -->
	<div class="wrapper-banner-product">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-12 col-sm-12">
					<img src="{{url('assets/front_end/vidvie-plugin/img/image-product-detail.jpg')}}" alt="no" class="img-responsive" width="100%" />
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- MAIN -->
				<div id="main" class="col-md-12">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
									<option value="0">Product Name</option>
									<option value="0">Price</option>
								</select>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
									<option value="0">10</option>
									<option value="1">20</option>
									<option value="2">30</option>
								</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<a href="{{url('product_details')}}">
										<div class="product-thumb">
											<div class="product-label">
												<span>New</span>
											</div>
											<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-price">$32.50</h3>
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<div class="product-btns">
												<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
													View detail
												</button>
											</div>
										</div>
									</a>
								</div>
							</div>
							
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<a href="{{url('product_details')}}">
										<div class="product-thumb">
											<div class="product-label">
												<span>New</span>
											</div>
											<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-price">$32.50</h3>
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<div class="product-btns">
												<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
													View detail
												</button>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<a href="{{url('product_details')}}">
										<div class="product-thumb">
											<div class="product-label">
												<span>New</span>
											</div>
											<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-price">$32.50</h3>
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<div class="product-btns">
												<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
													View detail
												</button>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-md"></div>

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<a href="{{url('product_details')}}">
										<div class="product-thumb">
											<div class="product-label">
												<span>New</span>
											</div>
											<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-price">$32.50</h3>
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<div class="product-btns">
												<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
													View detail
												</button>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- <div class="clearfix visible-sm visible-xs"></div> -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- <div class="clearfix visible-md visible-lg visible-sm visible-xs"></div> -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- <div class="clearfix visible-sm visible-xs"></div> -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- <div class="clearfix visible-md visible-lg visible-sm visible-xs"></div> -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- <div class="clearfix visible-md visible-lg visible-sm visible-xs"></div> -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del>
										</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<img src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">$32.50</h3>
										<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
										<div class="product-btns">
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
												View detail</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
									<option value="0">Product Name</option>
									<option value="0">Price</option>
									<!-- <option value="0">Rating</option> -->
								</select>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
									<option value="0">10</option>
									<option value="1">20</option>
									<option value="2">30</option>
								</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection
