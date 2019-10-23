@extends('Admin.common.layout')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('Admin.common.message') 
    <section class="content-header">
      <h1>
        {!!$view_title!!}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> {!!trans('useful_information/useful_listing.useful_info_listing')!!}</a></li>
        <li><a href="#">{!!trans('useful_information/useful_listing.useful_info_listing')!!}</a></li>
        <li class="active">{!!trans('common.listing')!!}</li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              @if($action=='Edit' || $action=='View')
                {!! Form::model($UsefulInfoListings,['method' => 'PATCH','files'=> true,'class'=>'form-horizontal','route'=>['admin.useful_information.useful_listing.update',$UsefulInfoListings->id]]) !!}
              @else
                {!! Form::open(['url' => 'admin/useful_information/useful_listing','files'=> true,'class'=>'form-horizontal']) !!}
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
                     <a class="btn btn-default" href ="{{url('admin/useful_information/useful_listing')}}">
                        <i class="fa fa-wa fa-reply"></i> {!!trans('common.back_to_listing')!!} 
                     </a> 
                   </span>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                 @include('Admin.common.error_input')
                <div class="box-body">
                  
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">{!!trans('useful_information/useful_listing.name')!!} <span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                      </div>
                    </div>


                    <div class="form-group">
                      <label  class="col-sm-4 control-label">{!!trans('useful_information/useful_listing.useful_info_category')!!}<span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                        {!! Form::select('useful_InfoCategory_id',[null => 'Select Category'] +$useful_info_category,null,['class'=>'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">{!!trans('useful_information/useful_listing.url')!!}</label>
                      <div class="col-sm-4">
                        {!! Form::text('url',null,['class'=>'form-control','placeholder'=>'URL']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">{!!trans('useful_information/useful_listing.file')!!} (*.pdf,*.doc,*.pwf,...) Max Size(3MB)</label>
                      <div class="col-sm-4">
                        {!! Form::file('attach_file',null,['class'=>'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">&nbsp;</label>
                      <div class="col-sm-4">
                        <?php 
                        if(isset($UsefulInfoListings)){
                          if($UsefulInfoListings->attach_file!=''){
                      ?>
                            <?php
                              $filename = $UsefulInfoListings->attach_file;
                              $ext = pathinfo($filename, PATHINFO_EXTENSION);

                              if($ext=='jpg'||$ext=='JPG'||$ext=='JPEG'||$ext=='png'||$ext=='PNG'){
                                echo'<img src="'.SITE_HTTP_URL.'images/icons/image.jpg" width="50">';
                              }else if($ext=='pdf'){
                                echo'<img src="'.SITE_HTTP_URL.'images/icons/pdf.png" width="50">';

                              }else if($ext=='zip'||$ext=='rar'){
                                echo'<img src="'.SITE_HTTP_URL.'images/icons/zip.png" width="50">';

                              }else if($ext=='xls'){
                                echo'<img src="'.SITE_HTTP_URL.'images/icons/excel.png" width="50">';

                              }else if($ext=='docx'||$ext=='doc'){
                                echo'<img src="'.SITE_HTTP_URL.'images/icons/word.png" width="50">';

                              }else{
                                echo'<img src="'.SITE_HTTP_URL.'images/icons/folder.png" width="50">';

                              }
                            ?>
                      <?php } }?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">{!!trans('useful_information/useful_listing.description')!!}</label>
                      <div class="col-sm-8">
                        {!! Form::textarea('description',null,['class'=>'form-control ckeditor','placeholder'=>'Description']) !!}
                      </div>
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
