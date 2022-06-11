<?php

namespace App\Http\Controllers;

use App\Http\Requests\Catagory;
use App\Models\Catagories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCatagoriesController extends Controller
{
    /**
     * The __construct() function is a special function that is automatically called when an object is
     * created. 
     * 
     * In this case, we are using the __construct() function to call the middleware() function. 
     * 
     * The middleware() function is a Laravel function that allows us to specify which users are
     * allowed to access a resource. 
     * 
     * In this case, we are using the middleware() function to allow only users with the admin role to
     * access the resource. 
     * 
     * If a user who is not an admin tries to access the resource, they will be redirected to the login
     * page
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    /**
     * The function index() returns the view pages.admin.dashboard with the variable sum
     * 
     * @return The sum of all the products in the database.
     */
    public function index()
    {
        $sum = Product::sum('id');
        return view('pages.admin.dashboard')->with('sum', $sum);
    }

    /**
     * It returns the view of the create page.
     */
    public function create()
    {
        return view('pages.admin.catagory.create');
    }

    /**
     * It creates a new catagory and saves it to the database.
     * 
     * @param Catagory request The request object.
     * 
     * @return The user is being redirected back to the page they were on with a message.
     */
    public function store(Catagory $request)
    {
        $request->validated();

        $catagory = new Catagories();
        $catagory->user_id = $request->input('user_id');
        $catagory->catagory_name = $request->input('name');
        $catagory->save();

        return redirect()->back()->with('message', 'Items successfuly created.');
    }

    /**
     * It returns the view of the items page with the items variable.
     * 
     * @return The items() function is returning the view 'pages.admin.catagory.items' with the
     * variable .
     */
    public function items()
    {
        $items = Catagories::paginate(3);
        return view('pages.admin.catagory.items')->with('items', $items);
    }

    /**
     * It finds the item with the id of , deletes it, and then redirects the user back to the
     * previous page
     * 
     * @param id The id of the item to be deleted.
     */
    public function destroy($id)
    {
        $item = Catagories::findorfail($id);
        $item->delete();

        return redirect()->back();
    }
}
