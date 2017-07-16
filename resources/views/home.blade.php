@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <hr>
      @foreach($opportunities as $key)
      <div class="row">
      <div class="col-md-1 col-xs-offset-4  col-xs-3" style="padding-top:30px;"> <!-- Logo section -->

    <i class="fa fa-circle fa-5x text-info"></i>

      </div>
      <div class="col-md-11 col-xs-12"> <!-- Body section -->

        <div class="col-md-9 col-xs-12 title"> <!-- Title section -->
          <h5><b>{{$key->title}}.</b></h5>

        </div>
        <div class="col-md-3 col-xs-12"> <!-- Time section -->
       <i class="fa fa-clock-o"></i> {{$key->created_at}}

        </div>
        <div class="col-md-12 col-xs-12">
         <p>{{$key->description}}.</p>
        </div>
        <div class="col-md-10 col-xs-12">
          <p><i class="fa pe-7s-star"></i><em>{{$key->company_name}}</em></p>
        </div>
        <div class="col-md-2 col-xs-12">
          <button type="submit" class="btn btn-warning btn-fill pull-right">Learn More</button>
        </div>

      </div>
    </div>
    <hr>
    @endforeach

    </div>
</div>
@endsection
