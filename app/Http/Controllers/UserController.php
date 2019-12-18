<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next){
            echo 'middleware';
            return $next($request);
        })->only('show');
    }

    public function show($id)
    {
        echo 'UserID: '.$id;
    }
}
