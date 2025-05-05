<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $leads = Lead::where('status', 'Disetujui')->get();
        return view('customer', compact('leads'));
    }
}
