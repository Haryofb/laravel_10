@extends('layout.master')

@section('content-header')
<h1>
   employee
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
                <h3 class="box-title">Input employee</h3>
              </div>

            <!-- form start -->
            <form role="form" action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label>Position</label>
                        <select class="form-control" name="position_id">
                            @foreach ($pos as $p)
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
</div>
@endsection
