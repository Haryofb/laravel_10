@extends('layout.master')

@section('content-header')
<h1>
   position
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> HOME</a></li>
    <li class="active">Dashboard</li>
  </ol>
@endsection

@section('content-dinamic')

<div class="col-md-8">
    <a href="{{route('position.add')}}">
<button class="btn btn-block btn-primary btn-flat">Tambah position</button>
    </a>
</div>

<div class="col-md-8">

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">data position</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-condensed">
            <tr>
                <th style="width:10px">#</th>
                <th>id</th>
                <th>Nama</th>
                <th>Department</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <th style="width:10px;">{{ $loop->iteration}}</th>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->Department->name}}</td>
                <td>
                    <a href='/position/edit/{{$d->id}}'>EDIT</a>
                    <a href='/position/delete/{{$d->id}}'>DELETE</a>
                </td>

            </tr>

            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>

</div>

@endsection

