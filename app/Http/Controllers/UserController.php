<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('dashboard');
    }


    public function check($var1,  $var2, $var3)
    {


        if (ctype_digit($var1) && ctype_digit($var2) && ctype_digit($var3)) {
            echo (int) $var1 + (int)$var2 + (int)$var3;
        } elseif (
            ctype_digit($var1) == false && ctype_digit($var2) == false  && ctype_digit($var3) == false
        ) {
            echo $var1 . ' ' . $var2 . ' ' . $var3;
        } else {
            echo  'page not found 404';
        }
    }
}
