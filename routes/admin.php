<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Homecontroller;

Route::get('',[Homecontroller::class,'index']);