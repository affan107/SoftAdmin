<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('companies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'email'   => 'required|string',
            'password'   => 'required|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'cover_image'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'industry'  => 'required|string',
            'country'  => 'required|string',
            'state'  => 'required|string',
            'city'  => 'required|string',
            'primary_address' => 'required| string',
            'secondary' => 'required| string',
            'facebook'   => 'required|string',
            'instagram'   => 'required|string',
            'whatsapp'   => 'required|string',
            'linkedin'   => 'required|string',
            'website'   => 'required|string',
            'description'   => 'required|longtext',
            'no_of_employees'   => 'required|string',
            'status'   => 'required|string',
            'telephone_primary'   => 'required|string',
            'telephone_secondary'   => 'required|string',
            'is_verified' => 'nullable',
        ]);


        Company::create($validatedData);

        return redirect()->route('companies.index')->with('success', 'Comapany created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companies $companies)
    {
        //
    }
}