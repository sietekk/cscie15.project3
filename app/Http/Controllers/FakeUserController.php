<?php

namespace Project3\Http\Controllers;

use Illuminate\Http\Request;
use Project3\Http\Requests;
use Project3\Http\Controllers\Controller;
use Faker\Factory;

class FakeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return fake user generator home page
        return view('fakeuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form
        $this->validate($request, [
            'form_array.0' => 'required',
            'user_quantity' => 'required|integer|between:1,100',
        ]);
        return $request;
        //$name = in_array('name', $request->input('form_array');

        // Assign variables
        $form_array = $request->input('form_array');
        $name = in_array('name', $form_array);
        $address = in_array('address', $form_array);
        $phone = in_array('phone', $form_array);
        $birthdate = in_array('birthdate', $form_array);
        $user_quantity = $request->input('user_quantity');

        // Generate Fake User Data
        $faker = Factory::create();
        //if ($name == false && $address == false && $phone == false && $birthdate == false) {
          //  $name = true;

        // Push data to view and return view
        return view('results', [
            'payload' => null,
            'source' => 'fake-user',
            'title' => 'Fake User Generator'
        ]);
    }
}
