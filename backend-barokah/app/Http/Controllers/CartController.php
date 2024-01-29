<?php

namespace App\Http\Controllers;

//import Model "Category
use App\Models\Cart;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
     /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Cart::latest()->paginate(5);

        //render view with posts
        return view('carts.index', compact('carts'));
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
        $post = Cart::findOrFail($id);

        //render view with post
        return view('carts.show', compact('cart'));
    }
}
