<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class GroupListController extends Controller
{

    public function GroupListViewFunction()
    {
        $grouplist = Groups::all();
        return view('AdminView.List.grouplist',compact('grouplist'));
    }
}
