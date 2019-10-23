@extends('Admin.common.layout')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('Admin.common.message') 
      <!-- content-header -->
      <section class="content-header">
        <h1>
          {!!$view_title!!}
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> {!!trans('event_mgr/common.event_mgr')!!}</a></li>
          <li><a href="#">{!!trans('event_mgr/event.event_name')!!}</a></li>
          <li class="active">{{$action}}</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              @if($action=='Edit' || $action=='View')
                {!! Form::model($Events,['method' => 'PATCH','files'=> true,'class'=>'form-horizontal','route'=>['admin.event_mgr.event.update',$Events->id]]) !!}
              @else
                {!! Form::open(['url' => 'admin/event_mgr/event','files'=> true,'class'=>'form-horizontal']) !!}
              @endif

                <div class="with-border box-header">
                 <h3 class="box-title">{!!$view_title!!} <small>{{$action}}</small></h3>
                 <div class="pull-right">
                   <span>
                    @if($action=='Edit' || $action=='Create')
                     <button class="btn btn-success" type="submit">
                        <i class="fa fa-wa fa-save"></i> {!!trans('common.save')!!} 
                     </button> &nbsp;&nbsp; 
                     @endif
                     <a class="btn btn-default" href ="{{url('admin/event_mgr/event')}}">
                        <i class="fa fa-wa fa-reply"></i> {!!trans('common.back_to_listing')!!} 
                     </a> 
                   </span>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->

                @include('Admin.common.error_input')
                <div class="box-body">
                  <?php $current_date =date('d-M-Y');?>
                  
                  <div class="form-group">
                    <label  class="col-sm-4 control-label">{!!trans('event_mgr/event.event_start')!!} <span class="validate_label_red">*</span></label>
                    <div class="col-sm-4">
                      {!! Form::text('event_start',null,['class'=>'date-picker1 form-control','placeholder'=>'Event Start']) !!}
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">{!!trans('event_mgr/event.event_category')!!} <span class="validate_label_red">*</span></label>
                    <div class="col-sm-4">
                      {!! Form::select('event_category_id',[null => 'Select Category'] +$event_category,null,['class'=>'form-control']) !!}
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">{!!trans('event_mgr/event.event_end')!!} <span class="validate_label_red">*</span></label>
                    <div class="col-sm-4">
                      {!! Form::text('event_end',null,['class'=>'date-picker1 form-control','placeholder'=>'Event End']) !!}
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">{!!trans('event_mgr/event.image')!!} <span class="validate_label_red">*</span> (337px x 221px)</label>
                    <div class="col-sm-4">
                      <div style="position:relative;">
                        <!--e-logo-->
                        <div class="e-logo">
                          @if(isset($Events))
                            @if($Events->image!='')
                              <img src="{{url('images/upload/events')}}/{{$Events->image}}" id="p" />
                            @else
                              <img src="{{url('images/no-image.png')}}" id="p" />
                            @endif
                          @else
                            <img src="{{url('images/no-image.png')}}" id="p" />
                          @endif
                          <a class="file"><span>{!!trans('event_mgr/event.choose_image')!!}</span>
                          {!! Form::file('image',['id'=>'photo','accept'=>'image/x-png, image/gif, image/jpeg']) !!}
                          </a>
                        </div>
                        <!--#END e-logo-->
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">{!!trans('event_mgr/event.publish_date')!!} <span class="validate_label_red">*</span></label>
                    <div class="col-sm-4">
                      {!! Form::text('publish_date',$current_date,['class'=>'date-picker1 form-control','placeholder'=>'Publish Date']) !!}
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">{!!trans('event_mgr/event.is_active')!!}</label>
                    <div class="col-sm-4">
                      {!! Form::checkbox('is_active', null, true,['class'=>'form-control', 'style'=>'width:40px']) !!}
                    </div>
                  </div>

                  <!-- Tabs -->
                  <div id="tabs">
                    <ul>
                      <?php $languages = Helpers::getLanguage();?>

                      @foreach ($languages as $lang) 
                        <li><a href="#{{$lang->code}}" data-ajax="false"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> {{$lang->name}}</a></li>
                      @endforeach
                    </ul>
                    <?php 
                      $i=1;
                      $name='';
                      $description='';
                      $meta_keyword='';
                      $meta_description='';
                    ?>
                    @foreach ($languages as $lang) 
                      <?php
                        if(isset($data_arr)){
                          $name = $data_arr[$lang->id]['name'];
                          $description = $data_arr[$lang->id]['description'];
                          $meta_keyword = $data_arr[$lang->id]['meta_keyword'];
                          $meta_description = $data_arr[$lang->id]['meta_description'];
                        }
                      ?>
                    {!! Form::hidden('language_id[]',$lang->id) !!}
                    <div id="{{$lang->code}}">
                      <div class="form-group">
                        <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> {!!trans('event_mgr/event.event_name')!!}</label>
                        <div class="col-sm-8">
                          {!! Form::text('name_'.$lang->id,$name,['class'=>'form-control','placeholder'=>'Event Name']) !!}
                        </div>
                      </div>

                      <div class="form-group">
                        <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> {!!trans('event_mgr/event.description')!!} </label>
                        <div class="col-sm-8">
                          {!! Form::textarea('description_'.$lang->id,$description,['class'=>'form-control ckeditor','placeholder'=>'Description']) !!}
                        </div>
                      </div>


                      <div class="form-group">
                        <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> {!!trans('event_mgr/event.meta_keyword')!!} </label>
                        <div class="col-sm-8">
                          {!! Form::textarea('meta_keyword_'.$lang->id,$meta_keyword,['class'=>'form-control','placeholder'=>'Meta Keyword']) !!}
                        </div>
                      </div>


                      <div class="form-group">
                        <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> {!!trans('event_mgr/event.meta_description')!!} </label>
                        <div class="col-sm-8">
                          {!! Form::textarea('meta_description_'.$lang->id,$meta_description,['class'=>'form-control','placeholder'=>'Meta Description']) !!}
                        </div>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                    <?php $i++;?>
                    @endforeach
                  </div>
                </div><!-- /.box-body -->
                
              {!! Form::close() !!}
            </form>
            </div><!-- /.box -->
          
          </div>
        </div><!-- /.row -->
      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

@endsection
<!-- @include('Admin.common.fancybox') -->
