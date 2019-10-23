<!-- Fade Content -->
<!-- <link rel="stylesheet" href="{{url('assets/front_end/fade-content/css/animate.css')}}" /> -->



	<!-- jQuery Plugins -->
	<script src="{{url('assets/front_end/vidvie-plugin/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/front_end/vidvie-plugin/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/front_end/vidvie-plugin/js/nouislider.min.js')}}"></script>
	<script src="{{url('assets/front_end/vidvie-plugin/js/slick.min.js')}}"></script>
	<script src="{{url('assets/front_end/vidvie-plugin/js/jquery.zoom.min.js')}}"></script>
	<script src="{{url('assets/front_end/vidvie-plugin/js/main.js')}}"></script>

	<script>
		jQuery(function ($) {
			$("#overlay").fadeIn(300);
			setTimeout(function () {
				$("#overlay").fadeOut(300);
			}, 1500);
		});
	</script>