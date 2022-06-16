<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register;

class RegisteredController extends Controller
{
    public function index()
    {
        return view('registered');
    }

    public function ReisterUser(Request $req)
    {
        $req->validate([
            'first name'=>'required',
            'last name'=>'required',
            'email'=>'required|email|unique:registers',
            'password'=>'required',
            'password conf'=>'required'
        ]);

            $register = new user();
            $register-> Full_Name = $req ['Full_Name'];
            $register-> Last_Name = $req ['LastName'];
            $register-> Email = $req ['Email'];
            $register-> Password = $req ['Password'];
            $register-> Password_Confirmation = $req ['Password_Confirmation'];
            $res = $register-> save();

            if($res)
            {
                return back()->with('success', 'you have registere susscesful');

            }
            else{
                return back()->with('fail', 'something wrong');
            }


    }
}
