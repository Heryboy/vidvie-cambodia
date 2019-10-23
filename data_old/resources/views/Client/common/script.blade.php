<!-- js -->
<!-- <script src="assets/front_end/js/jquery-1.11.1.min.js"></script>  -->
<script type="text/javascript" src="{{url('js/jquery-1.9.1.min.js')}}"></script>
<!-- //js -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--//smooth-scrolling-of-move-up-->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/front_end/js/bootstrap.js"></script>
<!-- start-smooth-scrolling-->
<!-- <script type="text/javascript" src="{{url('assets/front_end/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('assets/front_end/js/easing.js')}}"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script> -->
<!--//end-smooth-scrolling-->	

<!-- Fade Content -->
<link rel="stylesheet" href="{{url('assets/front_end/fade-content/css/animate.css')}}" />
<script src="{{url('assets/front_end/js/fade-content/js/prism.js')}}"></script>
<script src="{{url('assets/front_end/js/fade-content/js/wow.min.js')}}"></script>
<script src="{{url('assets/front_end/js/fade-content/js/viewport-units-buggyfill.js')}}"></script>
<script src="{{url('assets/front_end/js/fade-content/js/midnight.jquery.min.js')}}"></script>
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
<!-- end fade-content -->