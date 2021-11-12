<?php

use GoSafer\Http\Request;

route()->get('/hello', function(Request $request) {
    return 'Hello, This is a route';
});

route()->get('/', function(Request $request) {
    return view('index');
});