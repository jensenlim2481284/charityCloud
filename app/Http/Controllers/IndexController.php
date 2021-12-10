<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    # Landing page 
    public function index()
    {
        return view('pages.index');
    }


    # App page 
    public function app()
    {
        return view('pages.app');
    }

    # Tranasction page 
    public function transaction()
    {
        return view('pages.transaction');
    }

}
 