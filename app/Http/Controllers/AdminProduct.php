<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Catagories;
use App\Models\Product;

class AdminProduct extends Controller
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
     * It returns a view called `pages.admin.product.items` and passes the variable `items` to the view
     * 
     * @return The view pages.admin.product.items with the items variable
     */
    public function index()
    {
        $items = Product::paginate(3);
        return view('pages.admin.product.items')->with('items', $items);
    }

    /**
     * This function is used to create a new product
     * 
     * @return The view is being returned.
     */
    public function create()
    {
        $catagories = Catagories::all();
        return view('pages.admin.product.create')->with('items', $catagories);
    }

    /**
     * It takes the validated data from the request, creates a new image name, moves the image to the
     * public folder, and then saves the data to the database
     * 
     * @param AdminRequest req The request object.
     * 
     * @return The product is being returned.
     */
    public function store(AdminRequest $req)
    {
        $req->validated();

        $newImage = time() . '-' . $req->name . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $newImage);

        $product = new Product();
        $product->catagory = $req->input('catagory');
        $product->name = $req->input('name');
        $product->description = $req->input('description');
        $product->price = $req->input('price');
        $product->image_path = $newImage;
        $product->save();

        return redirect()->back();
    }

    /**
     * It finds the product with the given id, deletes it, and redirects back to the previous page
     * 
     * @param id The id of the product to be deleted.
     * 
     * @return The product is being deleted from the database.
     */
    public function destroy($id)
    {
        $product = Product::findorfail($id);
        $product->delete();

        return redirect()->back();
    }

    /**
     * It returns a view with the catagories and the product
     * 
     * @param id The id of the product you want to update.
     * 
     * @return The view is being returned.
     */
    public function update_product($id)
    {
        $catagories = Catagories::all();
        $product = Product::findorfail($id);
        return view('pages.admin.product.update')->with(['items' => $catagories, 'product' => $product]);
    }

    /**
     * It takes the validated request, creates a new image name, moves the image to the public folder,
     * finds the product by id, updates the product with the new data, and then redirects to the admin
     * product page
     * 
     * @param AdminRequest req The request object.
     * @param id The id of the product to be updated.
     * 
     * @return The product is being returned.
     */
    public function update(AdminRequest $req, $id)
    {
        $req->validated();

        $newImage = time() . '-' . $req->name . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $newImage);

        $product = Product::findorfail($id);
        $product->catagory = $req->input('catagory');
        $product->name = $req->input('name');
        $product->description = $req->input('description');
        $product->price = $req->input('price');
        $product->image_path = $newImage;
        $product->save();

        return redirect('/admin/product');
    }
}
