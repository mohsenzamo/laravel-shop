<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class GroupUpdateController extends Controller
{
    public function GroupUpdateFunction($id)
    {

        $groupData = Groups::where('id', $id)->get();


        return view('AdminView.Form.groupupdate', compact('groupData'));
    }

    public function update(Request $request)
    {
        $imageAddress = Groups::find($request->id)->ImageAddress;

        if ($request->imagegroup != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->imagegroup->getClientOriginalExtension();
            request()->imagegroup->move(public_path('image'), $imageName);
            $imageAddress = url('/') . '/' . 'image' . '/' . $imageName;
        }
        Groups::where('id', $request->id)->update([
            'Title' => $request->title,
            'ImageAddress' => $imageAddress,
        ]);

        $grouplist = Groups::all();
        return view('AdminView.List.grouplist', compact('grouplist'));
    }

}
