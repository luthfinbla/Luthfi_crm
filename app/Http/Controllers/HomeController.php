<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('login');
        return view('homepage');
        return view('project');
        $leads = Lead::all();
        return view('homepage', compact('leads'));
    }

    public function homepage()
    {
        $leads = Lead::all(); // Ambil semua data leads
        return view('homepage', compact('leads')); // Kirim data ke view
        
    }

}