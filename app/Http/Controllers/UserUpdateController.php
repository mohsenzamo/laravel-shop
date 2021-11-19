<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserUpdateController extends Controller
{

    public function UserUpdateFunction($id)
    {

        $UserData = Users::where('id', $id)->get();


        return view('AdminView.Form.userupdate', compact('UserData'));
    }

    public function update(Request $request)
    {
        Users::where('id', $request->id)->update([
            'UserName' => $request->username,
            'Password' => $request->password,
        ]);

        $userlist = Users::all();
        return view('AdminView.List.userlist', compact('userlist'));
    }

}
