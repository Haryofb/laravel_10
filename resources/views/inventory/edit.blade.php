@extends('layout.master')

@section('content-header')
<h1>
   inventory
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
                <h3 class="box-title">Edit inventory</h3>
              </div>

            <!-- form start -->
            <form role="form" action="{{route('inventory.update')}}" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <input type="hidden" name="_method" value="PUT" >
                    <input type="hidden" name="id" value="{{$data->id}}"/>
                    <input type="hidden" name="archive_id" value="{{$archive->id}}"/>


                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control"placeholder="nama" name="name"
                    value="{{$data->name}}">
                  </div>

                  <div class="form-group">
                    <label>Detail</label>
                    <input type="text" class="form-control"placeholder="nama" name="detail"
                    value="{{$data->name}}">
                  </div>


                  <div class="form-group">
                    <label>Archive</label>
                    <input type="text" class="form-control"placeholder="nama" name="archive_name"
                    value="{{$archive->name}}">
                  </div>


                  <div class="form-group">
                    <label>Detail Archive</label>
                    <input type="text" class="form-control"placeholder="nama" name="archive_detail"
                    value="{{$archive->name}}">
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
