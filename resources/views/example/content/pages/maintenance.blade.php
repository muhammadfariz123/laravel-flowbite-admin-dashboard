@extends('example.layouts.default.main')
@section('content')
<div class="flex flex-col justify-center items-center px-6 mx-auto h-screen xl:px-0">
    <div class="block mb-5 md:max-w-md">
        <img src="{{ asset('static/images/illustrations/maintenance.svg') }}" alt="maintenance image">
    </div>
    <div class="text-center xl:max-w-4xl">
        <h1 class="mb-3 text-2xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Under Maintenance</h1>
        <p class="mb-5 text-base font-normal text-gray-500 md:text-lg">Sorry for the inconvenience but we’re performing some maintenance at the moment. If you need to you can always <a href="#" class="text-primary-700 hover:underline">contact us</a>, otherwise we’ll be back online shortly!.</p>
        <a href="{{ url('/') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-3">
            <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Go back home
        </a>
    </div>
</div>
@endsection
