@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">

      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">Post an Investment Opportunity</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/addopport') }}">
                          {{ csrf_field() }}

                              <div class="col-md-12">
                                <div class="col-md-6">

                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                            <label for="company_name" class="col-md-12 control-label">Company/Organisation Name</label>

                            <div class="col-md-12">
                                <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">

                                @if ($errors->has('company_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-12 control-label">Investment Title</label>

                    <div class="col-md-12">
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                                </div>
                                    <div class="col-md-6">

                            <div class="form-group{{ $errors->has('kra_pin') ? ' has-error' : '' }}">
                                <label for="kra_pin" class="col-md-12 control-label">KRA Pin</label>

                                <div class="col-md-12">
                                    <input id="kra_pin" type="text" class="form-control" name="kra_pin" value="{{ old('kra_pin') }}">

                                    @if ($errors->has('kra_pin'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kra_pin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                  </div>

                          <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                              <label for="location" class="col-md-12 control-label">Location</label>

                              <div class="col-md-12">
                                  <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}">

                                  @if ($errors->has('location'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('location') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-12">

                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="description" class="col-md-12 control-label">Description</label>

                                        <div class="col-md-12">
                                            <textarea id="description" class="form-control ckeditor" name="description">Describe the investment opportunity</textarea>

                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    </div>
                                      </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-warning">
                                      <i class="fa fa-btn fa-plus"></i> Submit
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
