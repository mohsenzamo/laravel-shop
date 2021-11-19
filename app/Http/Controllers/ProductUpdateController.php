<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductUpdateController extends Controller
{

    public function ProductUpdateFunction($id)
    {

        $ProductData = Products::where('id', $id)->get();
        $ProductAll = Groups::all();

        return view('AdminView.Form.productupdate', compact('ProductData','ProductAll'));
    }

    public function update(Request $request)
    {
        $imageAddress_1 = Products::find($request->id)->ImageAddress_1;

        if ($request->imageproduct_1 != null) {
            $imageName_1 = rand(11111, 99999) . time() . '.' . request()->imageproduct_1->getClientOriginalExtension();
            request()->imageproduct_1->move(public_path('image'), $imageName_1);
            $imageAddress_1 = url('/') . '/' . 'image' . '/' . $imageName_1;
        }


        $imageAddress_2 = Products::find($request->id)->ImageAddress_2;

        if ($request->imageproduct_2 != null) {
            $imageName_2 = rand(11111, 99999) . time() . '.' . request()->imageproduct_2->getClientOriginalExtension();
            request()->imageproduct_2->move(public_path('image'), $imageName_2);
            $imageAddress_2 = url('/') . '/' . 'image' . '/' . $imageName_2;
        }


        $imageAddress_3 = Products::find($request->id)->ImageAddress_3;

        if ($request->imageproduct_3 != null) {
            $imageName_3 = rand(11111, 99999) . time() . '.' . request()->imageproduct_3->getClientOriginalExtension();
            request()->imageproduct_3->move(public_path('image'), $imageName_3);
            $imageAddress_3 = url('/') . '/' . 'image' . '/' . $imageName_3;
        }


        $imageAddress_4 = Products::find($request->id)->ImageAddress_4;

        if ($request->imageproduct_4 != null) {
            $imageName_4 = rand(11111, 99999) . time() . '.' . request()->imageproduct_4->getClientOriginalExtension();
            request()->imageproduct_4->move(public_path('image'), $imageName_4);
            $imageAddress_4 = url('/') . '/' . 'image' . '/' . $imageName_4;
        }


        Products::where('id', $request->id)->update([
            'Name' => $request->name,
            'Title' => $request->title,
            'Cat' => $request->cat,
            'Price' => $request->price,
            'ImageAddress_1'=> $imageAddress_1,
            'ImageAddress_2'=> $imageAddress_2,
            'ImageAddress_3'=> $imageAddress_3,
            'ImageAddress_4'=> $imageAddress_4,
        ]);

        $productlist = Products::all();
        return view('AdminView.List.productlist', compact('productlist'));
    }

}
