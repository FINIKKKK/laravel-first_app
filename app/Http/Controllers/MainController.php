<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function reviews()
    {
        $reviews = new ContactModel();
        return view('reviews', ['reviews' => $reviews->all()]);
    }

    public function reviews_check(Request $req)
    {
        $valid = $req->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);

        $review = new ContactModel();
        $review->email = $req->input('email');
        $review->subject = $req->input('subject');
        $review->message = $req->input('message');

        $review->save();

        return redirect('reviews');
    }
}
