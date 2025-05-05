<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return redirect('/homepage');
        return redirect('/project');
        return redirect('/produk');
        return redirect('/customer');
    }
}
