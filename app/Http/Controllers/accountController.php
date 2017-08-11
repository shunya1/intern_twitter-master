<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class accountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    /**
     * 情報編集画面を表示する
     *
     * @param $id
     * @return $this
     */
    /*   public function edit($id)
       {
           $user = User::where('id', '=', $id)->first();

           return view('user.edit', ['user' => $user]);
       }

       /**
        *情報を更新する
        *
        * @param Request $request
        * @param $id
        * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
        */
    /*  public function updateAccount(Request $request, $id)
      {
          $this->validate($request, [
              'name' => ['required', 'string', 'max:25'],
              'email' => ['required', 'string', 'email', 'max:255'],
              'password' => ['required', 'string', 'min:6', 'confirmed'],
          ]);

          //テーブルの対象ユーザ情報を更新
          User::where('id', '=', $id)
              ->update([
                  'name' => $request->input('name'),
                  'email' => $request->input('email'),
                  'password' => bcrypt($request->input('password')),
              ]);

          return redirect('/user');
      }


  }*/

}


