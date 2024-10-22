@extends('server-side.layouts.server-app')
@section('title', 'Tambah Data Sekolah | SMART-School')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Tambah Sekolah</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Sekolah</li>
                    <li class="breadcrumb-item active">Tambah Sekolah</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lengkapi data di bawah ini!</h5>
                            <!-- Vertical Form -->
                            <form class="row g-3" action="{{ route('sekolah.store') }}" enctype="multipart/form-data"
                                method="post" autocomplete="off">
                                @csrf
                                <div class="col-6">
                                    <label for="inputSekolah" class="form-label">*Nama Sekolah</label>
                                    <input type="text" class="form-control" id="inputSekolah" name="name" required />

                                    @error('name')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="inputSekolah" class="form-label">*NPSN</label>
                                    <input type="text" class="form-control" id="inputSekolah" name="npsn" required />

                                    @error('npsn')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputSekolah" class="form-label">*Alamat Sekolah</label>
                                    <input type="text" class="form-control" id="inputSekolah" name="alamat" required />

                                    @error('alamat')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Reset
                                    </button>
                                </div>
                            </form>

                            <!-- Vertical Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
