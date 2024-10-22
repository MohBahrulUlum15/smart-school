@extends('server-side.layouts.server-app')
@section('title', 'Edit Data Admin | SMART-School')
@section('main-content')

    <style>
        input[readonly] {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Edit Admin</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Edit Admin</li>
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
                            <form class="row g-3" action="{{ route('admin.update', $data->id) }}"
                                enctype="multipart/form-data" method="post" autocomplete="off">
                                @csrf
                                @method('PUT')

                                <div class="col-6">
                                    <label for="inputNis" class="form-label">*NIP</label>
                                    <input type="text" class="form-control" id="inputNis" name="nip"
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')"
                                        value="{{ $data->nip ?? old('nip') }}" />

                                    @error('nip')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="nama" class="form-label">*Nama</label>
                                    <input type="text" class="form-control" id="nama" name="name"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ $data->name ?? old('name') }}" />

                                    @error('name')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputNohp" class="form-label">*Nomor Handphone</label>
                                    <input type="text" class="form-control" id="inputNohp" name="phone"
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')"
                                        value="{{ $data->phone ?? old('phone') }}" />

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
                                        @forelse ($sekolah as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->sekolah_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
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
