@extends('Client.common.layout') 

@section('content')
<!-- slide -->
@include('Client.common.slideshow')

<div class="container padding-top-sm padding-bottom-lg">
	<!-- index-home -->
	<!-- <div class="index-home"> -->
	<!-- welcome -->
	<div class="row wow fadeInUp">
		<div class="padding-bottom-sm">

			<div class="col-lg-7 col-sm-7">
				<?php 
					$getInformatoin=Helpers::getInformatoin();
				?>
				<div class="title-event padding-bottom-sm">
					{!!$getInformatoin[3]['name']!!}
				</div>

				<div class="color-general title-article"> 
					{!!$getInformatoin[3]['description']!!}
				</div>
				<div>
					<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
				</div>
			</div>
			
			<div class="col-lg-5 col-sm-5">
				<div class="image"><img src="{{url('images/welcome.jpg')}}" width="100%"></div>
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
	
	<div class="wow fadeInLeft">
		<div class="padding-bottom-sm">
			<div class="title-event">RECENT EVENTS</div>
			<div class="line-row-short">
	        	<div class="hr">&nbsp;</div>
	        </div>
		</div>
	</div>
	<!-- recently Event -->
	<div class="row">
		@foreach($RecentEvents as $RecentEvent)
		<?php
			$RecentEvent_name = $RecentEvent->name;
			$new_name = str_replace(' ', '-', strtolower($RecentEvent_name));
		?>
		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
			<!-- event_news -->
				<div class="ser_bottom-grid padding-top-sm padding-bottom-sm">
					<div class="btm-right">
						<img src="{{url('images/upload/events')}}/{{$RecentEvent->image}}" alt="No Image">
						<div class="captn">
							<h4><a href="{{url('event')}}/recent-event/{{$RecentEvent->id}}/{{$new_name}}" style="color:#fff;">
								<?php 
									$strtext = $RecentEvent->name;
									if(strlen($strtext)>10){
										echo $str = substr($strtext,0,20).'...';
									}
								?>
								<!-- !!$RecentEvent->name!!} -->
							</a></h4>	
						</div>
					</div>
				</div>	
			<!-- //event_news -->	
		</div>
		@endforeach
	</div>
	<!-- //recently Event -->
	<!-- upcoming event -->
	<div class="row padding-top-lg">
		<div class="col-lg-8">
			<div class="padding-bottom-sm wow fadeInLeft">
				<div class="title-event">UPCOMING EVENTS</div>
				<div class="line-row-short">
		        	<div class="hr">&nbsp;</div>
		        </div>		
			</div>
			
				@foreach($UpcomingEvents as $UpcomingEvent)
					<?php
						$UpcomingEvent_name = $UpcomingEvent->name;
						$new_upcming_name = str_replace(' ', '-', strtolower($UpcomingEvent_name));
					?>
					<div class="padding-bottom wow fadeInLeft">

						<div class="row col-md-6 col-sm-6">
							<img class="img-responsive" src="{{url('images/upload/events')}}/{{$UpcomingEvent->image}}" alt="No Image">
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="padding-bottom-md">
								<div class="btm-right">
									<h3 class="title-article-alt"><b>{{$UpcomingEvent->name}}</b></h3>
									<small><i class="fa fa-wa fa-clock-o"></i> Event Date: {{Helpers::FormatDate($UpcomingEvent->event_start)}}</small>
									<p class="paragraph color-general padding-top-xs">{{$UpcomingEvent->description}}</p>
								</div>
								<div class="padding-top-sm">
									<a class="hvr-outline-out scroll" href="{{url('event')}}/upcoming-event/{{$UpcomingEvent->id}}/{{$new_upcming_name}}">READ MORE</a>
								</div>
							</div>
							<div class="clearfix"></div>	
						</div>
			    </div>
				@endforeach

	        

	      <!-- <div class="row padding-bottom wow fadeInLeft">
				<div class="col-md-6 col-sm-6">
					<img style="width: 100%;" src="{{url('images/events/e2.jpg')}}" alt=" ">
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="padding-bottom-md">
						<div class="btm-right">
							<h3 class="title-article-alt"><b>TBCC Monthly Party August 2016 ( Co - Host with Betagro Cambodia)</b></h3>
							<small><i class="fa fa-wa fa-clock-o"></i> 10-Jun-2016</small>
							<p class="paragraph color-general padding-top-xs">Find upcoming events and thing to do in Bangkok, events by category activities are in Bankok Today.</p>
						</div>
						<div class="padding-top-sm">
							<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
			</div> -->
			
		</div>
		<div class="col-lg-4">
			<div class="padding-bottom-sm wow fadeInLeft">
				<div class="title-event">USEFUL LINK</div>
				<div class="line-row-short-right">
		        	<div class="hr">&nbsp;</div>
		        </div>
			</div>

			<div class="col-md-12 list wow fadeInLeft">
				<ul>
					@foreach($UsefulLinks as $UsefulLink)
					<?php 
						$strlinkname = $UsefulLink->name;
						if(strlen($strlinkname)>10){
							$str = substr($strlinkname,0,30).'...';
						}
					?>
					<li><i class="fa fa-angle-right"></i> <a target="_blank" href="{!!$UsefulLink->url!!}" alt="" title="{!!$UsefulLink->name!!}">{!!$strlinkname!!}</a></li>
					@endforeach
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
