@extends('layout.master')

@section('content-header')
<h1>
   member
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
                <h3 class="box-title">Edit member</h3>
              </div>

            <!-- form start -->
            <form role="form" action="{{route('member.update')}}" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <input type="hidden" name="_method" value="PUT" >
                    <input type="hidden" name="id" value="{{$member->id}}"/>

                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control"placeholder="nama" name="name"
                    value="{{$member->name}}">
                  </div>
                  <div class="form-group">
                    <label>detail</label>
                    <input type="text" class="form-control"placeholder="detail" name="detail"
                    value="{{$member->name}}">
                  </div>
                  <div class="form-group">
                    <label>Position</label>
                        <select class="form-control" name="position">
                            <option value="{{$member->position_id}}">
                                {{$member->position->name}}
                            </option>
                            @foreach ($position as $p)
                            @if( $p->id != $member->position_id)
                        <option value="{{$p->id}}">
                        {{$p->name}}
                        </option>
                        @endif

                            @endforeach
                        </select>
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
