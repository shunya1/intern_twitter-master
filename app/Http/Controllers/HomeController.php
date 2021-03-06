<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;



class HomeController extends Controller
{
    /**
     * @return mixed
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = \Auth::user();

        $tweets =$user->tweets;

        return view('home', ['user' => $user, 'tweets' => $tweets]);

    }




}
