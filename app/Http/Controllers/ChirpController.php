<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(): Response
    // {
    //     return response('Hello, World!');
    // }

    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }
}


