@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">
			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">TBCC COMMITTEE</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			
			@foreach($committees as $committee)			
			<!-- committee -->
			<div class="row wow fadeInLeft">
				<div class="padding-bottom-lg">
					<div class="col-md-2 col-sm-2 padding-bottom-sm">
						<img src="{{url('images/upload/committee')}}/{{$committee->image}}" alt="No Image" title="No Image" width="100%">
					</div>
					<div class="col-md-10 col-sm-10">
						<h3 class="title-article-alt"><b>{{$committee->name}}</b></h3>
						<div class="color-general"><small><i class="fa fa-wa fa-user"></i> &nbsp; Position</small>: {{$committee->position}}</div>
						<div class="color-general"><small><i class="fa fa-wa fa-home"></i> &nbsp; Company</small>: {{$committee->company}}</div>
						<div class="color-general"><small><i class="fa fa-wa fa-phone"></i> &nbsp; Tel</small>: {{$committee->contact}}</div>
						<div class="color-general"><small><i class="fa fa-wa fa-envelope"></i> &nbsp; Email</small>: {{$committee->email}}</div>
						<!-- <article class="paragraph padding-top-xs"> 
							Desc
						</article> -->
						<!-- <div class="padding-top-xs">
							<div class="padding-top-sm">
								<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
							</div>
						</div> -->
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12">
						<div class="row">
							<div class="padding-top-sm">
								<div class="line-row-gold wow fadeInLeft">
						          <div class="hr">&nbsp;</div>
						        </div>
							</div>
						</div>
					</div>
		        </div>
			</div>
			@endforeach

			<div class="row wow fadeInLeft">
				<center><h3 class="padding-top-lg padding-bottom-lg title-page">TBCC Committees and Staffs 2016-2017</h3></center>
				<img src="{{url('images/oranizchart.jpg')}}" width="100%" title="Organization">
			</div>

		</div>
		<!-- //index-home -->	

		<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
		</div>
	</div>

@endsection
