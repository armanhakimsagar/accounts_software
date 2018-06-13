@extends('layout.master')

@section('add_client')


        <!-- Header-->

        <div class="breadcrumbs">
             <div class="card">

              @if(session()->has('product'))
              <div class="alert alert-success">
                  {{ session()->get('product') }}
              </div>
              @endif
              @if ($errors->has('date'))

              <div class="alert alert-danger">{{ $errors->first('date') }}</div>
              @endif
              @if ($errors->has('chalan'))

              <div class="alert alert-danger">{{ $errors->first('chalan') }}</div>
              @endif
              @if ($errors->has('product_name'))

              <div class="alert alert-danger">{{ $errors->first('product_name') }}</div>
              @endif
              @if ($errors->has('quantity'))

              <div class="alert alert-danger">{{ $errors->first('quantity') }}</div>
              @endif
              @if ($errors->has('buy_rate'))

              <div class="alert alert-danger">{{ $errors->first('buy_rate') }}</div>
              @endif
              @if ($errors->has('product_buyer'))

              <div class="alert alert-danger">{{ $errors->first('product_buyer') }}</div>
              @endif
              @if ($errors->has('product_seller'))

              <div class="alert alert-danger">{{ $errors->first('product_seller') }}</div>
              @endif
              @if ($errors->has('sale_rate'))

              <div class="alert alert-danger">{{ $errors->first('sale_rate') }}</div>
              @endif
              @if ($errors->has('qc_out'))

              <div class="alert alert-danger">{{ $errors->first('qc_out') }}</div>
              @endif



              <form action="{{ url('add_product') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                      <div class="card-header">
                         <strong>Add Product</strong>
                      </div>
                      <div class="card-body card-block">
                        
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Date</label></div>
                            <div class="col col-sm-6"><input type="date" id="input-small" name="date" class="input-sm form-control-sm form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">chalan no</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-normal" name="chalan" placeholder="Chalan no" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product name</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-large" name="product_name" placeholder="Product name" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Quantity</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-large" placeholder="Qty" name="quantity" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Buy rate</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-large" placeholder="Buy rate" name="buy_rate" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product buyer </label></div>
                            <div class="col col-sm-6">
                            <select class="form-control" name="product_buyer">
                                <option value="0">Select Buyer</option>               
                                <option value="1">Mr abc</option>
                            </select></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product seller </label></div>
                            <div class="col col-sm-6">
                              <select class="form-control" name="product_seller">
                                <option value="0">Select Seller</option>               
                                <option value="1">Mr abc</option>
                            </select></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Sale rate</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-large" placeholder="Sale rate" name="sale_rate" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">QC out</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-large" placeholder="QC out" name="qc_out" class="form-control"></div>
                          </div>
							  
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Liquid cash</label></div>
                            <div class="col col-sm-6"><input readonly type="text" id="input-large" name="liquid_cash" class="form-control"></div>
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
                      </form>
                    </div>
                  
        </div>

@endsection