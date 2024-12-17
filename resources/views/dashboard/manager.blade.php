@extends('layout.app')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold">Manager Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}! This is your Manager dashboard.</p>
        <!-- Tambahkan konten khusus untuk admin -->
    </div>
@endsection
