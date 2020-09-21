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
@if (Auth::user()->role == 1)
<div class="col-md-8">
    <a href="{{route('inventory.add')}}">
        <button class="btn btn-block btn-primary btn-flat">Tambah inventory</button>
    </a>
</div>
@endif
<div class="col-md-8">

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">data inventory</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-condensed">
            <tr>
                <th style="width:10px">#</th>
                <th>id</th>
                <th>Nama</th>
                <th>detail</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <th style="width:10px;">{{ $loop->iteration}}</th>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->detail}}</td>
                <td>
                    <a href='/inventory/edit/{{$d->id}}'>EDIT</a>
                    @if (Auth::user()->role == 1)
                    <a href='/inventory/delete/{{$d->id}}'>DELETE</a>
                    @endif
                </td>

            </tr>

            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>

</div>

@endsection

