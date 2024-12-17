@extends('layout.app')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold">Staff Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}! This is your Staff dashboard.</p>
        <!-- Tambahkan konten khusus untuk admin -->
    </div>
@endsection

@extends('example.layouts.default.baseof')
@section('main')
@vite(['resources/css/app.css','resources/js/app.js'])
    @include('example.layouts.partials.navbar-dashboard')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

      @include('example.layouts.partials.sidebar')

      <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main>
          @yield('content')
        </main>
            @include('example.layouts.partials.footer-dashboard')
      </div>
    </div>
@endsection
