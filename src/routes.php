<?php

    Route::get('products', function () {
        $products = DB::select("SELECT * FROM products");
        // call the view from the productadmin folder
        return view('productadmin::products')->with('products', $products);
    });
