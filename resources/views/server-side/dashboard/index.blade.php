@extends('server-side.layouts.server-app')
@section('title', 'Dashboard | SMART-School')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Dashborad</li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        {{-- @if (Auth::user()->hasRole('Admin')) --}}
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pengguna</h5>
                            <h3 class="card-text">{{ $user }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Siswa</h5>
                            <h3 class="card-text">0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Jurusan</h5>
                            <h3 class="card-text">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection
