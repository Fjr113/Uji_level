<?php

namespace App\Http\Controllers;

//import Model "Category
use App\Models\Category;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Category::latest()->paginate(5);

        //render view with posts
        return view('categories.index', compact('categories'));
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
        $post = Category::findOrFail($id);

        //render view with post
        return view('categories.show', compact('category'));
    }
}
