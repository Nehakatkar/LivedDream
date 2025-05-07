<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Sample;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SampleController extends Controller
{
    //
    public function index()
    {
        $samples = Sample::with('company')->get(); // Assuming you have a relationship 'company' defined in your Sample model
        $userName = auth()->user()->name; 
        return view('sample.index', compact('samples','userName'));
    }


    public function create()
    {
        $companies = Company::select('id', 'name')->get();
        $userName = auth()->user()->name; 
        return view('sample.create',compact('companies','userName'));
    }
    public function store(Request $request)
{
   
    $sample = new Sample();
    $sample->company_id   = $request->company_id;
    $sample->sample_name  = $request->sample_name;
    $sample->sample_cost  = $request->sample_cost ?? 0;
    $sample->length       = $request->length ?? 0;
    $sample->width        = $request->width ?? 0;
    $sample->thickness    = $request->thickness ?? 0;
    $sample->user_id      = Auth::id(); // set logged-in user ID

    // handle image upload
    if ($request->hasFile('image')) {
        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/samples'), $imageName);
        $sample->image = 'uploads/samples/' . $imageName;
    }

    $sample->save();

    return redirect()->route('sample.index')->with('success', 'Sample saved successfully.');
}
public function edit($id)
{
    $sample = Sample::findOrFail($id);
    $companies = Company::all();
    $userName = auth()->user()->name; 
    return view('sample.edit', compact('sample', 'companies','userName'));
}

public function update(Request $request, $id)
{
    $sample = Sample::findOrFail($id);
    $sample->update($request->all());

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images/samples', 'public');
        $sample->image = $imagePath;
        $sample->save();
    }

    return redirect()->route('sample.index')->with('success', 'Sample updated successfully');
}


    // Delete sample
    public function destroy($id)
    {
        $sample = Sample::findOrFail($id);
    
        // Optional: Delete image from storage if exists
        if ($sample->image && Storage::exists('public/' . $sample->image)) {
            Storage::delete('public/' . $sample->image);
        }
    
        $sample->delete();
    
        return redirect()->route('sample.index')->with('success', 'Sample deleted successfully');
    }
  
}
