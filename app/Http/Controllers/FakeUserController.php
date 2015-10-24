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
            'user_quantity' => 'required|integer|between:1,100',
        ]);

        // Assign variables
        $form_array = $request->input('form_array', array());
        $user_quantity = $request->input('user_quantity');

        // Generate Fake User Data
        $faker = Factory::create('en_US');
        $payload = array();
        $deposit_address = in_array('address', $form_array);
        $deposit_phone = in_array('phone', $form_array);
        $deposit_birthdate = in_array('birthdate', $form_array);

        for ($i = 0; $i < $user_quantity; $i++){
            $individual = array();
            $individual[] = $faker->name;
            if ($deposit_address) {
                $individual[] = $faker->address;
            }
            if ($deposit_phone) {
                $individual[] = $faker->phoneNumber;
            }
            if ($deposit_birthdate) {
                $individual[] = $faker->date($format = 'Y-m-d', $max = 'now');
            }
            // Append to payload array
            $payload[] = $individual;
        }

        // Push data to view and return view
        return view('results', [
            'payload' => $payload,
            'source' => 'fake-user',
            'title' => 'Fake User Generator'
        ]);
    }
}
