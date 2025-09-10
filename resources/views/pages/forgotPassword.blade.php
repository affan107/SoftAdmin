@extends('layout.auth')
@section('authContent')
    <form role="form" method="POST" action="{{ route('authenticateUser') }}">
        @csrf

        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Your Email:</label>
        <div class="mb-4">

            {{-- <input type="email" value="{{$user->email}}"
                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon" />
           
        </div> --}}
        <div class="mb-4">
            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">New Password</label>
            <input type="password"
                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                placeholder="Password" aria-label="Password" name="password" aria-describedby="password-addon" />
        </div>
        <div class="mb-4">
            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Confirm Password</label>
            <input type="password"
                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                placeholder="Password" aria-label="Password" name="password" aria-describedby="password-addon" />
        </div>
        <div class="ml-3 text-sm">
            <label for="newsletter" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
                    class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and
                    Conditions</a></label>
        </div>
        <div class="text-center">
            <button type="submit"
                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                Reset Password
            </button>
        </div>

    </form>
@endsection
