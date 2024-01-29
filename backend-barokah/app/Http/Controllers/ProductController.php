<?php

namespace App\Http\Controllers;

//import Model "Category
use App\Models\Product;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
     /**
     * index
     *
     * @return View
     */
    public function index(): Viewo
    {
        //get posts
        $posts = Product::latest()->paginate(5);

        //render view with posts
        return view('products.index', compact('products'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Product::findOrFail($id);

        //render view with post
        return view('products.show', compact('product'));
    }
}
