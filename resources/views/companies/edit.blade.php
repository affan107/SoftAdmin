@extends('layout.app')
@section('content')
    <form class="p-6 rounded-lg shadow-md" method="POST" action="{{ route('companies.update', $company->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- logo and cover image  --}}
        <div class= "mb-4 flex items-center content-center w-full gap-x-3">

            <div class="w-full">
                <label for="logo" class="block text-sm font-bold text-gray-700 mb-1">Logo</label>
                <div class="flex">
                    <img src="{{ asset('storage/' . $company->logo) }}"
                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-10 rounded-xl" />
                    <input type="file" id="logo" name="logo"
                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-auto appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                </div> 
                @error('logo')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="cover_image" class="block text-sm font-bold text-gray-700 mb-1">Cover Image</label>
                <div class="flex">
                    <img src="{{ asset('storage/' . $company->cover_image) }}"
                       class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-10 rounded-xl" />
                    <input type="file" id="image" name="cover_image" value="{{ $company->cover_image }}"
                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-auto appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                </div>
                @error('cover_image')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- Name and email  --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="name" class="block text-sm font-bold text-gray-700 mb-1">Name</label>
                <input type="text" name="name" placeholder="Enter your company's name" autocomplete="off"
                    value="{{ $company->name }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('name')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="email" class="block text-sm font-bold text-gray-700 mb-1">Email</label>
                <input type="email" placeholder="Enter your company's email" autocomplete="new-email"
                    value="{{ $company->email }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Email" name="email" />
                @error('email')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Region --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="country" class="block text-sm font-bold text-gray-700 mb-1">Country</label>
                <select name="country"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="{{ $company->country }}" class="text-gray-200 dark:text-gray-200">
                        {{ $company->country }}
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
                @error('country')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="state" class="block text-sm font-bold text-gray-700 mb-1">State</label>
                <select name="state"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="{{ $company->state }}" class="text-gray-200 dark:text-gray-200">
                        {{ $company->state }}
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
                @error('state')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="city" class="block text-sm font-bold text-gray-700 mb-1">City</label>
                <select name="city"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="{{ $company->city }}" class="text-gray-200 dark:text-gray-200">
                        {{ $company->city }}
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
                @error('city')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- Address --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="primary_address" class="block text-sm font-bold text-gray-700 mb-1">Primary Address</label>
                <input type="text" id="primary_address" name="primary_address" placeholder="Enter your primary address"
                    value="{{ $company->primary_address }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('primary_address')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full"> <label for="email" class="block text-sm font-bold text-gray-700 mb-1">Secondary
                    Address</label>
                <input type="text" id="secondary_address" name="secondary_address"
                    value="{{ $company->secondary_address }}" placeholder="Enter your secondary address"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('secondary_address')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- social --}}
        <div class="mb-4 flex items-center content-centerw-full gap-x-3">
            <div class="w-full">
                <label for="whatsapp" class="block text-sm font-bold text-gray-700 mb-1">
                    WhatsApp <i class="fa-brands fa-whatsapp"></i>
                </label>
                <input type="text" id="whatsaqpp" name="whatsapp" placeholder="Enter your Whatsapp number"
                    value="{{ $company->whatsapp }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
            </div>
            <div class="w-full">
                <label for="facebook" class="block text-sm font-bold text-gray-700 mb-1">Facebook <i
                        class="fa-brands fa-facebook"></i></label>
                <input type="text" id="facebook" name="facebook" placeholder="Enter your facebook url"
                    value="{{ $company->facebook }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('facebook')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="instagram" class="block text-sm font-bold text-gray-700 mb-1">Instagram <i
                        class="fa-brands fa-instagram"></i></label>
                <input type="instagram" id="instagram" name="instagram" placeholder="Enter your instgram url"
                    value="{{ $company->instagram }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('instagram')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="linkedin" class="block text-sm font-bold text-gray-700 mb-1">LinkedIn <i
                        class="fa-brands fa-linkedin"></i></label>
                <input type="linkedin" id="linkedin" name="linkedin" placeholder="Enter your linkedin url"
                    value="{{ $company->linkedin }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('linkedin')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="website" class="block text-sm font-bold text-gray-700 mb-1">Website
                    Url</label>
                <input type="website" id="website" name="website" placeholder="Enter your website url"
                    value="{{ $company->website }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('website')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="no_of_employees" class="block text-sm font-bold text-gray-700 mb-1">No. of
                    Employees</label>
                <select name="no_of_employees"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="{{ $company->no_of_employees }}">
                        {{ $company->no_of_employees }}
                    </option>
                    <option value="2-10">
                        2-10
                    </option>
                    <option value="10-50">
                        10-50
                    </option>
                    <option value="50-500">
                        50-500
                    </option>
                    <option value="1K+">
                        1K+
                    </option>
                </select>
                @error('no_of_employees')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- contact --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="telephone_primary" class="block text-sm font-bold text-gray-700 mb-1">Primary
                    Telephone</label>
                <input type="tel" id="telephone_primary" name="telephone_primary"
                    placeholder="Enter your telephone number" value="{{ $company->telephone_primary }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('telephone_primary')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full"> <label for="telephone_secondary"
                    class="block text-sm font-bold text-gray-700 mb-1">Secondary Telephone (Optional)</label>
                <input type="tel" id="telephone_secondary" name="telephone_secondary"
                    value="{{ $company->telephone_secondary }}"
                    placeholder="Enter your secondaery telephone number (optional)"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('telephone_secondary')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- industry and status --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="status" class="block text-sm font-bold text-gray-700 mb-1">Industry</label>
                <select name="industry"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="{{ $company->industry }}">
                        {{ $company->industry }}
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
                @error('industry')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="status" class="block text-sm font-bold text-gray-700 mb-1">Status</label>
                <select name="status"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option vvalue="{{ $company->status }}">
                        {{ $company->status }}
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
                    <option value="Deleted">
                        Deleted
                    </option>
                </select>
                @error('status')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- Description --}}
        <div class="w-full"> <label for="description"
                class="block text-sm font-bold text-gray-700 mb-1">Description</label>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <textarea id="description" name="description" rows="6" value="{{ $company->description }}"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Enter your company's description"> {{ $company->description }}
            </textarea>
                @error('description')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- Terms and Condition verification --}}
        <div class="mb-4 md:justify-between flex">
            <div>
                <div class="flex">
                    <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="terms">
                        I agree the <a href="#" class="font-bold text-slate-700">Terms and Conditions</a>
                    </label>
                </div>
                <input id="terms" type="checkbox" value="" />
            </div>
            <div>
                <div class="flex">
                    <label for="is_verified" class="block text-sm font-bold text-gray-700 mb-1">Verified</label>
                    <small class="mx-2 mt-1 text-xs">(If you check this box the company will be auto verified.)</small>
                </div>
                <input type="checkbox" id="is_verified" name="is_verified" value="1" {{ old('is_verified', $company->is_verified) ? 'checked' : '' }} />
                @error('is_verified')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- submit button --}}
        <button type="submit"
            class="mt-auto inline-block w-10px px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
            Save Company
        </button>
    </form>
@endsection
