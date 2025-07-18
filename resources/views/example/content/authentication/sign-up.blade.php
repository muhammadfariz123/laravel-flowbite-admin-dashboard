@extends('example.layouts.default.main')
@section('content')
<div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0">
    <a href="{{ url('/')}}" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10">
        <img src="{{ asset('static/images/logo.svg') }}" class="mr-4 h-11" alt="FlowBite Logo">
        <span>Flowbite</span>
    </a>
    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-gray-900">
            Create a Free Account
        </h2>
        <form class="mt-8 space-y-6" action="#">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="name@company.com" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required>
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-900">I accept the <a href="#" class="text-primary-700 hover:underline">Terms and Conditions</a></label>
                </div>
            </div>
            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto">Create account</button>
            <div class="text-sm font-medium text-gray-500">
                Already have an account? <a href="#" class="text-primary-700 hover:underline">Login here</a>
            </div>
        </form>
    </div>
</div>
@endsection
