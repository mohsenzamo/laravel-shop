<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class SingUpController extends Controller
{

    public function SingUpViewFunction()
    {
        return view('ClientView.Auth.singup');
    }

    public function SignUpFunction(Request $request)
    {

        $this->validate($request, [
            'UserName' => 'required|min:3',
            'Password' => 'required|min:6',

        ], [
            'UserName.required' => 'وارد کردن نام کاربری الزامی است',
            'UserName.min'=>'نام کاربری حداقل باید 3 حرف باشد',
            'Password.required' => 'وارد کردن رمز عبور الزامی است',
            'Password.min'=>'رمزعبور حداقل باید 6 حرف/رقم باشد',
        ]);

        Users::create([
            'UserName' => $request->username,
            'Password' => $request->password,
        ]);
        return back()->with('success', true)->with('message', 'ثبت نام شما با موفقیت ثبت شد');
    }
}
