<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>VIDVIE Cambodia</title>
<!-- Tell the browser to be responsive to screen width -->
<!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"name="viewport"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
@include('Client.common.style')
<script type="text/javascript" src="{{url('js/jquery-1.9.1.min.js')}}"></script>
</head>
<!-- Loading First Page -->
	<!-- <div id="overlay">
		<div class="cv-spinner">
			<span class="spinner"></span>
		</div>
	</div> -->
	<body>
		
		<!-- =========== logo ==============-->
		<!-- include('Client.common.logo') -->
		<!-- =========== end logo ===========-->
		<!-- bar -->
		@include('Client.common.menu')
		<!-- <div class="clearfix"></div> -->
		<!-- /end bar -->
		
		<div class="clearfix"></div>
		<!-- content -->
			@yield('content')	
		<!-- end content -->
		 <div class="clearfix"></div>
		<!-- footer -->
		@include('Client.common.footer')	
		<!-- end footer -->

		<!-- srcipt -->
		@include('Client.common.script')
		<!-- end script -->
		
	</body>
</html>
