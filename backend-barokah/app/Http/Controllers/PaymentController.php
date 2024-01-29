<?php

namespace App\Http\Controllers;

//import Model "Category
use App\Models\Payment;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
     /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Payment::latest()->paginate(5);

        //render view with posts
        return view('payments.index', compact('payments'));
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
        $post = Payment::findOrFail($id);

        //render view with post
        return view('payments.show', compact('payment'));
    }
}
