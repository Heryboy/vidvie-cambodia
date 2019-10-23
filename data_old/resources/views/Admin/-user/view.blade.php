@extends('Admin.common.layout')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('Admin.common.section_header')
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              
              {!! Form::model($user,['method' => 'PATCH','class'=>'form-horizontal','route'=>['admin.user_mgr.user.update',$user->id]]) !!}
              
                <div class="with-border box-header">
                 <h3 class="box-title">{{$view_title}} Form</h3>
                 <div class="pull-right">
                   <span> 
                     <a class="btn btn-default" href ="{{url('admin/user_mgr/user')}}">
                        <i class="fa fa-wa fa-reply"></i> Back to List
                     </a> 
                   </span>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                 @include('Admin.common.error_input')
                <div class="box-body">
                    
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Username <span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                          {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'username']) !!}
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Group<span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                        {!! Form::select('group_id',[null => 'Select Group'] +$group_user,null,['class'=>'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Image</label>                     
                      <div class="col-sm-4">
                        <input type="text" id="txtSelectedFile" name="photo" style="border:1px solid #ccc;cursor:pointer;padding:4px;width:80%;" value="{{ $user->photo or '' }}" onclick="openCustomRoxy2()" placeholder="Select an image">
                        <div id="roxyCustomPanel2" style="display: none;">
                          <iframe src="{{WWW_SUB_DOMAIN.SMART_SELECT_IMAGE_FILEMANAGER}}" style="width:100%;height:100%" frameborder="0"></iframe>
                        </div>
                      
                        <div class="col col-lg-6">
                            <img src="{{ WWW_SUB_DOMAIN}}/{{$user->photo}}" alt="" width="120" height="100">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label"></label>
                      <div class="col-sm-4">
                          <label class="validate_label_red">If you want to change password, please input new password.</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Password <span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                          {!! Form::password('password',null,['class'=>'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Confirm Password <span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                          {!! Form::password('password_confirmation',null,['class'=>'form-control']) !!}
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
@include('Admin.common.fancybox')