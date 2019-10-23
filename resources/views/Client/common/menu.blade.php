 <div class="header padding-top padding-bottom-lg wow fadeInUp"><!--header-->
	<div class="container">	
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span style="color:#fff !important;" class="sr-only" sty>Toggle navigation</span>
						<span style="color:#fff !important;" class="icon-bar"></span>
						<span style="color:#fff !important;" class="icon-bar"></span>
						<span style="color:#fff !important;" class="icon-bar"></span>
					</button>
					<h1 class="navbar-brand hidden-lg hidden-sm hidden-md"><a style="color:#1b317d;" href="{{url('')}}"><b>{!!COMPANY!!}</b></a></h1>
				</div>
				<!--navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php $getMenus = Helpers::getMenu();?>

						@foreach($getMenus as $getMenu)
							@if($getMenu['child_Menu']!=null)
								<li><a href="{!!$getMenu['url']!!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!!$getMenu['name']!!}<span class="caret"></span></a>
									<ul class="dropdown-menu">
								@foreach($getMenu['child_Menu'] as $child_Menu)
									@if($child_Menu['url']!=null)
										<li><a class="hvr-bounce-to-bottom" href="{!!$child_Menu['url']!!}">{!!$child_Menu['name']!!}</a></li>
									@else
										<li><a class="hvr-bounce-to-bottom" href="{{url('home/category')}}?id={!!$child_Menu['id']!!}">{!!$child_Menu['name']!!}</a></li>
									@endif
								@endforeach    
									</ul>
								</li>
							@else
								@if($getMenu['url']!=null)
									<li class="active"><a href="{!!$getMenu['url']!!}">{!!$getMenu['name']!!}</a></li>
								@else
									<li class="active"><a href="{{url('home/category')}}?id={!!$getMenu['id']!!}">{!!$getMenu['name']!!}</a></li>
								@endif
							@endif
						@endforeach
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</nav>
		</div>	
	</div>
</div>
