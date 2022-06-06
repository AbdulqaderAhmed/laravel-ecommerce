<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use Illuminate\Http\Request;

class CatagoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Catagories::all();

        return view('pages.client.index')->with('items', $items);
    }

    public function catagories()
    {
        $shoes = Catagories::where('type', 'shoe')->get();
        $clothes = Catagories::where('type', 'cloth')->get();
        $electronics = Catagories::where('type', 'electronics')->get();

        return view('pages.client.catogires')
            ->with([
                'shoes' => $shoes,
                'clothes' => $clothes,
                'electronics' => $electronics,
            ]);
    }

    public function detail($id)
    {
        $item = Catagories::findorfail($id);

        return view('pages.client.detail')->with('item', $item);
    }
}
