@extends('layout.master')

@section('add_client')


        <!-- Header-->

        <div class="breadcrumbs">
             <div class="card">
                      <div class="card-header">
                         <strong>Add Product</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Date</label></div>
                            <div class="col col-sm-6"><input type="date" id="input-small" name="input-small" class="input-sm form-control-sm form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">chalan no</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-normal" name="input-normal" placeholder="Chalan no" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product name</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-large" name="input-large" placeholder="Product name" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product Description</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-large" name="input-large" placeholder="Product Description" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Quantity</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-large" placeholder="Qty" name="input-large" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Buy rate</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-large" placeholder="Buy rate" name="input-large" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product buyer </label></div>
                            <div class="col col-sm-6"><select class="form-control">
                                <option>Select Buyer</option>               
                                <option>Mr abc</option>
                            </select></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Product seller </label></div>
                            <div class="col col-sm-6"><select class="form-control">
                                <option>Select Seller</option>               
                                <option>Mr abc</option>
                            </select></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Sale rate</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-large" placeholder="Sale rate" name="input-large" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">QC out</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-large" placeholder="QC out" name="input-large" class="form-control"></div>
                          </div>
						  
						  <hr><hr>
							  
					      <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">QC ok</label></div>
                            <div class="col col-sm-6"><input readonly type="text" id="input-large" name="input-large" class="form-control"></div>
                          </div>
					      <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Buy amount</label></div>
                            <div class="col col-sm-6"><input readonly type="text" id="input-large" name="input-large" class="form-control"></div>
                          </div>
					      <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Sale amount</label></div>
                            <div class="col col-sm-6"><input readonly type="text" id="input-large" name="input-large" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Profit/Loss</label></div>
                            <div class="col col-sm-6"><input readonly type="text" id="input-large" name="input-large" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">Liquid cash</label></div>
                            <div class="col col-sm-6"><input readonly type="text" id="input-large" name="input-large" class="form-control"></div>
                          </div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                  
        </div>

@endsection