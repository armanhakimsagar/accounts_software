@extends('layout.master')

@section('add_client')
    <!-- Left Panel -->

        <!-- Header-->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
          <form action="{{ url('add_seller') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
                <div class="card">
                    @if(session()->has('seller'))
                      <div class="alert alert-success">
                          {{ session()->get('seller') }}
                      </div>
                      @endif
                      @if ($errors->has('business_name'))

                      <div class="alert alert-danger">{{ $errors->first('business_name') }}</div>
                      @endif
                      <div class="card-header">
                         <strong>Add Seller</strong>
                      </div>
                      <div class="card-body card-block">
                        
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Business Name</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-small" name="business_name" class="input-sm form-control-sm form-control"></div>
                          </div>
                        
                      </div>
                      <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        
                      </div>
                    </div>
            </form>
                  
        </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
             <div class="card">
                    @if(session()->has('buyer'))
                      <div class="alert alert-success">
                          {{ session()->get('buyer') }}
                      </div>
                      @endif
                      @if ($errors->has('buyer_business_name'))

                      <div class="alert alert-danger">{{ $errors->first('buyer_business_name') }}</div>
                      @endif
                      <div class="card-header">
                         <strong>Add Buyer</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ url('add_buyer') }}" method="post" class="form-horizontal">
                          {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Business Name</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-small" name="buyer_business_name" class="input-sm form-control-sm form-control"></div>
                          </div>
                        
                      </div>
                      <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        </form>
                      </div>
                    </div>
                  
        </div>
		</div>
  <!-- Right Panel -->

@endsection
