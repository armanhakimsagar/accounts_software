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
                                  <th scope="col">Product name</th>
                                  <th scope="col">Qc ok</th>
                                  <th scope="col">Qc out</th>
                                  <th scope="col">Buy rate</th>
                                  <th scope="col">Sell rate</th>
                                  <th scope="col">Profit</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($products as $product)
                            <tr>
                              <th scope="row">{{ $product->chalan }}</th>
                              <td>{{ $product->product_name }}</td>
                              <td>{{ $product->qc_out }}</td>
                              <td>{{ $product->qc_out }}</td>
                              <td>{{ $product->buy_rate }}</td>
                              <td>{{ $product->seller_rate }}</td>
                              <td>{{ $product->seller_rate }}</td>
                            </tr>
                            @endforeach
                      </tbody>
                  </table>
                        </div>
                    </div>
        </div>

@endsection