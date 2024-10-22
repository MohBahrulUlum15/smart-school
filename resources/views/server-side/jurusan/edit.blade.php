@extends('server-side.layouts.server-app')
@section('title', 'Edit Data Jurusan | SMART-School')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Edit Jurusan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Jurusan</li>
                    <li class="breadcrumb-item active">Edit Jurusan</li>
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
                            <form class="row g-3" action="{{ route('jurusan.update', $data->id) }}"
                                enctype="multipart/form-data" method="post" autocomplete="off">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label for="inputJurusan" class="form-label">*Nama Jurusan</label>
                                    <input type="text" class="form-control" id="inputJurusan" value="{{ $data->name }}"
                                        name="name" />

                                    @error('name')
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
