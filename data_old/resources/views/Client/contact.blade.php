@extends('Client.common.layout') 

@section('content')
<div class="container padding-bottom-lg">
<!-- index-home -->
<div class="index-home">
	<!-- index-home -->
	<div class="container">
		<!-- menmber -->
		<div class="row">
			<div class="col-lg-12">
				<center>
					<div class="padding-top-sm padding-bottom-sm">
						<div class="title-page">CONTACT US</div>
						<div class="line-row-event wow fadeInLeft animated">
				        	<div class="hr">&nbsp;</div>
				        </div>
				        <div class="clearfix"></div>
					</div>
				</center>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="padding-top padding-bottom text-center">
					<i class="fa fa-home" style="font-size:70px"></i>
					<span class="contact-address">
						<h2>{{trans('common.address')}}</h2>
					</span>
					<div class="clearfix"></div>
				</div>
				<p style="font-size: 14px;color: #333">
					<span style="font-size:16px;padding-right:10px;"><i class="fa fa-map-marker"></i></span> No 196, M.V Preah Norodom Bouleavard,Sangkat Tonle Bassac,Khan Chamkarmon,Phnom Penh, Kingdom of Cambodia.
				</p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5">
				<div class="padding-top padding-bottom text-center">
					<i class="fa fa-phone" style="font-size:70px"></i>
					<span class="contact-address"><h2>Phone</h2></span>
				</div>
				<div style="font-size: 14px;color:#333" class="text-center">
					<span><i class="fa fa-phone"></i></span> (+855)10 234 234</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<center>
					<div class="padding-top padding-bottom">
						<i class="fa fa-envelope" style="font-size:70px;"></i>
						<span class="contact-address"> <h2>E-mail</h2></span>
		
					</div>
					<span class="address">
						<p style="font-size: 14px;color:#333"><i class="fa fa-envelope"></i></span> admin@tbcccambodia.com</p>
					</span>
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="padding-top-sm padding-bottom-sm">
					<span class="contact-address"><h2>GET INTOUCH</h2></span>
					<span class="address">
						<p>
							And get the lastest information about our company news and offer
						</p>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<form action="./contact.php" class="form-horizontal" role="form" id="contactForm" method="post" name="contactForm">
				<div class="col-lg-4">
			        <div class="form-group">
		            <div class="col-sm-12">
		            	<input class="form-control  input-md" name="name" id="name" type="text" placeholder="{{trans('common.name')}}">
		            </div>
			        </div>
				</div>
				
				<div class="col-lg-4">
			        <div class="form-group">
		            <div class="col-sm-12">
		            	<input class="form-control  input-md" name="subject" id="subject" type="text" placeholder="{{trans('common.email')}}">
		            </div>
			        </div>
				</div>
				<div class="col-lg-4">
			        <div class="form-group">
		            <div class="col-sm-12">
		            	<input class="form-control  input-md" name="subject" id="subject" type="text" placeholder="{{trans('common.subject')}}">
		            </div>
			        </div>
				</div>
				
				<div class="col-lg-12">
			        <div class="form-group">
		          	<div class="col-sm-12">
	                  <textarea class="form-control input-md" rows="10" name="message" id="message" placeholder="{{trans('common.message')}}" style="max-width: 100%;max-height: 100%;"></textarea>
		             </div>
			        </div>
				</div>

		        <div class="col-lg-6">
					<div class="padding-top-sm">
					<input class="btn btn-sm btn-primary" value="SUBMIT YOUR MESSAGE »" type="submit">
					</div>
				</div>
				
			</form>
		</div>
	</div>

	<!-- // menmber -->
	<div class="row">
		<!-- carousel -->
			@include('Client.common.carousel')
		<!-- //carousel -->
	</div>
</div>
<!-- //index-home -->	
</div>

<style type="text/css">
	/*.btn{width: 100%;}
	.contact-address{color: #d11a48;}
	.address{color: black;font-weight:500;}
	.form-control .contact{
 		display:block;
 		width:100%;
 		height:34px;
 		padding:6px 12px;
 		font-size:14px;
 		line-height:1.42857143;
 		color:#555;
 		border:1px solid #ccc;
 		border-radius:0;
 		-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
 		box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
 		-webkit-transition:border-color ease-in-out .15s,
 		-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s
 	}*/
</style>
@endsection
