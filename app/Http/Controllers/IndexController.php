<?php

namespace Project3\Http\Controllers;

use Illuminate\Http\Request;
use Project3\Http\Requests;
use Project3\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return project home page
        return view('index');
    }
}
