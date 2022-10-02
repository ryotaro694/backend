<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $words = Word::all();
        return view('home')->with([
            'words' => $words
        ]);
    }
}
