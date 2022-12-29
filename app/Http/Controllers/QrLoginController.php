<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class QrLoginController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.QrLogin');
    }

    public function checkUser(Request $request)
    {
        $result =0;

        if($request->data)

        {
            $user = User::where('name',$request->data)->first();

            if ($user)
            {
                Auth::login($user);
                $result=1;
            }

            else 
            {
                $result = 0;
            }
        }

        return $result;
    } 
}
