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
							<!-- <div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
									<option value="0">10</option>
									<option value="1">20</option>
									<option value="2">30</option>
								</select>
							</div> -->
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
							@foreach($getProducts as $p)
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										@if($p->discount!=null)
										<div class="product-label">
											<span>New</span>
											<span class="sale">-20%</span>
										</div>
										@else 
										<div class="product-label">
											<span>New</span>
										</div>
										@endif
										<img src="{{url($p->image)}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">
											${{$p->price}} 
											@if($p->discount!=null)<del class="product-old-price">${{$p->new_price}} </del>@endif
										</h3>
										<h2 class="product-name"><a href="#">{{$p->name}}</a></h2>
										<div class="product-btns">
											<a href="{{url('product_details')}}?product_id={{$p->product_id}}">
												<button class="primary-btn add-to-cart">
													<i class="fa fa-shopping-cart"></i>
													View detail
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
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
							<!-- <div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
									<option value="0">10</option>
									<option value="1">20</option>
									<option value="2">30</option>
								</select>
							</div> -->
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
