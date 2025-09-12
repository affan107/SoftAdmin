<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;




class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = Company::latest()->get();
        return view('companies.index', compact('companies'));
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
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cover_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'industry'  => 'required|string',
            'country'  => 'required|string',
            'state'  => 'required|string',
            'city'  => 'required|string',
            'primary_address' => 'required| string',
            'secondary_address' => 'nullable| string',
            'facebook'   => 'nullable',
            'instagram'   => 'nullable|string',
            'whatsapp'   => 'nullable|string',
            'linkedin'   => 'nullable|string',
            'website'   => 'nullable|string',
            'description'   => 'nullable|string',
            'no_of_employees'   => 'required|string',
            'status'   => 'required|string',
            'telephone_primary'   => 'required|string',
            'telephone_secondary'   => 'nullable|string',
            'is_verified' => 'nullable',
        ]);
        $validatedData['is_verified'] = $request->has('is_verified');
        

          if ($request->hasFile('cover_image')) {
            $validatedData['cover_image'] = $request->file('cover_image')->store('images', 'public');
        }  
          if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('images', 'public');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $company =  Company::create($validatedData);

        User::create(['name' => $company->name,'email' => $company->email,'password' => $company->password,'company_id' => $company->id]);

        return redirect()->route('companies.index')->with('success', 'Comapany created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
         return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
     {
      

        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'email'   => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cover_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'industry'  => 'required|string',
            'country'  => 'required|string',
            'state'  => 'required|string',
            'city'  => 'required|string',
            'primary_address' => 'required| string',
            'secondary_address' => 'nullable| string',
            'facebook'   => 'nullable',
            'instagram'   => 'nullable|string',
            'whatsapp'   => 'nullable|string',
            'linkedin'   => 'nullable|string',
            'website'   => 'nullable|string',
            'description'   => 'nullable|string',
            'no_of_employees'   => 'required|string',
            'status'   => 'required|string',
            'telephone_primary'   => 'required|string',
            'telephone_secondary'   => 'nullable|string',
            'is_verified' => 'nullable',
        ]);

        $validatedData['is_verified'] = $request->has('is_verified');
        
          if ($request->hasFile('cover_image')) {
            $validatedData['cover_image'] = $request->file('cover_image')->store('images', 'public');
        }  
          if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('images', 'public');
        }

        $company->update($validatedData);

        //User::update(['name' => $company->name, 'email' => $company->email]);

        return redirect()->route('companies.index')->with('success', 'Comapany Details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
     {
        $company = Company::findOrFail($id); // Find the post, or throw 404 if not found
        $company->delete(); // Delete the record

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully!');
    }
}