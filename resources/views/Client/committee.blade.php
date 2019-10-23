@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">
			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">WELCOME TO COMMITTEE</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			<!-- menmber -->
			<div class="row wow fadeInUp">
		       
		       <div class="col-sm-12"><p class="paragraph">TBCC Committee: Primary jurisdictions include alcohol, Cambodian Gaming. We provide multiple services all global bank. Now a day,we have cooperate with many bank in Cambodia. We have multiple service such as: Credit Card, National Bank Account...</p>
		       </div>
		       <div class="clearfix"></div>

		       <div class="block_committee padding-top-lg">
		       		<!-- committee box -->
			       	<div class="col-sm-3">
			       		<img class="img-responsive img-circle" src="{{url('images/	committee/c1.jpg')}}">

			       		<p class="padding-top-sm title-article">
			       			<center><h5><b>President</b></h5></center>
			       			<div class="padding-top-xs">
			       				<i>Mrs. Oranooch Pakarat / INTRA CO.</i>
			       			</div>
			       		</p>
			       	</div>
			       	<!-- committee box -->
			       	<div class="col-sm-3">	
			       		<img class="img-responsive img-circle" src="{{url('images/	committee/c1.jpg')}}">

			       		<p class="padding-top-sm title-article">
			       			<center><h5><b>Executive Member and Secretary General</b></h5></center>
			       			<div class="padding-top-xs">
			       				<i>Mr. Surachet Maneepong / AEC Business Support Center</i>
			       			</div>
			       		</p>
			       	</div>

			       	<!-- committee box -->
			       	<div class="col-sm-3">	
			       		<img class="img-responsive img-circle" src="{{url('images/	committee/c1.jpg')}}">

			       		<p class="padding-top-sm title-article">
			       			<center><h5><b>Management Department</b></h5></center>
			       			<div class="padding-top-xs">
			       				<i>Voice President: Ms. Yiamsri Uponpong</i>
			       			</div>
			       		</p>
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
