<?php

namespace App\Http\Controllers;

use App\Http\Requests\Word\CreateRequest;
use App\Models\Word;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * create
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('word.create')->with([
            
        ]);
    }

    /**
     * store
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $params = array_merge($request->all(), [
            'user_id' => Auth::id()
        ]);

        $word = new Word($params);
        $word->save();

        return redirect()->route('home')->with([
            'success' => '文字列を投稿しました！'
        ]);
    }
}
