<?php


Route::get('/', function () {
    return view('login.index');
});



Route::get('/add_client', function () {
    return view('add_client');
});


Route::get('/buyer_all_details', function () {
    return view('buyer_all_details');
});


Route::get('/buyer_transaction', function () {
    return view('buyer_transaction');
});


Route::get('/add_product', function () {
    return view('add_product');
});


Route::get('/investment', function () {
    return view('investment');
});


Route::get('/product_list', function () {
    return view('product_list');
});


Route::get('/search', function () {
    return view('search');
});


Route::get('/seller_all_details', function () {
    return view('seller_all_details');
});


Route::get('/seller_transaction', function () {
    return view('seller_transaction');
});
