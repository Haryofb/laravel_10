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
                <h3 class="box-title">Input inventory</h3>
              </div>

            <!-- form start -->
            <form role="form" action="{{route('inventory.store')}}" method="POST" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <input type="hidden" name="_method" value="POST" />
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control"placeholder="nama" name="name">
                </div>
                <div class="form-group">
                    <label>detail</label>
                    <input type="text" class="form-control"placeholder="detail" name="detail">
                </div>
                <div class="form-group">
                    <label>archive</label>
                    <input type="text" class="form-control"placeholder="archive name" name="archive_name">
                </div>
                <div class="form-group">
                    <label>detail archive</label>
                    <input type="text" class="form-control"placeholder="archive detail" name="archive_detail">
                </div>

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
