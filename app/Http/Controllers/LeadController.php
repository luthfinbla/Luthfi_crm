<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        Lead::create($request->only(['nama', 'email', 'telepon']));
        return redirect()->route('leads.index')->with('success', 'Customer berhasil ditambahkan!');
    }

    public function index()
    {
        $leads = Lead::with('project')->get();
        return view('homepage', compact('leads'));
    }

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();
        return redirect()->route('homepage')->with('success', 'Calon customer berhasil dihapus.');
    }
}