@extends('layout.master')

@section('add_client')


        <!-- Header-->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="breadcrumbs">
             <div class="card">

                      @if(session()->has('investment'))
                      <div class="alert alert-success">
                          {{ session()->get('investment') }}
                      </div>
                      @endif
                      @if ($errors->has('investment'))

                      <div class="alert alert-danger">{{ $errors->first('investment') }}</div>
                      @endif
                      <div class="card-header">
                         <strong>Add Investment</strong>
                      </div>

                      <form action="{{ url('investment_post') }}" method="post" class="form-horizontal">
                      <div class="card-body card-block">
                        
                          <div class="row form-group">
                            {{ csrf_field() }}
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Amount</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-small" name="investment" class="input-sm form-control-sm form-control"></div>
                            
                            <br>
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
			
			               <div class="card">
                      @if(session()->has('cost'))
                      <div class="alert alert-success">
                          {{ session()->get('cost') }}
                      </div>
                      @endif
                      @if ($errors->has('cost'))

                      <div class="alert alert-danger">{{ $errors->first('cost') }}</div>
                      @endif
                      <div class="card-header">
                         <strong>Add Cost</strong>
                      </div>
                      <form action="{{ url('cost_post') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Amount</label></div>

                            <div class="col col-sm-6"><input type="number" id="input-small" min="0" max="{{ $liquid_cash }}" name="cost" class="input-sm form-control-sm form-control"></div>
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

              <div class="card">
                @if(session()->has('loan'))
                      <div class="alert alert-success">
                          {{ session()->get('loan') }}
                      </div>
                      @endif
                      @if ($errors->has('loan_amount'))

                      <div class="alert alert-danger">{{ $errors->first('loan_amount') }}</div>
                      @endif
                      @if ($errors->has('name'))

                      <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                      @endif
                      <div class="card-header">
                         <strong>Loan</strong>
                      </div>
                      <form action="{{ url('load_add') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                      <div class="card-body card-block">
                        
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Loan Option</label></div>
                            <div class="col col-sm-6">
                              <select class="form-control" name="status">
                                <option value="0">select option</option>
                                <option value="1">Loan back</option>
                                <option value="2">Loan give</option>
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Loan amount</label></div>
                            <div class="col col-sm-6"><input type="number" id="input-small" name="loan_amount" class="input-sm form-control-sm form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Name</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-small" name="name" class="input-sm form-control-sm form-control"></div>
                          </div>
                        
                      </div>
                      <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Loan Details
                        </button>
                        
                      </div>
                    </form>
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
                            <div class="col col-sm-6">{{ $buyer }}</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Paid</label></div>
                            <div class="col col-sm-6">{{ $seller }}</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Investment </label></div>
                            <div class="col col-sm-6">{{ $invest }}</div>
                          </div>
              <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">Total Loan Give </label></div>
                            <div class="col col-sm-6">{{ $loan }}</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label"> Liquid Cash </label></div>
                            <div class="col col-sm-6">{{ $liquid_cash }}</div>
                          </div>
                      </div>
                    </div>
                  
        </div>
		</div> 
        </div>
		</div>
 
@endsection