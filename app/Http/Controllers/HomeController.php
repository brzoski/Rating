<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$user = User::first();
    	$post = Post::first();

    	/*$rating = $post->rating([
    		'rating' => 5
    		], $user);

    	dd($rating);*/

    	dd($post->avgRating);

        //return view('home');
    }
}
