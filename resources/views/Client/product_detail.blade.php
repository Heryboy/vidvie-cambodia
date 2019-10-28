@extends('Client.common.layout') 

@section('content')

<!-- section -->
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li>
					@if($get_bread_crumb_arr)
					<a href="{!! $get_bread_crumb_arr[0]['url_link'] !!}?id={{$get_bread_crumb_arr[0]['fmenu_id']}}">{{$get_bread_crumb_arr[0]['category_name']}}</a>
					@endif
				</li>
				<li class="active">{{$get_product_arr[0]['product_name']}}</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
						     @foreach($getProductImage as $image)
							<div class="product-view">
								<img src="{{url('')}}/{{$image->image}}" alt="no">
							</div>
							@endforeach							
						</div>
						<div id="product-view">
							@foreach($getProductImage as $thumnail_image)
							<div class="product-view">
								<img src="{{url('')}}/{{$thumnail_image->thumnail_image}}"
									alt="">
							</div>
							@endforeach		
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							
						 	@if($get_product_arr[0]['product_discount']!=null)
							<div class="product-label">
								<span>{{$get_product_arr[0]['product_status']}}</span>
								<span class="sale">-{{$get_product_arr[0]['product_discount']}}%</span>
							</div>
							@endif
							<h2 class="product-name">{{$get_product_arr[0]['product_name']}}</h2>
							@if($get_product_arr[0]['product_discount']!=null)
							<h3 class="product-price">${{$get_product_arr[0]['product_new_price']}} <del class="product-old-price">${{$get_product_arr[0]['product_price']}}</del></h3>
							@else
							<h3 class="product-price">${{$get_product_arr[0]['product_price']}}</h3>
							@endif
							<p><strong>Availability:</strong> <span class="btn-success padding-2"> {{$get_product_arr[0]['product_status']}} </span></p>
							<p><strong>Brand:</strong> E-SHOP</p>
							<p>{{$get_product_arr[0]['product_description']}}</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Specification</a></li>

							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p>{{$get_product_arr[0]['product_description']}}</p>
								</div>
								<div id="tab2" class="tab-pane fade in">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<h5>Width</h5>
													</td>
													<td>
														<h5>128mm</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Height</h5>
													</td>
													<td>
														<h5>508mm</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Depth</h5>
													</td>
													<td>
														<h5>85mm</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Weight</h5>
													</td>
													<td>
														<h5>52gm</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Quality checking</h5>
													</td>
													<td>
														<h5>yes</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Freshness Duration</h5>
													</td>
													<td>
														<h5>03days</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>When packeting</h5>
													</td>
													<td>
														<h5>Without touch of hand</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Each Box contains</h5>
													</td>
													<td>
														<h5>60pcs</h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
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
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Related For You</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<!-- <span>New</span> -->
							</div>
							<img class="img-responsive" src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<h4 class="product-name"><a href="#">Product Name Goes Here</a></h4>
							<div class="product-btns">
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> View
									Detail</button>
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
							</div>
							<img class="img-responsive" src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<h4 class="product-name"><a href="#">Product Name Goes Here</a></h4>
							<div class="product-btns">
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> View
									Detail</button>
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
								<span class="sale">-20%</span>
							</div>
							<img class="img-responsive" src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<h4 class="product-name"><a href="#">Product Name Goes Here</a></h4>
							<div class="product-btns">
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> View
									Detail</button>
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
							<img class="img-responsive" src="{{url('assets/front_end/vidvie-plugin/img/single-product.jpg')}}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<h4 class="product-name"><a href="#">Product Name Goes Here</a></h4>
							<div class="product-btns">
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> View
									Detail</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection
