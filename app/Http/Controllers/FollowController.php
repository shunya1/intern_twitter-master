<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{




    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => ['required', 'string', 'max:255'],
        ]);

        Follow::create([
            'user_id' => $request->user()->id,
            'body' => $request->input('body'),

        ]);

        return back();
    }

}
