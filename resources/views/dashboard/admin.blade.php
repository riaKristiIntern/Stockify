@extends('layout.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}! This is your admin dashboard.</p>
    <!-- Tambahkan konten khusus untuk admin -->
</div>
@endsection