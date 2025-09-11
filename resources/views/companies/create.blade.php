@extends('layout.app')
@section('content')
    <form class="p-6 rounded-lg shadow-md" method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data" >
        @csrf

        {{-- logo and cover image  --}}
        <div class= "mb-4 flex items-center content-center w-full gap-x-3" >
            <div class="w-full">

                <label for="logo" class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
                <input type="file" id="logo" name="logo"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Cover Image</label>
                <input type="file" id="image" name="image"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        {{-- Name and email  --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" placeholder="Enter your company's name"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" placeholder="Enter your company's email"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon" />
            </div>
        </div>
        {{-- Password --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter a password"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" id="password" name="password" placeholder="Re-enter your password"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        {{-- Region --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                <select name="country"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="" class="text-gray-200 dark:text-gray-200">
                        select the country
                    </option>
                    <option value="Pakistan">
                        Pakistan
                    </option>
                    <option value="Afghanistan">
                        Afghanistan
                    </option>
                    <option value="Bangladesh">
                        Bangladesh
                    </option>
                    <option value="Turkey">
                        Turkey
                    </option>

                </select>
            </div>
            <div class="w-full">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-1">State</label>
                <select name="state"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="" class="text-gray-200 dark:text-gray-200">
                        select the state
                    </option>
                    <option value="Punjab">
                        Punjab
                    </option>
                    <option value="Sindh">
                        Sindh
                    </option>
                    <option value="Gilgit">
                        Gilgit
                    </option>
                    <option value="Balochistan">
                        Balochistan
                    </option>
                </select>
            </div>
            <div class="w-full">
                <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                <select name="city"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="" class="text-gray-200 dark:text-gray-200">
                        select the city
                    </option>
                    <option value="Lahore">
                        Lahore
                    </option>
                    <option value="Karachi">
                        Karachi
                    </option>
                    <option value="Gujrat">
                        Gujrat
                    </option>
                    <option value="Bhawalpur">
                        Bhawalpur
                    </option>
                </select>
            </div>
        </div>
        {{-- Address --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="primary_address" class="block text-sm font-medium text-gray-700 mb-1">Primary Address</label>
                <input type="text" id="primary_address" name="primary_address" placeholder="Enter your primary address"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full"> <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Secondary
                    Address</label>
                <input type="text" id="secondary_address" name="secondary_address"
                    placeholder="Enter your secondary address"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        {{-- social --}}
        <div class="mb-4 flex items-center content-centerw-full gap-x-3">
            <div class="w-full">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Whatsapp</label>
                <input type="text" id="whatsaqpp" name="whatsapp" placeholder="Enter your whatsapp channel if any..."
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="facebook" class="block text-sm font-medium text-gray-700 mb-1">facebook</label>
                <input type="text" id="facebook" name="facebook" placeholder="Enter your facebook url"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="instagram" class="block text-sm font-medium text-gray-700 mb-1">Instagram</label>
                <input type="instagram" id="instagram" name="instagram" placeholder="Enter your instgram url"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label>
                <input type="linkedin" id="linkedin" name="linkedin" placeholder="Enter your linkedin url"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website
                    Url</label>
                <input type="website" id="website" name="website" placeholder="Enter your website url"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="employee" class="block text-sm font-medium text-gray-700 mb-1">No. of
                    Employees</label>
                <input type="employee" id="employee" name="employee" placeholder="Enter your employee strength"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        {{-- contact --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="telephone_primary" class="block text-sm font-medium text-gray-700 mb-1">Telephone</label>
                <input type="text" id="telephone_primary" name="telephone_primary"
                    placeholder="Enter your telephone number"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full"> <label for="telephone_secondary"
                    class="block text-sm font-medium text-gray-700 mb-1">Mobile</label>
                <input type="text" id="telephone_secondary" name="telephone_secondary"
                    placeholder="Enter your mobile number"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
        </div>
        {{-- industry and status --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
           <div class="w-full">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Industry</label>
                <select name="Industry"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="">
                        select the industry
                    </option>
                    <option value="IT">
                        IT 
                    </option>
                    <option value="Textile">
                        Textile
                    </option>
                    <option value="Sugar">
                        Sugar
                    </option>

                </select>
            </div>
            <div class="w-full">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="">
                        select the status
                    </option>
                    <option value="Published">
                        Published
                    </option>
                    <option value="Draft">
                        Draft
                    </option>
                    <option value="Inactive">
                        Inactive
                    </option>

                </select>
            </div>
        </div>
        {{-- verification --}}
        <div>
            <label for="is_verified" class="block text-sm font-medium text-gray-700 mb-1">Verified</label>
            <input type="checkbox" id="is_verified" name="is_verified" />
        </div>
        {{-- Description --}}
        <div class="w-full"> <label for="description"
                class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <textarea id="description" name="description" rows="6"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Enter your company's description">
                </textarea>
            </div>
        </div>
        {{-- submit button --}}
        <button type="submit"
            class="inline-block w-10px px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
            Submit
        </button>
    </form>
@endsection
