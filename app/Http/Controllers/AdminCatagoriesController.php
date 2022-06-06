<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Catagories;

class AdminCatagoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        $items = Catagories::all();

        return view('pages.dashboard')->with('items', $items);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(AdminRequest $request)
    {

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images') . $newImageName);

        $items = new Catagories();
        $items->name = $request->input('name');
        $items->title = $request->input('title');
        $items->description = $request->input('description');
        $items->image_path = $newImageName;
        $items->prize = $request->input('prize');

        return redirect('/admin');
    }
}
