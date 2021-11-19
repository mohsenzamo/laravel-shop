<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserFormController extends Controller
{

    public function UserFormViewFunction()
    {
        return view('AdminView.Form.userform');
    }

    public function AddUserFunction(Request $request)
    {
        Users::create([
            'UserName' => $request->username,
            'Password' => $request->password,
        ]);
        return view('AdminView.Form.userform');
    }
    public function DelelteFunction ($id){
        Users::where('id',$id)->delete();

        $userlist = Users::all();
        return view('AdminView.List.userlist', compact('userlist'));
    }
}
