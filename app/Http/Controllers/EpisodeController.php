<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Company;
use App\Models\EpisodeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Storage;


class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $episodes = Episode::with('episodeImages')->latest()->get();
        return view('episodes.index', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('episodes.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'title'  => 'required|string|max:255',
            'episode_no'   => 'required|string',
            'yt_link'   => 'required|string',
            'type'   => 'required|string',
            'status'  => 'required|string',
            'duration'  => 'required|string',
            'quotes'  => 'required|string',
            'description' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'company_id' => 'required|exists:companies,id'
        ]);


        $episode =  Episode::create([
            'title'  => $request->title,
            'episode_no'   => $request->episode_no,
            'yt_link'   => $request->yt_link,
            'type'   => $request->type,
            'status'  => $request->status,
            'duration'  => $request->duration,
            'quotes'  => $request->quotes,
            'description' => $request->description,
            'company_id' => $request->company_id,
        ]);
       
         if ($request->hasFile('images')) {
             foreach ($request->file('images') as $image) {
                $path = $image->store('public/images'); 
                EpisodeImage::create(['image' => $path,'episode_id' => $episode->id]);
            } 
        }

        return redirect()->route('episodes.index')->with('success', 'Episode recorded Succesfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Episode $episode)
    {
        //
        return view('episodes.show', compact('episode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episode $episode)
    {
        //
        return view('episodes.edit', compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode)
    {
        $validatedData = $request->validate([
            'title'  => 'required|string|max:255',
            'episode_no'   => 'required|string',
            'yt_link'   => 'required|string',
            'type'   => 'required|string',
            'status'  => 'required|string',
            'duration'  => 'required|string',
            'quotes'  => 'required|string',
            'description' => 'required|string',
        ]);
 
        $episode->update($validatedData);

        return redirect()->route('episodes.index')->with('success', 'Episode updated Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $episode = Episode::findOrFail($id); // Find the post, or throw 404 if not found
        $episode->delete(); // Delete the record

        return redirect()->route('episodes.index')->with('success', 'Episode deleted successfully!');
    }
}
