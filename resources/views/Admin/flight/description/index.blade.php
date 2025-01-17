@extends('Admin.common.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('Admin.common.message') 
    <section class="content-header">
      <h1>{!! $view_title !!}</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{!! $view_sub_title !!}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="with-border box-header">
             <h3 class="box-title">{!! $view_sub_title !!}</h3>
             <div class="pull-right">
             	<span>
             		<button class="btn btn-primary" onclick="location.href ='{{url('admin/fmgr/f_description/create')}}';">
             			<i class="fa fa-wa fa-plus"></i> Add New
             		</button>
             	</spa>
             </div>
            </div><!-- /.box-header -->
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Flight Type</th>
                    <th>Flight No</th>
                    <th>Flight Date</th>
                    <th>Time</th>
                    <th>Route</th>
                    <th>Remark</th>
                    <th>Is Active?</th>
                    <th>Action</th>
                  </tr>
                </thead> 
                <tbody>
                	<?php $i = 1;?>   
	                 @foreach ($data as $key => $value)
	                  <tr>
	                  	<td width="30">{{ $i }}</td>
                      <td>{{ $value->f_type->name }}</td>
                      <td>{{ $value->f_number->name }}</td>
                      <td>{{ $value->flight_date }}</td>
                      <td>{{ $value->f_time->time }}</td>
                      <td>{{ $value->f_route->name }}</td>
                      <td>{{ $value->remark }}</td>
                      <td>
                        @if($value->is_active==1)
                          Active
                        @else
                          Inactive
                        @endif
                      </td>
	                    <td>
	                      <a title="View" href="{{route('admin.fmgr.f_description.show',$value->id)}}" class="btn btn-info"><i class="fa fa-info"></i></a>
	                      <a title="Edit" href="{{route('admin.fmgr.f_description.edit',$value->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
		                    <a title="Delete" href="{{route('admin.fmgr.f_description.destroy',$value->id)}}" class="btn btn-danger" data-method="delete" data-confirm="Are you sure you want to delete?">
		                     	<i class="fa fa-trash"></i>
		                    </a>
	                    </td>
	                    
	                  </tr>
					       <?php $i++; ?>
	               @endforeach
                </tbody>
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

@endsection

