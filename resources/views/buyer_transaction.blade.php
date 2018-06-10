@extends('layout.master')

@section('add_client')

        <!-- Header-->

        <div class="breadcrumbs">
             <div class="card">
                      <div class="card-header">
                         <strong>Buyer Transaction</strong>
                      </div>
                      <div class="card-body card-block">
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Select Client</label></div>
                            <div class="col col-sm-6">
								<select name="input-small" class="input-sm form-control-sm form-control">
									<option>Select Client</option>
								</select>
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Select Product</label></div>
                            <div class="col col-sm-6">
								<select name="input-small" class="input-sm form-control-sm form-control">
									<option>Select Product</option>
								</select>
							</div>
                          </div>
						  
						  
						  <div class="row form-group">
                            <div class="col col-sm-6"><label for="input-small" class=" form-control-label">Advance</label></div>
                            <div class="col col-sm-6">
								<input type="number" id="input-large" name="input-large" class="form-control">
							</div>
                          </div>
						  
						  
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
			
						<div class="card-footer">
                        <a href="buyer_all_details.html" class="btn btn-success btn-sm">
                          <i class="fa fa-dot-circle-o"></i> All Details
                        </a>
                      </div>
                    </div>
                  
        </div>

@endsection