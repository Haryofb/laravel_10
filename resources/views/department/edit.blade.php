@extends('layout.master')

@section('content-header')
<h1>
   department
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> HOME</a></li>
    <li class="active">Dashboard</li>
  </ol>
@endsection

@section('content-dinamic')
<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Edit department</h3>
              </div>

            <!-- form start -->
            <form role="form" action="{{route('department.update')}}" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <input type="hidden" name="_method" value="PUT" >
                    <input type="hidden" name="id" value="{{$data->id}}"/>

                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control"placeholder="nama" name="name" value="{{$data->name}}">
                  </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


    </div>
</div>
@endsection
