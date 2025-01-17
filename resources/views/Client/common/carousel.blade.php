	
	<div class="padding-bottom-sm padding-top-lg wow fadeInUp animated" style="margin-top:30px;">
		<div class="col-lg-12">
			<div class="title-event">OUR PARTNERS</div>
			<div class="line-row-short wow fadeInLeft animated">
	        	<div class="hr">&nbsp;</div>
	        </div>
		</div>
        <div class="clearfix"></div>
	</div>
    <div class="site-footer wow fadeInUp animated">
        <div class="our-partner">
            <!-- <div class="container"> -->
                <!-- <div class="row"> -->
                    <div class="col-md-12">
                        <div class="customNavigation">
                            <a class="btn prev"><img src="{{url('assets/front_end/images/prev.png')}}"></a>
                            <a class="btn next"><img src="{{url('assets/front_end/images/next.png')}}"></i></a>
                        </div>
                        <div id="owl-demo" class="owl-carousel">
                            <?php $partners = Helpers::getPartners();?>
                            @foreach($partners as $partner)
                            <div class="item"> 
                            	<a target="_blank" href="{{$partner->url}}"><img src="{{url('images/upload/partner')}}/{{$partner->image}}" alt="{{$partner->name}}" title="{{$partner->name}}"></a>
                          	</div>
                            @endforeach
                        </div>
                        <!-- /#owl-demo -->
                    </div>
                    <!-- /.col-md-12 -->
                <!-- </div>  -->
                <!-- /.row -->
            <!-- </div>  -->
            <!-- /.container -->
        </div> <!-- /.our-partner -->
    </div> <!-- /.site-footer -->

    <script>window.jQuery || document.write('<script src="assets/front_end/carousel/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    
    <script src="{{url('assets/front_end/carousel/js/plugins.js')}}"></script>
    <script src="{{url('assets/front_end/carousel/js/main.js')}}"></script>