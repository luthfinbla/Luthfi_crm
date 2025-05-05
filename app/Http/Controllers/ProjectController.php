<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Lead;

class ProjectController extends Controller
{
    public function create($leadId)
    {
        $lead = Lead::findOrFail($leadId);

        return view('project', compact('lead'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lead_id' => 'required|exists:leads,id',
            'product' => 'required',
            'details' => 'nullable|string',
        ]);

        Project::create([
            'lead_id' => $request->lead_id,
            'product' => $request->product,
            'details' => $request->details,
        ]);

        $status = strpos(strtolower($request->details), 'fix') !== false ? 'Disetujui' : 'Menunggu Approval Manager';

        $project = new Project();
        $project->lead_id = $request->lead_id;
        $project->product = $request->product;
        $project->details = $request->details;
        $project->status = $status;
        $project->save();

        return redirect()->route('leads.index')->with('success', 'Project berhasil diajukan dan menunggu approval.');
    }

    public function show($id)
    {
        $project = Project::with('lead')->findOrFail($id);
        return view('project.show', compact('project'));
    }
}