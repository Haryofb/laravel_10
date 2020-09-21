@extends('layout.master')

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registration</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Registration</li>
            </ol>
        </div>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection
@section('content')
<!-- Main content -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Registration</h3>
        </div>
            <form role="form" action="/member/store" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="POST"/>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" name="detail" placeholder="Masukkan Code">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                            <select class="form-control" name="position">
                                @foreach ($position as $p)
                                    <option value="{{$p->id}}">
                                        {{$p->name}}
                                    </option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
</div>
    <!-- /.card -->
<!-- /.content -->@endsection
