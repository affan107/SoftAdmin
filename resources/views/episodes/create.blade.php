@extends('layout.app')
@section('content')
    <form class="p-6 rounded-lg shadow-md" method="POST" action="{{ route('episodes.store') }}" enctype="multipart/form-data">
        @csrf
 {{-- Multiple images  --}}
        <div class= "mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">

                <label for="imageUpload" class="block text-sm font-bold text-gray-700 mb-1">Select Images: </label>
                <input type="file" id="imageUpload" name="images[]" multiple
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('logo')
                    <span class="text-red-700 text-xs">
                        {{ $message }} </span>
                @enderror
            </div>
        </div>

        {{-- Name and email  --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="title" class="block text-sm font-bold text-gray-700 mb-1">Title</label>
                <input type="text" name="title" placeholder="Enter your episode's title"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('title')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full">
                <label for="episode_no" class="block text-sm font-bold text-gray-700 mb-1">Episode No.</label>
                <input type="text" placeholder="Enter the episode number"  name="episode_no"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    />
                @error('episode_no')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- YT link & Type --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="yt_link" class="block text-sm font-bold text-gray-700 mb-1">YT-link</label>
                <input type="url" id="yt_link" name="yt_link" placeholder="Enter the youtube link"
                    autocomplete="new-password"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('yt_link')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full">
                <label for="type" class="block text-sm font-bold text-gray-700 mb-1">Type</label>
                <select name="type"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="" class="text-gray-700 dark:text-gray-700">
                        Select the type
                    </option>
                    <option value="Travel Videos">
                        Travel Videos
                    </option>
                    <option value="Infotainment">
                        Infotainment
                    </option>
                    <option value="Pranks">
                        Pranks
                    </option>
                    <option value="Vlogs">
                        Vlogs
                    </option>

                </select>
                @error('type')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
           {{-- status, quotes, duration --}}
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <label for="status" class="block text-sm font-bold text-gray-700 mb-1">Status</label>
                <select name="status"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                    <option value="" class="text-gray-700 dark:text-gray-700">
                        Select the status
                    </option>
                    <option value="Published">
                        Published
                    </option>
                    <option value="Recorded">
                        Recorded
                    </option>
                    <option value="In-Edit">
                        In Edit
                    </option>
                   
                </select>
                @error('status')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
             <div class="w-full">
                <label for="quotes" class="block text-sm font-bold text-gray-700 mb-1">Quotes</label>
                <input type="text" name="quotes" placeholder="Enter some quotes..."
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('quotes')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
              <div class="w-full">
                <label for="duration" class="block text-sm font-bold text-gray-700 mb-1">Duration</label>
                <input type="text" name="duration" placeholder="Enter the time duration of episode"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" />
                @error('quotes')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>

        </div>
        {{-- Description --}}
        <div class="w-full"> <label for="description"
                class="block text-sm font-bold text-gray-700 mb-1">Description</label>
        </div>
        <div class="mb-4 flex items-center content-center w-full gap-x-3">
            <div class="w-full">
                <textarea id="description" name="description" rows="6"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Episode's description"></textarea>
                @error('description')
                    <span class="text-red-700 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        {{-- submit button --}}
        <button type="submit" id="submit-button"
            class="mt-auto inline-block w-10px px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
            Save
        </button>
    </form>
@endsection

