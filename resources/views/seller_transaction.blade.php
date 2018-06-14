@extends('layout.master')

@section('add_client')


        <!-- Header-->

        <div class="breadcrumbs">
           @if(session()->has('seller_transaction'))
          <div class="alert alert-success">
              {{ session()->get('seller_transaction') }}
          </div>
          @endif
          @if ($errors->has('client_list'))

          <div class="alert alert-danger">{{ $errors->first('client_list') }}</div>
          @endif
          @if ($errors->has('product_list'))

          <div class="alert alert-danger">{{ $errors->first('product_list') }}</div>
          @endif
          @if ($errors->has('paid'))

          <div class="alert alert-danger">{{ $errors->first('paid') }}</div>
          @endif

          <form action="{{ url('seller_transaction') }}" method="post">
            {{ csrf_field() }}
             <div class="card">
                      <div class="card-header">
                         <strong>Seller Transaction</strong>
                      </div>
                      <div class="card-body card-block">
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Select Client</label></div>
                            <div class="col col-sm-6">
								<select name="client_list" class="input-sm form-control-sm form-control">
                  <option value="1">Select Client</option>
                  @foreach($sellers as $seller)             
                                <option value="{{ $seller->name }}">{{ $seller->name }}</option>
                                @endforeach
                </select>
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Select Product</label></div>
                            <div class="col col-sm-6">
								<select name="product_list" class="input-sm form-control-sm form-control">
                  <option value="1">Select Chalan</option>
                  @foreach($products as $product)             
                                <option value="{{ $product->chalan }}">{{ $product->chalan }}</option>
                                @endforeach
                </select>
							</div>
                          </div>
						  
						  
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Paid</label></div>
                            <div class="col col-sm-6">
								<input type="number" id="input-large" name="paid" class="form-control">
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
                        <a href="{{ url('seller_all_details') }}" class="btn btn-success btn-sm">
                          <i class="fa fa-dot-circle-o"></i> All Details
                        </a>
                      </div>
                    </div>
                  
        </div>

@endsection