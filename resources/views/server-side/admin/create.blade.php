@extends('server-side.layouts.server-app')
@section('title', 'Tambah Data Admin | Skripsi Rindi')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Tambah Admin</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Tambah Admin</li>
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
                            <form class="row g-3" action="{{ route('admin.store') }}" enctype="multipart/form-data"
                                method="post" autocomplete="off">
                                @csrf

                                <div class="col-6">
                                    <label for="inputNip" class="form-label">*NIP</label>
                                    <input type="number" class="form-control" id="inputNis" name="nip" required
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')" value="{{ old('nip') }}" />

                                    @error('nip')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="name" class="form-label">*Nama</label>
                                    <input type="text" class="form-control" id="nama" name="name" required
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('name') }}" />

                                    @error('name')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputNohp" class="form-label">*Nomor Handphone</label>
                                    <input type="text" class="form-control" id="inputNohp" name="phone" required
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')" value="{{ old('phone') }}" />

                                    @error('phone')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="ktgBarang" class="form-label">*Sekolah</label>
                                    <select name="sekolah_id" id="id_kategori" class="form-select text-center" required>
                                        <option value="" disabled selected id="ktgtest">~ pilih Sekolah ~</option>
                                        @forelse ($sekolah as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @empty
                                            <option value="">~ belum ada data Sekolah ~</option>
                                            <script>
                                                document.getElementById('ktgtest').remove();
                                            </script>
                                        @endforelse
                                    </select>
                                    @error('sekolah_id')
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
