@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">
			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page" style="text-transform: uppercase;">{{$useful_cat_name}}</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			<!-- menmber -->
			<div class="row">
				@foreach($useful_info_desc as $useful_info)
					<?php 
						if($useful_info->image!=''){
							$col='col-md-8 col-sm-8';
						}else{
							$col='col-md-12 col-sm-12';
						}
					?>
					<!-- block data -->
		        	<div class="padding-bottom-sm padding-top-sm wow fadeInLeft">
		        		@if($useful_info->image!='')
							<div class="col-md-4 col-sm-4">
								<img src="{{url('images/upload/useful_information')}}/{{$useful_info->image}}" alt="No Image" width="100%">
							</div>
							@endif
							<div class="{{$col}}">
								<h3 class="title-article-alt"><b>{{$useful_info->name}}</b></h3>
								<small><i class="fa fa-wa fa-clock-o"></i> <i>Published</i> : 
									<?php 
										$strtime = strtotime($useful_info->created_at);
										echo date(FORMAT_DATE,$strtime);
									?>
								</small>
								<article class="paragraph padding-top-xs"> 
									{!!$useful_info->description!!}
								</article>
								<div class="padding-top-sm">
									
									@if($useful_info->url!='')
										<a class="hvr-outline-out scroll" target="_blank" href="{!!$useful_info->url!!}">DOWNLOAD</a>
									@else
										@if($useful_info->attach_file!=null)
											<a class="hvr-outline-out scroll" href="{{url('images/upload/useful_information/attach_file')}}/{!!$useful_info->attach_file!!}">DOWNLOAD</a>
										@else
											<a class="hvr-outline-out scroll" href="#">DOWNLOAD</a>
										@endif
									@endif
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
			<div class="row">
				<div class="col-lg-12">
					<div class="padding-top-sm padding-bottom-sm">
				    	<a class="hvr-outline-out scroll" href="#about">VIEW ALL</a>		
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
