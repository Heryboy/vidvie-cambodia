  <header>
	<!-- top Header -->
	<div id="top-header">
		<div class="container">
			<div class="pull-left">
				<span>Welcome to VidVie shop!</span>
			</div>
			<div class="pull-right">
				<ul class="header-top-links">
					<li><a href="{{url('sign_up_dealer')}}">Sign up dealer</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /top Header -->

	<!-- header -->
	<div id="header">
		<div class="container">
			<div class="pull-left">
				<!-- Logo -->
				<div class="header-logo">
					<a class="logo" href="{{url('/')}}">
						<img src="{{url('assets/front_end/vidvie-plugin/img/logo.jpg')}}" alt="">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Search -->
				<div class="header-search">
					<form>
						<input class="input search-input" type="text" placeholder="Enter your keyword">
						<select class="input search-categories">
							<option value="0">All Categories</option>
							<option value="1">Category 01</option>
							<option value="1">Category 02</option>
						</select>
						<button class="search-btn"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->
			</div>
			<div class="pull-right">
				<ul class="header-btns">
					<!-- Account -->
					<li class="header-account dropdown default-dropdown">
						<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
							<div class="header-btns-icon">
								<i class="fa fa-facebook"></i>
							</div>
						</div>
					</li>

					<!-- /Account -->

					<!-- Mobile nav toggle-->
					<li class="nav-toggle">
						<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
					</li>
					<!-- / Mobile nav toggle -->
				</ul>
			</div>
		</div>
		<!-- header -->
	</div>
	<!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
	<!-- container -->
	<div class="container">
		<div id="responsive-nav">

			<!-- menu nav -->
			<div class="menu-nav">
				<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
				<ul class="menu-list">
					<?php $getMenus = Helpers::getMenu();?>
					@foreach($getMenus as $getMenu)
						@if($getMenu['child_Menu']!=null)
							<li class="dropdown mega-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								{!!$getMenu['name']!!} <i class="fa fa-caret-down"></i>
								</a>
								<div class="custom-menu">
									<div class="row">
										@foreach($getMenu['child_Menu'] as $getChildMenu)
										<div class="col-md-4">
											<ul class="list-links">
												@if($getChildMenu['url']===null)
													<li>
														<h3 class="list-links-title">{!! $getChildMenu['name'] !!}</h3>
													</li>
													@foreach($getChildMenu['sub_child_menu'] as $getSubChildMenu)
													<li style="padding-left:10px;"><a href="{!! $getSubChildMenu['url'] !!}?id={!!$getSubChildMenu['fmenu_id']!!}">{!!$getSubChildMenu['name']!!}</a></li>
													@endforeach
												@else
													<li><a href="{!! $getSubChildMenu['url'] !!}?id={!!$getChildMenu['fmenu_id']!!}">{!!$getChildMenu['name']!!}</a></li>
												@endif

												<!-- <li><a href="{{url('products')}}">Charger</a></li>
												<li><a href="{{url('products')}}">Phones & Accessories</a></li>
												<li><a href="{{url('products')}}">Jewelry & Watches</a></li>
												<li><a href="{{url('products')}}">Bags & Shoes</a></li> -->
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										@endforeach
										<!-- <div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Vidvie Global</h3>
												</li>
												<li><a href="{{url('products')}}">Wireless</a></li>
												<li><a href="{{url('products')}}">Charger</a></li>
												<li><a href="{{url('products')}}">Phones & Accessories</a></li>
												<li><a href="{{url('products')}}">Jewelry & Watches</a></li>
												<li><a href="{{url('products')}}">Bags & Shoes</a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Categories</h3>
												</li>
												<li><a href="{{url('products')}}">Women’s Clothing</a></li>
												<li><a href="{{url('products')}}">Men’s Clothing</a></li>
												<li><a href="{{url('products')}}">Phones & Accessories</a></li>
												<li><a href="{{url('products')}}">Jewelry & Watches</a></li>
												<li><a href="{{url('products')}}">Bags & Shoes</a></li>
											</ul>
										</div> -->

									</div>

								</div>
							</li>
						@else
							@if($getMenu['url']!=null)
								<li><a href="{!!$getMenu['url']!!}">{!!$getMenu['name']!!}</a></li>
							@else
								<li><a href="{{url('home/category')}}?id={!!$getMenu['id']!!}">{!!$getMenu['name']!!}</a></li>
							@endif
						@endif

					@endforeach
				</ul>
			</div>
			<!-- menu nav -->
		</div>
	</div>
	<!-- /container -->
</div>
<!-- /NAVIGATION -->
	

