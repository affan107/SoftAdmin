@extends('layout.app')
@section('content')
    <div class="mr-4 flex justify-end items-right content-right">
        <a href="{{ route('companies.create') }}"
            class="inline-block w-10px px-6 py-3 mt-2 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
            Create Company
        </a>
    </div>
    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
        <thead class="align-bottom">
            <tr>
                <th
                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Name</th>
                <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Industry</th>
                <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Status</th>
                <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Strength</th>
                <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Actions</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($companies as $company)
                <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div>
                                <img src="{{ asset('storage/' . $company->logo) }}"
                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal">{{ $company->name }}</h6>
                                <p class="mb-0 text-xs leading-tight text-slate-400">{{ $company->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $company->industry }}</p>
                        <p class="mb-0 text-xs leading-tight text-slate-400">{{ $company->city }}</p>
                    </td>
                    <td
                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span
                            class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $company->status }}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span
                            class="text-xs font-semibold leading-tight text-slate-400">{{ $company->no_of_employees }}</span>
                    </td>
                    <td
                        class="p-2 justify-items-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex items-center px-2 py-1  gap-3">
                            <div>
                                <a href="{{ route('companies.show', $company->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('companies.edit', $company->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i></a>
                            </div>
                            <div>
                                <form method="POST" action="{{ route('companies.destroy', $company->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="pl-6 justify-items-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      N/A
                    </td>
                    <td class="p-2 justify-items-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        N/A
                    </td>
                    <td class="p-2 justify-items-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                       <div class="justify-items-center">
                        N/A
                    </div> 
                    </td>
                    <td class="p-2 justify-items-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                       <div class="justify-items-center">
                        N/A
                    </div> 
                    </td>
                    <td class="p-2 justify-items-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                       <div class="justify-items-center">
                        N/A
                    </div> 
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <br> <br>
@endsection
