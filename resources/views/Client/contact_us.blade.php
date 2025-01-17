@extends('Client.common.layout') 

@section('content')

<!-- BREADCRUMB -->
<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<section class="section">
		<div class="container">
			<div class="col-md-12">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15635.644282789375!2d104.9002647!3d11.5582327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109510e5eec984f%3A0x967d111675e23dcc!2sVidvie%20Cambodia!5e0!3m2!1sen!2skh!4v1571820188891!5m2!1sen!2skh"
					width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
	</section>
	
	<section class="section">
		<div class="container">
			<div class="col-md-12">
				<div class="contact-us about-us text-center">
					<h2 class="white-color">Contact Us</h2>
					<h4 class="white-color font-weak">
						<p>
							<span class="address"><i class="fa fa-home"></i></span>Eo 189, #145, Maose Tong Blvd,
							Sangkat Teklark 3, Khan Toulkok, PhnomPenh Cambodia
						</p>
						<p>
							<span>
								Tell:
							</span>
							<span>
								<a href="tel:066990909">
									+855(0) 66 990 909
								</a>
							</span>
						</p>
						<p>
							<span>
								Email:
							</span>
							<span>
								<a href="mailto:vidvie.cam@gmail.com">
									vidvie.cam@gmail.com
								</a>
							</span>
						</p>
					</h4>
				</div>
			</div>
		</div>
	</section>

@endsection
