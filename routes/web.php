<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::user()) {
        return view('index');
    }
    return redirect(url('/login'))->withErrors('Not authenticated', 'You need to log in first');
});

Route::get('/login', function () {
    return view('accounts.login');
});

Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/cancel', function () {
    return view('cancel');
});
