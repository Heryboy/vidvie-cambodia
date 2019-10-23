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
				if($data['image']!=''){
					$col='col-md-8 col-sm-8';
				}else{
					$col='col-md-12 col-sm-12';
				}
			?>
			<!-- block data -->
        	<div class="padding-bottom-sm padding-top-sm wow fadeInLeft">
        		@if($data['image']!='')
					<div class="col-md-4 col-sm-4">
						<img src="{{url('images/upload/events')}}/{{$data['image']}}" alt="No Image" width="100%">
					</div>
					@endif
					<div class="{{$col}}">
						<h3 class="title-article-alt"><b>{{$data['name']}}</b></h3>
						<small><i class="fa fa-wa fa-clock-o"></i> <i>Published</i> : 
							<?php 
								$strtime = strtotime($data['created_at']);
								echo date(FORMAT_DATE,$strtime);
							?>
						</small>
						<br>
						<small><i class="fa fa-wa fa-file"></i> <i>23 Files</i></small>
						<br>
						<small><i class="fa fa-wa fa-download"></i> <a href="#">Download</a></small>

						<?php
							$event_name = $data['name'];
							$new_name = str_replace(' ', '-', strtolower($event_name));
						?>

						<div class="padding-top-sm">
							<a class="hvr-outline-out scroll" href="{{url('event')}}/report-detail/{{$new_cat_name}}/{{$data['id']}}/{{$new_name}}">VIEW MORE</a>
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
