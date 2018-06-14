<?php


Route::get('/', function () {
    return view('login.index');
});



Route::get('/add_client', function () {
    return view('add_client');
});

Route::get('/buyer_transaction','BuyertransactionController@index');

Route::get('/seller_transaction','SellerTransactionController@index');

Route::get('/add_product','ProductsController@index');

Route::post('add_product','ProductsController@add_product');

Route::get('/investment','InvestmentController@index');

Route::post('/investment_post','InvestmentController@post_investment');

Route::post('/cost_post','CostController@post_cost');

Route::post('/load_add','LoanController@load_add');

Route::post('/add_seller','SellerController@add_seller');

Route::post('/add_buyer','BuyerController@add_buyer');

Route::post('buyer_transaction','BuyertransactionController@add_transaction');

Route::post('seller_transaction','SellerTransactionController@add_transaction');

Route::get('/product_list','ProductsController@product_list');


Route::get('/search', function () {
    return view('search');
});


Route::post('/search_post','SearchController@search');


Route::get('/seller_all_details','SellerTransactionController@seller_all_details');

Route::get('/buyer_all_details','BuyertransactionController@buyer_all_details');

