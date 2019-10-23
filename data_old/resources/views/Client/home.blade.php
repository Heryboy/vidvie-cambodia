@extends('Client.common.layout') 

@section('content')
<!-- slide -->
@include('Client.common.slideshow')

<div class="container padding-top-sm padding-bottom-lg">
	<!-- index-home -->
	<!-- <div class="index-home"> -->
		<!-- welcome -->
		<div class="row">
			<div class="padding-bottom-sm">
				<div class="col-lg-7 col-sm-7 wow fadeInDown">
					<div class="title-event padding-bottom-sm wow fadeInDown">
						Welcome to TBCC
					</div>

					<p class="color-gray">Our Organization is provide is the most popular organization in Cambodia. We have cooperated with manay partners not only Cambodia but also in Thailand and partners in Cambodia.Our Organization is provide is the most popular organization in Cambodia.</p>
					<div class="padding-top-sm">
						<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
					</div>
				</div>

				<div class="col-lg-5 col-sm-5 wow fadeInDown">
					<div class="image"><img src="{{url('images/home.jpg')}}" width="100%"></div>
				</div>
				
				<div class="clearfix"></div>
				<div class="hr">&nbsp;</div>
			</div>
		</div>
		<!-- // welcome -->

		<!-- boder-bottom -->
		<div class="row">
			<div class="">
				<div class="padding-top-lg padding-bottom-lg">
					<div class="line-row">
			          <div class="hr">&nbsp;</div>
			        </div>
				</div>
			</div><!-- //boder-bottom -->
		</div>
		
		<div class="wow fadeInUp">
			<div class="padding-bottom-sm">
				<div class="title-event">RECENT EVENTS</div>
				<div class="line-row-short wow fadeInLeft">
		        	<div class="hr">&nbsp;</div>
		        </div>
			</div>
		</div>
		<!-- recently Event -->
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp">
				<!-- event_news -->
					<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
						<div class="btm-right">
							<img src="{{url('images/home.jpg')}}" alt=" ">
								<div class="captn">
									<h4>Law and Regulation</h4>	
								</div>
						</div>
					</div>	
				<!-- //event_news -->	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp">
				<!-- event_news -->
					<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
						<div class="btm-right">
							<img src="{{url('images/events/e1.jpg')}}" alt=" ">
								<div class="captn">
									<h4>Monthly Economic</h4>	
								</div>
						</div>
					</div>	
				<!-- //event_news -->	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp">
				<!-- event_news -->
					<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
						<div class="btm-right">
							<img src="{{url('images/events/e2.jpg')}}" alt=" ">
								<div class="captn">
									<h4>TBCC Minutes</h4>	
								</div>
						</div>
					</div>	
				<!-- //event_news -->	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp">
				<!-- event_news -->
					<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
						<div class="btm-right">
							<img src="{{url('images/events/e3.jpg')}}" alt=" ">
								<div class="captn">
									<h4>TBCC Agenda</h4>	
								</div>
						</div>
					</div>	
				<!-- //event_news -->	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp">
				<!-- event_news -->
					<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
						<div class="btm-right">
							<img src="{{url('images/events/e1.jpg')}}" alt=" ">
								<div class="captn">
									<h4>Law and Regulation</h4>	
								</div>
						</div>
					</div>	
				<!-- //event_news -->	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp">
				<!-- event_news -->
					<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
						<div class="btm-right">
							<img src="{{url('images/events/e1.jpg')}}" alt=" ">
								<div class="captn">
									<h4>Meeting Schedules</h4>	
								</div>
						</div>
					</div>	
				<!-- //event_news -->	
			</div>
		</div>
		<!-- //recently Event -->

		<!-- upcoming event -->
		<div class="row padding-top-lg">
			<div class="col-lg-8">
				<div class="padding-bottom-sm wow fadeInUp animated">
					<div class="title-event">UPCOMING EVENTS</div>
					<div class="line-row-short wow fadeInLeft animated">
			        	<div class="hr">&nbsp;</div>
			        </div>		
				</div>
				
		        <div class="row padding-bottom wow fadeInUp animated">
					<div class="col-md-6 col-sm-6">
						<img style="width: 100%;" src="{{url('images/events/e1.jpg')}}" alt=" ">
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="padding-bottom-lg padding-top-sm">
							<div class="btm-right">
								<h4 class="color-red">Law and Regulation</h4>
								<p class="date color-gray"><span style="font-size:16px;padding-right:10px;"><i class="fa fa-clock-o"></i></span>10-Jun-2016</p>
								<p class="color-gray">Find upcoming events and thing to do in Bangkok, events by category activities are in Bankok Today.</p>
							</div>
							<div class="padding-top-sm">
								<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>	
					</div>
		        </div>
		        <div class="row padding-bottom wow fadeInUp animated">
					<div class="col-md-6 col-sm-6">
						<img style="width: 100%;" src="{{url('images/events/e2.jpg')}}" alt=" ">
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="padding-bottom-lg padding-top-sm">
							<div class="btm-right">
								<h4 class="color-red">Meeting Schedules</h4>
								<p class="date color-gray"><span style="font-size:16px;padding-right:10px;"><i class="fa fa-clock-o"></i></span>10-Jun-2016</p>
								<p class="color-gray">Find upcoming events and thing to do in Bangkok, events by category activities are in Bankok Today.</p>
							</div>
							<div class="padding-top-sm">
								<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
							</div>
						</div>
						
						<div class="clearfix"></div>	
					</div>
				</div>

				<div class="row padding-bottom wow fadeInUp animated">
					<div class="col-md-6 col-sm-6">
						<img style="width: 100%;" src="{{url('images/events/e3.jpg')}}" alt=" ">
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="padding-bottom-lg padding-top-sm">
							<div class="btm-right">
								<h4 class="color-red">Economic</h4>
								<p class="date color-gray"><span style="font-size:16px;padding-right:10px;"><i class="fa fa-clock-o"></i></span>10-Jun-2016</p>
								<p class="color-gray">Find upcoming events and thing to do in Bangkok, events by category activities are in Bankok Today.</p>
							</div>
							<div class="padding-top-sm">
								<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
							</div>
						</div>
						
						<div class="clearfix"></div>	
					</div>
				</div>
				
			</div>
			<div class="col-lg-4">
				<div class="padding-bottom-sm wow fadeInUp animated">
					<div class="title-event">USEFUL LINK</div>
					<div class="line-row-short-right wow fadeInLeft animated">
			        	<div class="hr">&nbsp;</div>
			        </div>
				</div>

				<div class="col-md-12 list wow fadeInUp animated">
					<ul>
						<li><a href="#"><i class="fa fa-angle-right"></i>Law and Regulation</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i>Guid Book</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i>Monthly Economic Report</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i>TBCC Minutes</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i>Meeting Schedule	</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i>TBCC Agenda</a></li>
					</ul>	
				</div>
			</div>
		</div>



	<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
	</div>	
	<!-- //index-home -->	
</div>
@endsection
