<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use App\Models\zones;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    //
    public function index()
    {
        $zones = Zone::all();
        $userName = auth()->user()->name; 
        return view('zones.index', compact('zones','userName'));
    }



    
    public function create()
    {
        // $companies = Company::select('id', 'name')->get();
        // $sample = Sample::select('id', 'name')->get();
        $userName = auth()->user()->name; 
        return view('zones.create',compact('userName'));
    }
     // Store a new zone
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'area' => 'nullable|string',
         ]);
 
         Zone::create([
             'name' => $request->name,
             'area' => $request->area,
             'user_id' => Auth::user()->id,
         ]);
 
         return redirect()->route('zones.index')->with('success', 'Zone created successfully.');
     }
 
     // Show edit form
     public function edit($id)
     {
         $zone = Zone::findOrFail($id);
         $userName = auth()->user()->name; 
         return view('zones.edit', compact('zone','userName'));
     }
 
     // Update a zone
     public function update(Request $request, $id)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'area' => 'nullable|string',
         ]);
 
         $zone = Zone::findOrFail($id);
         $zone->update([
             'name' => $request->name,
             'area' => $request->area,
             'user_id' => Auth::user()->id,
         ]);
 
         return redirect()->route('zones.index')->with('success', 'Zone updated successfully.');
     }
 
     // Delete a zone
     public function destroy($id)
     {
         $zone = Zone::findOrFail($id);
         $zone->delete();
 
         return redirect()->route('zones.index')->with('success', 'Zone deleted successfully.');
     }
}

