@extends('layouts.dashboard')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        @if($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
            {{ $errors->first() }}
        </div>
        @endif
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded focus:outline-none" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded focus:outline-none" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">Login</button>
        </form>
    </div>
</div>
@endsection