@extends('Client.common.layout') 
@section('content')

	<div class="container padding-bottom-lg">
		<!-- col-sm-8 -->
		<div class="col-sm-9 wow fadeInLeft">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					@if($members->image!='')
						<img src="{{url('images/upload/members')}}/{{$members->image}}" alt="No Image" width="100%">
					@else
						<img src="{{url('images/no-image.png')}}" alt="No Image" width="100%">
					@endif
				</div>
				<div class="col-md-9 col-sm-9">
					<div style="padding-bottom:15px;"><b>{{$members->name}}</b></div>
					<div><i class="fa fa-wa fa-pencil"></i>&nbsp; <small>Base Country : {{$members->base_country}}</small></div>
					<div><i class="fa fa-wa fa-phone"></i>&nbsp; <small>Tel : {{$members->base_country}}</i></small></div>
					<div><i class="fa fa-wa fa-envelope"></i>&nbsp; <small>Email : {{$members->base_country}}</small></div>
					<div><i class="fa fa-wa fa-globe"></i>&nbsp; <small>Website : {{$members->base_country}}</small></div>
					<div><i class="fa fa-wa fa-globe"></i>&nbsp; <small>Address : {{$members->address}}</small></div>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="row padding-top-lg">
				<!-- description -->
				<div class="container">
					{{$members->description}}
				</div>
			</div>

		</div>
		<!-- col-sm-4 -->
		<div class="col-sm-3 wow fadeInLeft">
			@include('Client.members.member_category')
		</div>
		<!-- //index-home -->
		<div class="clearfix"></div>

		<style type="text/css">
			.member_directory > ul.member_li{padding:0 10px;margin: 0px;list-style: none;}
			.member_directory > ul.member_li li a{color:#777;}
			.member_directory > ul.member_li li a:hover{text-decoration: underline;}
		</style>

		<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
		</div>
	</div>

@endsection
