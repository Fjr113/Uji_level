<?php

namespace App\Http\Controllers;

//import Model "Category
use App\Models\User;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
     /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = User::latest()->paginate(5);

        //render view with posts
        return view('users.index', compact('users'));
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
        $post = User::findOrFail($id);

        //render view with post
        return view('users.show', compact('user'));
    }
}
