@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">
			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">OUR CURRENT MEMBERS</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			@foreach($members as $member)
			<?php $col='';?>
			<?php 
				if($member->image!=''){
					$col = 'col-md-9 col-sm-9';
				}else{	
					$col = 'col-md-9 col-sm-9';
				}
			?>
			<!-- menmber -->
			<div class="row wow fadeInLeft">
				<div class="padding-bottom-lg">
					<div class="col-md-3 col-sm-3 padding-bottom-sm">
					@if($member->image!='')
						<img src="{{url('images/upload/members')}}/{{$member->image}}" alt="{{$member->name}}" title="{{$member->name}}" width="100%">
					@else
						<img src="{{url('images/no_image.png')}}" alt="No Image" title="No Image" width="60%">
					@endif
					</div>
					<div class="{{$col}}">
						<h3 class="title-article-alt"><b>{{$member->name}}</b></h3>
						
						<i class="fa fa-wa fa-globe"></i> <a href="http://{{$member->website}}" target="_blank">{{$member->website}}</a>
						
						<div class="color-general"><i class="fa fa-location-arrow"></i>{{$member->address}}</div>

						<article class="paragraph padding-top-xs"> 
							{{$member->remark}}
						</article>

						<div class="padding-top-xs">
							<div class="padding-top-sm">
								<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
							</div>
						</div>
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
				<div class="col-lg-12">
					<div class="padding-top-sm padding-bottom-sm">
				    	<a class="btn btn-sm btn-primary" href="#">VIEW ALL</a>
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
