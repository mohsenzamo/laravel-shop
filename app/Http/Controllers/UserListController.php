<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserListController extends Controller
{

    public function UserListViewFunction()
    {
        $userlist = Users::all();
        return view('AdminView.List.userlist',compact('userlist'));
    }
}
