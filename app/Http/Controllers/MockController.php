<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Tweet;

class MockController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function account()
    {
        $user = \Auth::user();
        return view('settings.account',['user' => $user,]);
    }



    public function updateAccount()
    {
        return view('settings.account');

    }





    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        $user = \Auth::user();
        return view('settings.profile',['user' => $user,]);

    }

    public function updateProfile()
    {
        return redirect()->back();

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search()
    {
        return view('search');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user()
    {
        $user = \Auth::user();
        $tweets = Tweet::all();
        return view('user.index', ['user' => $user, 'tweets' => $tweets,]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function following()
    {
        return view('user.following');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function followers()
    {
        return view('user.followers');
    }


  /*  public function tweet()
    {
        return view('fragments.tweet');
    }
  */
}