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

        $sum = Catagories::sum('user_id');

        return view('pages.admin.dashboard')->with('sum', $sum);
    }

    public function create()
    {
        return view('pages.admin.create');
    }

    public function store(AdminRequest $request)
    {

        $request->validated();

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path("images"), $newImageName);

        $items = new Catagories();
        $items->user_id = $request->input('user_id');
        $items->name = $request->input('name');
        $items->type = $request->input('type');
        $items->description = $request->input('description');
        $items->image_path = $newImageName;
        $items->price = $request->input('price');
        $items->save();

        return redirect('/admin');
    }

    public function items()
    {
        $items = Catagories::paginate(3);
        return view('pages.admin.items')->with('items', $items);
    }
}
