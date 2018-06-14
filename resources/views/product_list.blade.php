@extends('layout.master')

@section('add_client')

        <!-- Header-->

        <div class="breadcrumbs">
              <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Product list</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Chalan no</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Product name</th>
                                  <th scope="col">Qty</th>
                                  <th scope="col">Qc out</th>
                                  <th scope="col">Buy rate</th>
                                  <th scope="col">Sell rate</th>
                                  <th scope="col">Profit</th>
                                  <th scope="col">Picture</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($products as $product)
                            <tr>
                              <th scope="row">{{ $product->chalan }}</th>
                              <td>{{ $product->buying_date }}</td>
                              <td>{{ $product->product_name }}</td>
                              <td>{{ $product->quantity }}</td>
                              <td>{{ $product->qc_out }}</td>
                              <td>{{ $product->buy_rate }}</td>
                              <td>{{ $product->seller_rate }}</td>
                              <td>{{ $product->profit }}</td>
                              @if( $product->picture != "")
                              <td><img src="img/{{ $product->picture }}" height="100px"/></td>
                              @endif
                            </tr>
                            @endforeach
                      </tbody>
                  </table>
                        </div>
                    </div>
        </div>

@endsection