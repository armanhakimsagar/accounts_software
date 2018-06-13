@extends('layout.master')

@section('add_client')

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
            
              <div class="card">
                <form action="{{ url('search_post') }}" method="post">
                  {{ csrf_field() }}
                      <div class="card-header">
                         <strong>Search By Month</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">From</label></div>
                            <div class="col col-sm-6">
                                <input type="date" name="from">
                            </div>
                          </div>
                      </div>   

                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">To</label></div>
                            <div class="col col-sm-6">
                                <input type="date" name="to">
                            </div>
                          </div>
                      </div>  
							 
						  <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Search
                        </button>
							
                        </div>
                </from>
              </div>

						    <br><br>
						  <div class="card">
                      <div class="card-header">
                         <strong>Reporting Section</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Profit/Loss</label></div>
                            <div class="col col-sm-6">
                              <?php
                                if(isset($profit)){
                                  echo $profit;
                                }
                              ?>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Advance</label></div>
                            <div class="col col-sm-6">
                              <?php
                                if(isset($advance)){
                                  echo $advance;
                                }
                              ?>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Paid</label></div>
                            <div class="col col-sm-6">
                              <?php
                                if(isset($paid)){
                                  echo $paid;
                                }
                              ?>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Cost</label></div>
                            <div class="col col-sm-6">
                              <?php
                                if(isset($cost)){
                                  echo $cost;
                                }
                              ?>
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
		</div>
 
@endsection