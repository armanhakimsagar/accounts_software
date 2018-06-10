@extends('layout.master')

@section('add_client')


        <!-- Header-->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
             <div class="card">
                      <div class="card-header">
                         <strong>Add Investment</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Amount</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control"></div>
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
			
			<div class="card">
                      <div class="card-header">
                         <strong>Add Cost</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Amount</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control"></div>
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
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
             <div class="card">
                      <div class="card-header">
                         <strong>Accounts</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Advance</label></div>
                            <div class="col col-sm-6">12,0000</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Due</label></div>
                            <div class="col col-sm-6">12,0000</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Liquid Cash</label></div>
                            <div class="col col-sm-6">12,0000</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Investment</label></div>
                            <div class="col col-sm-6">12,0000</div>
                          </div>
                      </div>
                    </div>
                  
        </div>
		</div> 
        </div>
		</div>
 
@endsection