@extends('layout.master')

@section('add_client')

        <!-- Header-->

        <div class="breadcrumbs">
             <div class="card">
                      <div class="card-header">
                         <strong>Buyer Details</strong>
                      </div>
                      <div class="card-body card-block">
						    <table class="table table-hover">
							<thead>
							  <tr>
								<th>Chalan no</th>
								<th>Paid amount</th>
								<th>Client name</th>
								<th>Date</th>
								<th>Due</th>
							  </tr>
							</thead>
							<tbody>
							  @foreach($buyer_transactions as $buyer_transaction)
							  <tr>
						  		<td> {{ $buyer_transaction->product_id }} </td>
						  		<td> {{ $buyer_transaction->advance }} </td>
						  		<td> {{ $buyer_transaction->client_id }} </td>
						  		<td> {{ $buyer_transaction->created_at }} </td>
						  		@if($buyer_transaction->status == 0)
					  			<td>  

					  				Due have
					  			</td>
						  		@else
						  			<td> Full Paid In This Chalan</td>
						  		@endif
						  	  </tr>
						  	 @endforeach
							</tbody>
						  </table>
						  
                      </div>
                      
                    </div>
                  
        </div>

@endsection