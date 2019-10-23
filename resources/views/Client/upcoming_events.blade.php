@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">
			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">UPCOMING EVENTS</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			<!-- Upcoming Event -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
					<!-- event_news -->
						<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
							<div class="btm-right">
								<img src="images/home.jpg" alt=" ">
									<div class="captn">
										<h4>Law and Regulation</h4>	
									</div>
							</div>
						</div>	
					<!-- //event_news -->	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
					<!-- event_news -->
						<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
							<div class="btm-right">
								<img src="images/home.jpg" alt=" ">
									<div class="captn">
										<h4>Law and Regulation</h4>	
									</div>
							</div>
						</div>	
					<!-- //event_news -->	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
					<!-- event_news -->
						<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
							<div class="btm-right">
								<img src="images/home.jpg" alt=" ">
									<div class="captn">
										<h4>Law and Regulation</h4>	
									</div>
							</div>
						</div>	
					<!-- //event_news -->	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
					<!-- event_news -->
						<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
							<div class="btm-right">
								<img src="images/home.jpg" alt=" ">
									<div class="captn">
										<h4>Law and Regulation</h4>	
									</div>
							</div>
						</div>	
					<!-- //event_news -->	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
					<!-- event_news -->
						<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
							<div class="btm-right">
								<img src="images/home.jpg" alt=" ">
									<div class="captn">
										<h4>Law and Regulation</h4>	
									</div>
							</div>
						</div>	
					<!-- //event_news -->	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
					<!-- event_news -->
						<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
							<div class="btm-right">
								<img src="images/home.jpg" alt=" ">
									<div class="captn">
										<h4>Law and Regulation</h4>	
									</div>
							</div>
						</div>	
					<!-- //event_news -->	
				</div>
			</div>
			<!-- //recently Event -->

			<div class="row">
				<div class="col-lg-12">
					<div class="padding-top-sm padding-bottom-sm">
				    	<a class="btn btn-sm btn-primary" href="#about">VIEW ALL</a>	
				    </div>
				</div>
			</div>
			<!-- // menmber -->
		</div>
		<!-- //index-home -->	

		<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
		</div>
	</div>

@endsection
