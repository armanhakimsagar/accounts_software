@extends('layout.master')

@section('add_client')

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
             <div class="card">
                      <div class="card-header">
                         <strong>Search</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col-sm-1"><label for="input-small" class=" form-control-label">To</label></div>
							  <div class="col-sm-4">
								  <select class="form-control">
									  <option>Jan</option>
								  </select>
							  </div>
						  </div>
							 <div class="row form-group">
                            <div class="col-sm-1"><label for="input-small" class=" form-control-label">From</label></div>
							  <div class="col-sm-4">
								  <select class="form-control">
									  <option>Jan</option>
								  </select>
							  </div>
                          </div>
						  <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Search
                        </button>
							
                      </div>
						    <br><br>
						  <div class="card">
                      <div class="card-header">
                         <strong>Reporting Section</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Profit/Loss</label></div>
                            <div class="col col-sm-6">1,0000</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Buy Amount</label></div>
                            <div class="col col-sm-6">1,0000</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Sell Amount</label></div>
                            <div class="col col-sm-6">12,0000</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Cost</label></div>
                            <div class="col col-sm-6">12,0000</div>
                          </div>
                          </div>
                      </div>
                    </div>
                  
        </div>
						  
						  
                          </div>
						  
                      </div>
                    </div>
                  
        </div>
		</div>
 
@endsection