@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">

			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">MEETING SCHEDULE</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			<!-- menmber -->
			<div class="row wow fadeInLeft">
				<div class="pull-right">
					<div class="col-sm-12">
						<a target="_blank" href="{{url('images/upload/events/TBCC-Events-Schedule-2016.pdf')}}" class="btn btn-success"><i class="fa fa-wa fa-download"></i> DOWNLOAD</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- <center>Member Benefit</center> -->
				<div align="center" style="position:relative;z-index:1;"><a href="{{url('images/upload/events/TBCC-Events-Schedule-2016.pdf')}}" class="embed"></a></div>
			</div>

		</div>
		<!-- //index-home -->	

		<div class="row">
			<!-- carousel -->
			@include('Client.common.carousel')
			<!-- //carousel -->
		</div>
	</div>

	<!-- <script type="text/javascript" src="{{url('assets/front_end/pdf_view/jquery.min.js')}}"></script>  -->
	<script type="text/javascript" src="{{url('assets/front_end/pdf_view/jquery.gdocsviewer.min.js')}}"></script> 
	<style type="text/css">

	/* Style all gdocsviewer containers */
	.gdocsviewer {
		margin:10px;
	}
	</style>
	<script type="text/javascript"> 
	/*<![CDATA[*/
	$(document).ready(function() {
		$('a.embed').gdocsViewer({width:1000, height: 850});
		$('#embedURL').gdocsViewer();
	});
	/*]]>*/
	</script> 

@endsection
