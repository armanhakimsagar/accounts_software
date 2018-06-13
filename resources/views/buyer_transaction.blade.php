@extends('layout.master')

@section('add_client')

        <!-- Header-->

        <div class="breadcrumbs">

          @if(session()->has('buyer_transaction'))
          <div class="alert alert-success">
              {{ session()->get('buyer_transaction') }}
          </div>
          @endif
          @if ($errors->has('client_list'))

          <div class="alert alert-danger">{{ $errors->first('client_list') }}</div>
          @endif
          @if ($errors->has('product_list'))

          <div class="alert alert-danger">{{ $errors->first('product_list') }}</div>
          @endif
          @if ($errors->has('advance'))

          <div class="alert alert-danger">{{ $errors->first('advance') }}</div>
          @endif


          <form action="{{ url('buyer_transaction') }}" method="post">
            {{ csrf_field() }}
             <div class="card">
                      <div class="card-header">
                         <strong>Buyer Transaction</strong>
                      </div>
                      <div class="card-body card-block">
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Select Client</label></div>
                            <div class="col col-sm-6">
								<select name="client_list" class="input-sm form-control-sm form-control">
									<option value="1">Select Client</option>
                  <option value="2">hello</option>
								</select>
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Select Product</label></div>
                            <div class="col col-sm-6">
								<select name="product_list" class="input-sm form-control-sm form-control">
									<option value="1">Select Product</option>
                  <option value="2">hello</option>
								</select>
							</div>
                          </div>
						  
						  
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Advance</label></div>
                            <div class="col col-sm-6">
								<input type="number" id="input-large" name="advance" class="form-control">
							</div>
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
						<div class="card-footer">
                        <a href="{{ url('buyer_all_details') }}" class="btn btn-success btn-sm">
                          <i class="fa fa-dot-circle-o"></i> All Details
                        </a>
                      </div>
                    </div>
                  
        </div>

@endsection