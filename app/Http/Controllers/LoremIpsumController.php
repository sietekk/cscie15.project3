<?php

namespace Project3\Http\Controllers;

use Illuminate\Http\Request;
use Project3\Http\Requests;
use Project3\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class LoremIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return lorem ipsum generator home page
        return view('loremipsum');
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
            'text_type' => 'required|in:words,sentences,paragraphs',
            'text_quantity' => 'required|integer|between:1,100',
        ]);

        // Assign variables
        $text_type = $request->input('text_type');
        $text_quantity = $request->input('text_quantity');

        // Generate Lorem Ipsum Data
        $generator = new Generator();
        if ($text_type == 'words') {
            $text_data = $generator->getRandomWords($text_quantity);
        } elseif ($text_type == 'sentences') {
            $text_data = $generator->getSentences($text_quantity);
        } elseif ($text_type == 'paragraphs') {
            $text_data = $generator->getParagraphs($text_quantity);
        } else {
            // If both frontend and backend validation fail...
            return view('errors.error');
        }

        // Push data to view and return view
        //echo implode('<p>', $text_data;
        return view('results', [
            'payload' => $text_data,
            'source' => 'lorem-ipsum',
            'title' => 'Lorem Ipsum Generator'
        ]);
    }
}
