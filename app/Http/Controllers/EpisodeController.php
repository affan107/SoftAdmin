<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $episodes = Episode::latest()->get();
        return view('episodes.index', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('episodes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
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
       
        $episode =  Episode::create($validatedData);

      
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode)
    {
       $episode = Episode::findOrFail($id); // Find the post, or throw 404 if not found
        $episode->delete(); // Delete the record

        return redirect()->route('episodes.index')->with('success', 'Episode deleted successfully!');
    }
}
