@extends('Client.common.layout') 

@section('content')
<div class="container padding-bottom-lg">
<!-- index-home -->
<div class="index-home">
	<div class="row">
		<center>
			<?php
				$event_cat_name = $event_cate_name;
				$new_cat_name = str_replace(' ', '-', strtolower($event_cat_name));
			?>
			<div class="title-page wow fadeInLeft" style="text-transform: uppercase;">{{$event_cate_name}}</div>
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
				{!!$event_cate_desc!!}
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
					<img style="min-height: 221px;max-height: 221px" class="img-responsive" src="{{url("images/upload/events")}}/{{$data['image']}}" alt=" ">
					<div class="captn">
						<h4><a href="{{url('event')}}/{{$new_cat_name}}/{{$data['id']}}/{{$new_name}}" style="color:#fff;">{{$event_name}}</a></h4>	
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
@endsection
