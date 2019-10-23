@extends('Client.common.layout') 

@section('content')
<div class="container padding-bottom-lg">
<!-- index-home -->
<div class="index-home">
	<div class="row">
		<center>
			<?php
				$event_cat_name = $event_name;
				$new_cat_name = str_replace(' ', '-', strtolower($event_cat_name));
			?>
			<div class="title-page wow fadeInLeft" style="text-transform: uppercase;">{{$new_cat_name}}</div>
			<div class="line-row-event wow fadeInLeft animated">
	        	<div class="hr">&nbsp;</div>
	        </div>
	        <div class="clearfix"></div>
		</center>
	</div>
	<!-- menmber -->
	
	<div class="row">
		<div class="col-md-12">
			<div class="padding-top-lg padding-bottom-lg wow fadeInUp">
				{!!$event_desc!!}
			</div>
		</div>
	</div>

	<!-- menmber -->
	<div class="row">
		@foreach($data_arr as $data)
			<?php 
				$strtext = $data['name'];
				if(strlen($strtext)>10){
					$event_name = substr($strtext,0,20).'...';
					$new_name = str_replace(' ', '-', strtolower($data['name']));
				}
			?>
			<div class="col-md-4 col-sm-6 ser_bottom-grid padding-bottom-sm wow fadeInLeft">
				<div class="btm-right">
					<a title="{{$data['name']}}" class="swipebox" href="{{url("images/upload/events")}}/{{$data['ei_image']}}"><img style="min-height: 221px;max-height: 221px" class="img-responsive" src="{{url("images/upload/events")}}/{{$data['ei_image']}}" alt="{{$data['name']}}"></a>
					<div class="captn">
						<h4><a class="swipebox" href="{{url("images/upload/events")}}/{{$data['ei_image']}}" style="color:#fff;">{{$event_name}}</a></h4>	
					</div>
				</div>
			</div>
	     @endforeach
		</div>	
		<!-- <div class="row">
			<div class="col-lg-12">
				<div class="padding-top-sm padding-bottom-sm">
			    	<a class="hvr-outline-out scroll" href="#about">VIEW ALL</a>		
			    </div>
			</div>
		</div> -->
	<!-- // menmber -->	
		
	<!-- // menmber -->
	<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
	</div>
</div>
<!-- //index-home -->	
</div>

<link rel="stylesheet" href="{{url('popup/src/css/swipebox.css')}}">
<script src="{{url('popup/lib/ios-orientationchange-fix.js')}}"></script>
<script src="{{url('popup/lib/jquery-2.1.0.min.js')}}"></script>
<script src="{{url('popup/src/js/jquery.swipebox.js')}}"></script>
<script type="text/javascript">
  $( document ).ready(function() {

		/* Basic Gallery */
		$( '.swipebox' ).swipebox();
		
		/* Video */
		$( '.swipebox-video' ).swipebox();

		/* Dynamic Gallery */
		$( '#gallery' ).click( function( e ) {
			e.preventDefault();
			$.swipebox( [
				{ href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
				{ href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
			] );
		} );

  });
</script>


@endsection
