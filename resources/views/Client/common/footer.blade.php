<div id="pageup"></div>

<div class="footer">
	
	<div class="container wow fadeInUp">
		<!-- <div class="row"> -->
			<div class="col-md-4 col-sm-4">
				<div class="padding-top-sm">
					<div class="title-footer">INFORMATION</div>
					<div style="font-size:20px;color: #fff;"> Address</div>
					<div style="padding-top: 5px;padding-left: 5px;">
						<address style="font-size: 15px;color: #fff;"><i class="fa fa-map-marker"></i> {!!CONTACT_ADDRESS!!}</address>
					</div>
					<div style="font-size:20px;color: #fff;">Contact</div>
					<div style="padding-top: 5px;padding-left: 5px;">
						<address style="font-size: 14px;color: #fff;"><i class="fa fa-phone"></i> {!!CONTACT_NUMBER!!}</address>
					</div>

					<div style="font-size:20px;color: #fff;"> E-mail</div>
					<div style="padding-top: 5px;padding-left: 5px;">
						<address style="font-size: 14px;color: #fff;"><i class="fa fa-envelope"></i> {!!CONTACT_EMAIL!!}</address>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="padding-top-sm">
					<div class="title-footer">{!!$getInformatoin[1]['name']!!}</div>
					<div>
						<p style="font-size: 16px;">{!!$getInformatoin[1]['description']!!}</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">	
				<div class="padding-top-sm">
					<div class="title-footer">SOCIAL MDEIA</div>
					<center>
						<span class="social">
							<a target="_blank" href="{!!FACEBOOK!!}">
								<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a target="_blank" href="{!!FACEBOOK!!}">
								<span class="fa-stack fa-lg" >
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a target="_blank" href="{!!FACEBOOK!!}">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a target="_blank" href="{!!FACEBOOK!!}">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</span>
					</center>
				</div>
			</div>
		<!-- </div> -->
	</div>

	<div class="container wow fadeInUp">
		<div class="row">
			<div class="col-md-12">
				<div class="border-top">
					<div class="padding-top-sm">
						<center>
							<p style="font-size:12px">{!!FOOTER_TEXT!!} | Powered by <a target="_blank" href="http://www.khmergecko.com" style="color:#bc9844">KHMER GECKO</a></p>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="{{url('lib/AdminLTE/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>


<!-- #####Scrolup -->
<link rel="stylesheet" href="{{url('skroll/jquery.pageup.css')}}">
<script type="text/javascript" src="{{url('skroll/jquery.pageup.js')}}"></script>
<script type="text/javascript">
  $("#pageup").pageup();
</script>


<!-- Fade Content -->
<link rel="stylesheet" href="{{url('fade-content/css/animate.css')}}" />
<!-- <script src="fade-content/js/sscr.min.js"></script> -->
<script src="{{url('fade-content/js/prism.js')}}"></script>
<script src="{{url('fade-content/js/wow.min.js')}}"></script>
<script src="{{url('fade-content/js/viewport-units-buggyfill.js')}}"></script>
<script src="{{url('fade-content/js/midnight.jquery.min.js')}}"></script>
<script>
  $(document).ready(function(){
    // vh fix for iOS7 (Not that it works well on that anyway)
    viewportUnitsBuggyfill.init();

    $(window).resize(function(){
      viewportUnitsBuggyfill.refresh();
    });

    // Start Midnight!
    $('nav.fixed').midnight();

    // Start wow.js
    new WOW().init();

    // The island disappears when the logo moves on top of it
    var $island = $('#space-island');
    var islandTop = $island.offset().top;
    var windowHeight = $(window).height();

    $(window).resize(function(){
      islandTop = $island.offset().top;
      windowHeight = $(window).height();
    });

    $(document).scroll(function(){
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var minScrollTop = islandTop - windowHeight * 0.4;
      var maxScrollTop = islandTop;

      // Opacity goes from 1.0 at the bottom 2/3 of the screen to 0.4 at the top
      if( scrollTop <= islandTop*2 ) {
        var targetOpacity = 1.0;
        var minOpacity = 0.4;

        if( scrollTop > minScrollTop && scrollTop < maxScrollTop ) {
          targetOpacity = ((maxScrollTop - scrollTop) / (maxScrollTop - minScrollTop)) * (1.0 - minOpacity) + minOpacity;
        }
        else if( scrollTop > maxScrollTop ) {
          targetOpacity = minOpacity;
        }
        else if( scrollTop < minScrollTop ) {
          targetOpacity = 1.0;
        }

        $island.css('opacity', targetOpacity);
      }

    });

    $('.scroll-prompt').click(function(event){
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("section.step-one").offset().top - $('nav').height() * 0.5
      }, 1000, 'swing');
    });

    $(window).trigger('resize');

  });
</script>