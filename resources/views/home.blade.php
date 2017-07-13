@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-1" style="padding-top:30px;"> <!-- Logo section -->

    <i class="fa fa-circle fa-5x text-info"></i>

      </div>
      <div class="col-md-11"> <!-- Body section -->

        <div class="col-md-9 title"> <!-- Title section -->
          <h3><b>Supliment your income with Akiba Account.</b></h3>

        </div>
        <div class="col-md-3"> <!-- Time section -->
       <i class="fa fa-clock-o"></i> 2 days ago

        </div>
        <div class="col-md-12">
         <p>Supliment your income with Akiba Account.</p>
        </div>

        <div class="col-md-offset-10 col-md-2">
          <button type="submit" class="btn btn-warning btn-fill pull-right">Learn More</button>
        </div>

      </div>
    </div>
    </div>
</div>
@endsection
