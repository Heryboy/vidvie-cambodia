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
              
              {!! Form::model($fmenu,['method' => 'PATCH','class'=>'form-horizontal','route'=>['admin.menu_mgr.fmenu.update',$fmenu->id]]) !!}
              
              	<div class="with-border box-header">
	               <h3 class="box-title">{{$view_title}} Form</h3>
	               <div class="pull-right">
		               <span>
			               <button class="btn btn-success" type="submit">
			               		<i class="fa fa-wa fa-save"></i> Save 
			               </button> &nbsp;&nbsp; 
			               <a class="btn btn-default" href ="{{url('admin/menu_mgr/fmenu')}}">
				               	<i class="fa fa-wa fa-reply"></i> Back to List
			               </a> 
		               </span>
	               	</div>
	              </div><!-- /.box-header -->
	              <!-- form start -->
                
                 @include('Admin.common.error_input')
                <div class="box-body">
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Menu Type<span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                        {!! Form::select('menu_type_id',$menu_type,null,['class'=>'form-control']) !!}
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Parents</label>
                      <div class="col-sm-4">
                        {!! Form::select('parent_id',[null => 'Select Parent Menu'] +$parents,null,['class'=>'form-control']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Menu Link<span class="validate_label_red">*</span></label>
                      <div class="col-sm-4">
                        {!! Form::text('menu_link',null,['class'=>'form-control','placeholder'=>'Menu Link']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Ordering</label>
                      <div class="col-sm-4">
                        {!! Form::text('ordering',null,['class'=>'form-control','placeholder'=>'Ordering']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Is Active</label>
                      <div class="col-sm-4">
                        {!! Form::checkbox('is_active', null, true,['class'=>'form-control', 'style'=>'width:40px']) !!}
                      </div>
                    </div>

                    <!-- Tabs -->
                    <div id="tabs">
                      <ul>
                        @foreach ($languages as $lang) 
                          <li><a href="#{{$lang->code}}" data-ajax="false"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> {{$lang->name}}</a></li>
                        @endforeach
                      </ul>
                      @foreach ($languages as $lang) 
                      <div id="{{$lang->code}}">
                        <div class="form-group">
                          <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> Menu Title <span class="validate_label_red">*</span></label>
                          <div class="col-sm-8">
                            {!! Form::hidden('fmenu_language_id[]',$lang->id) !!}
                            {!! Form::text('name_'.$lang->id,$fmenuDes[$lang->id]['menu_name'],['class'=>'form-control','placeholder'=>'Menu Title']) !!}
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> Meta Keywords</label>
                          <div class="col-sm-8">
                            {!! Form::textarea('meta_keywords[]',$fmenuDes[$lang->id]['meta_keywords'],['class'=>'form-control','placeholder'=>'Metha Keywords']) !!}
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-4 control-label"><img src="{{SITE_HTTP_URL.$lang->image}}" height="20" alt="{{$lang->name}}" /> Meta Description</label>
                          <div class="col-sm-8">
                            {!! Form::textarea('meta_description[]',$fmenuDes[$lang->id]['meta_description'],['class'=>'form-control','placeholder'=>'Metha Description']) !!}
                          </div>
                        </div>
                      </div>
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
  
<script src="{{WWW_SUB_DOMAIN}}assets/backend/js/jquery-ui.js"></script>
<script>
  $( "#tabs" ).tabs();
</script>  
@endsection