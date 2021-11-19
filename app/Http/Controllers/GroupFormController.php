<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class GroupFormController extends Controller
{

    public function GroupFormViewFunction()
    {
        return view('AdminView.Form.groupform');
    }

    public function AddGroupFunction(Request $request)
    {


        $imageName = rand(11111, 99999) . time() . '.' . request()->imagegroup->getClientOriginalExtension();
        request()->imagegroup->move(public_path('image'), $imageName);
        $imageAddress = url('/') . '/' . 'image' . '/' . $imageName;

        Groups::create([
            'Title' => $request->title,
            'ImageAddress'=> $imageAddress,
        ]);

        return view('AdminView.Form.groupform');


    }
    public function DelelteFunction ($id){
        Groups::where('id',$id)->delete();

        $grouplist = Groups::all();
        return view('AdminView.List.grouplist', compact('grouplist'));
    }
}
