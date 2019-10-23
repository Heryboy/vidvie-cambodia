@extends('Client.common.layout') 
@section('content')

	<div class="container padding-bottom-lg">
		<!-- col-sm-8 -->
		<div class="col-sm-9 wow fadeInLeft">
			<h4 class="padding-bottom-lg"><b>OUR CURRENT MEMBERS</b></h4>
			<!-- <center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">OUR CURRENT MEMBERS</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center> -->

			<form action="" method="pubt">
				<div class="padding-bottom-lg">
          
		          <fieldset>
		          	<legend>Search Members</legend>

				          <div class="col-lg-6">
				            <div class="input-group">
				              <span class="input-group-addon">
				                <i class="fa fa-wa fa-user"></i>
				              </span>
				              <select class="form-control" name="member_type_id">
				              	<option value="">----Select Member Types----</option>
				              	@foreach($MemberType as $MemberTypes)
				              		<?php echo $MemberTypes->id;?>
				              		<option @if(isset($_REQUEST['member_type_id'])) @if($_REQUEST['member_type_id']==$MemberTypes->id) {{'selected="selected"'}} @endif @endif value="{{$MemberTypes->id}}">{{$MemberTypes->name}}</option>
				              	@endforeach
				              </select>
				              <!-- !! Form::select('member_type_id',[null => '--Select Member Types--'] +$MemberType,null,['class'=>'form-control']) !!} -->
				            </div><!-- /input-group -->
				          </div><!-- /.col-lg-6 -->
				          <div class="col-lg-6">
				            <div class="input-group">
				              <span class="input-group-addon">
				                <i class="fa fa-wa fa-briefcase"></i>
				              </span>
				              	<select class="form-control" name="business_type_id">
				              		<option value="">----Select Business Types----</option>
					              	@foreach($BusinessType as $BusinessTypes)
					              		<?php echo $BusinessTypes->id;?>
					              		<option @if(isset($_REQUEST['business_type_id'])) @if($_REQUEST['business_type_id']==$BusinessTypes->id) {{'selected="selected"'}} @endif @endif value="{{$BusinessTypes->id}}">{{$BusinessTypes->name}}</option>
					              	@endforeach
					            </select>
				              <!-- !! Form::select('business_type_id',[null => '--Select Business Types--'] +$BusinessType,null,['class'=>'form-control']) !!} -->
				            </div><!-- /input-group -->
				          </div><!-- /.col-lg-6 -->

				          <div class="col-lg-6 padding-top-sm">
				            <div class="input-group">
				              <span class="input-group-addon">
				                <i class="fa fa-wa fa-flag"></i>
				              </span>
				              <select class="form-control" name="base_country_id">
			              		<option value="">----Select Base Country----</option>
				              	@foreach($BaseCountry as $BaseCountrys)
				              		<?php echo $BaseCountrys->id;?>
				              		<option @if(isset($_REQUEST['base_country_id'])) @if($_REQUEST['base_country_id']==$BaseCountrys->id) {{'selected="selected"'}} @endif @endif value="{{$BaseCountrys->id}}">{{$BaseCountrys->name}}</option>
				              	@endforeach
				            </select>
				              <!-- <input type="text" placeholder="Base Country" name="base_country" class="form-control"> -->
				              <!-- !! Form::select('base_country_id',[null => '--Select Base Country--'] +$BaseCountry,null,['class'=>'form-control']) !!} -->
				            </div><!-- /input-group -->
				          </div><!-- /.col-lg-6 -->

				          <div class="col-lg-4 padding-top-sm">
				            <div class="input-group">
				              <span class="input-group-addon">
				                <i class="fa fa-wa fa-search"></i>
				              </span>
				              <input type="text" value="@if(isset($_REQUEST['company_name'])) {{trim($_REQUEST['company_name'])}} @endif" name="company_name" placeholder="Company Name" class="form-control">
				            </div><!-- /input-group -->
				          </div><!-- /.col-lg-6 -->

				          <div class="col-lg-2 padding-top-sm">
				            <button style="width:100%;" type="submit" class="btn btn-primary">SEARCH</button>
				          </div>


		          </fieldset>

		          <div class="clearfix"></div>
		        </div>
			</form>

			<div class="row">
        <div class="box">
          <div class="box-body no-padding">
            <table class="table">
              <tbody><tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Type of Members</th>
                <th>Type of Business</th>
                <th>Base Country</th>
              </tr>
              @foreach($members as $member)
              	<?php
    				$member_name = preg_replace('/\s+/', '-', strtolower($member->name));
              	?>	
                <tr>
                  <td>
                  	@if($member->image!='')
                  		<img width="30px" src="{{url('images/upload/members/23-Aug-2016')}}/{{$member->image}}">
                  	@else
                  		<img width="30px" src="{{url('images/no-image.png')}}">
                  	@endif
                  </td>
                  <td><a href="{{url('members/current_members')}}/{{$member->id}}/{{$member_name}}">
                  	@if($member->name=='Personal Business')
                  		{{$member->company_representative}}
                  	@else
                  		{{$member->name}}
                  	@endif
                  </a></td>
                  <td>{{$member->member_name}}</td>
                  <td>{{$member->business_name}}</td>
                  <td><span class="btn btn-xs btn-success">{{$member->base_country}}</span></td>
                </tr>
              @endforeach
              <!-- <tr>
                <td><img width="30px" src="{{url('images/upload/members/23-Aug-2016/CAMFEBA_Logo.png')}}"></td>
                <td>All Public Relation Co.,Ltd</td>
                <td>Advertising / Communication / Media</td>
                <td>Franch</td>
                <td><span class="badge bg-red">Phnom Penh</span></td>
              </tr>

              <tr>
                <td><img width="30px" src="{{url('images/upload/members/23-Aug-2016/CAMFEBA_Logo.png')}}"></td>
                <td>All Public Relation Co.,Ltd</td>
                <td>Advertising / Communication / Media</td>
                <td>Franch</td>
                <td><span class="badge bg-red">Phnom Penh</span></td>
              </tr> -->
            </tbody></table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>

			<div style="display: none;">

				@foreach($members as $member)
				<?php $col='';?>
				<?php 
					if($member->image!=''){
						$col = 'col-md-9 col-sm-9';
					}else{	
						$col = 'col-md-9 col-sm-9';
					}
				?>
				<!-- menmber -->
				<div class="row wow fadeInLeft">
					<div class="padding-bottom-lg">
						<div class="col-md-3 col-sm-3 padding-bottom-sm">
						@if($member->image!='')
							<img src="{{url('images/upload/members')}}/{{$member->image}}" alt="{{$member->name}}" title="{{$member->name}}" width="100%">
						@else
							<img src="{{url('images/no-image.png')}}" alt="No Image" title="No Image" width="60%">
						@endif
						</div>
						<div class="{{$col}}">
							<h3 class="title-article-alt"><b>{{$member->name}}</b></h3>

							<!-- <div class="color-general"><small><i class="fa fa-wa fa-user"></i> &nbsp; Position</small>: { $member->Position->name}}</div> -->

							<div class="color-general"><small><i class="fa fa-wa fa-flag"></i> &nbsp;Base Country</small>: {{$member->base_country}}</div>

							<div class="color-general"><small><i class="fa fa-wa fa-envelope"></i> &nbsp;Email</small>: {{$member->email}}</div>

							<div class="color-general"><small><i class="fa fa-wa fa-location-arrow"></i> &nbsp;Address</small>: {{$member->address}}</div>


							<article class="paragraph padding-top-xs"> 
								{{$member->remark}}
							</article>

							<!-- <div class="padding-top-xs">
								<div class="padding-top-sm">
									<a class="hvr-outline-out scroll" href="#about">READ MORE</a>
								</div>
							</div> -->
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12">
							<div class="row">
								<div class="padding-top-sm">
									<div class="line-row-gold wow fadeInLeft">
							          <div class="hr">&nbsp;</div>
							        </div>
								</div>
							</div>
						</div>
			        </div>
				</div>
				@endforeach
			</div>
			
			<!-- <div class="row wow fadeInLeft">
				<div class="col-lg-12">
					<div class="padding-top-sm padding-bottom-sm">
				    	<a class="btn btn-sm btn-primary" href="#">VIEW ALL</a>
				    </div>
				</div>
			</div> -->
			<!-- // menmber -->
		</div>
		<!-- col-sm-4 -->
		<div class="col-sm-3 wow fadeInLeft">
			@include('Client.members.member_category')
		</div>
		<!-- //index-home -->
		<div class="clearfix"></div>

		<style type="text/css">
			.member_directory > ul.member_li{padding:0 10px;margin: 0px;list-style: none;}
			.member_directory > ul.member_li li a{color:#777;}
			.member_directory > ul.member_li li a:hover{text-decoration: underline;}
		</style>

		<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
		</div>
	</div>

@endsection
