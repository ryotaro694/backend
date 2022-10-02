<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function storeItem(Request $request)
    {
        $params = $request->all();

        $item = new Item($params);
        $item->save();

        return response()->json([
            "message" => "item record created"
        ], 201);
    }
}
