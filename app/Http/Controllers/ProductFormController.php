<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductFormController extends Controller
{

    public function ProductFormViewFunction()
    {
        $groupselect = Groups::all();
        return view('AdminView.Form.productform',compact('groupselect'));
    }

    public function AddProductFunction(Request $request)
    {


        $imageName_1 = rand(11111, 99999) . time() . '.' . request()->imageproduct_1->getClientOriginalExtension();
        request()->imageproduct_1->move(public_path('image'), $imageName_1);
        $imageAddress_1 = url('/') . '/' . 'image' . '/' . $imageName_1;

        $imageName_2 = rand(11111, 99999) . time() . '.' . request()->imageproduct_2->getClientOriginalExtension();
        request()->imageproduct_2->move(public_path('image'), $imageName_2);
        $imageAddress_2 = url('/') . '/' . 'image' . '/' . $imageName_2;

        $imageName_3 = rand(11111, 99999) . time() . '.' . request()->imageproduct_3->getClientOriginalExtension();
        request()->imageproduct_3->move(public_path('image'), $imageName_3);
        $imageAddress_3 = url('/') . '/' . 'image' . '/' . $imageName_3;

        $imageName_4 = rand(11111, 99999) . time() . '.' . request()->imageproduct_4->getClientOriginalExtension();
        request()->imageproduct_4->move(public_path('image'), $imageName_4);
        $imageAddress_4 = url('/') . '/' . 'image' . '/' . $imageName_4;

        Products::create([
            'Name' => $request->name,
            'Title' => $request->title,
            'Cat' => $request->cat,
            'Price' => $request->price,
            'ImageAddress_1'=> $imageAddress_1,
            'ImageAddress_2'=> $imageAddress_2,
            'ImageAddress_3'=> $imageAddress_3,
            'ImageAddress_4'=> $imageAddress_4,
        ]);


        $groupselect = Groups::all();
        return view('AdminView.Form.productform',compact('groupselect'));


    }
     public function DelelteFunction ($id){
         Products::where('id',$id)->delete();

         $productlist = Products::all();
         return view('AdminView.List.productlist', compact('productlist'));
     }

}
