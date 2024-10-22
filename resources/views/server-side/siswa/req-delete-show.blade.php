@extends('server-side.layouts.server-app')
@section('title', 'Edit Data Siswa | SMART-School')
@section('main-content')

    <style>
        input[readonly] {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Edit Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Siswa</li>
                    <li class="breadcrumb-item active">Edit Siswa</li>
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
                            <form class="row g-3" action="{{ route('siswa.reqdelete.destroy', $data->id) }}"
                                enctype="multipart/form-data" method="post" autocomplete="off">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="siswa_id" value="{{ $data->siswa_id }}">

                                <div class="col-6">
                                    <label for="inputNis" class="form-label">*NIS</label>
                                    <input type="text" class="form-control" id="inputNis" name="nis"
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')"
                                        value="{{ $data->nis ?? old('nis') }}" />

                                    @error('nis')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="nama" class="form-label">*Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ $data->nama ?? old('nama') }}" />

                                    @error('nama')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputTempatlahir" class="form-label">*Tempat Lahir</label>
                                    <input type="text" class="form-control" id="inputTempatlahir" name="tempat_lahir"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ $data->tempat_lahir ?? old('tempat_lahir') }}" />

                                    @error('tempat_lahir')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputTTL" class="form-label">*Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="inputTTL" name="tanggal_lahir"
                                        value="{{ $data->tanggal_lahir ?? old('tanggal_lahir') }}" />
                                    @error('tanggal_lahir')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputNohp" class="form-label">*Nomor Handphone</label>
                                    <input type="text" class="form-control" id="inputNohp" name="no_telp"
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')"
                                        value="{{ $data->no_telp ?? old('no_telp') }}" />

                                    @error('no_telp')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputAlamat" class="form-label">*Alamat</label>
                                    <input type="text" class="form-control" id="inputAlamat" name="alamat"
                                        value="{{ $data->alamat ?? old('alamat') }}" />

                                    @error('alamat')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label class="form-label">*Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih Jenis Kelamin ~</option>
                                        <option value="L" {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="P" {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">*Agama</label>
                                    <select name="agama" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih Agama ~</option>
                                        <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam
                                        </option>
                                        <option value="Kristen Protestan"
                                            {{ $data->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan
                                        </option>
                                        <option value="Kristen Katholik"
                                            {{ $data->agama == 'Kristen Katholik' ? 'selected' : '' }}>Kristen Katholik
                                        </option>
                                        <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                                        </option>
                                        <option value="Budha" {{ $data->agama == 'Budha' ? 'selected' : '' }}>Budha
                                        </option>
                                        <option value="Konghucu" {{ $data->agama == 'Konghucu' ? 'selected' : '' }}>
                                            Konghucu</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="inputAyah" class="form-label">*Nama Ayah</label>
                                    <input type="text" class="form-control" id="inputAyah" name="nama_ayah"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ $data->nama_ayah ?? old('nama_ayah') }}" />

                                    @error('nama_ayah')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputIbu" class="form-label">*Nama Ibu</label>
                                    <input type="text" class="form-control" id="inputIbu" name="nama_ibu"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ $data->nama_ibu ?? old('nama_ibu') }}" />

                                    @error('nama_ibu')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-4">
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

                                <div class="col-4">
                                    <label for="ktgBarang" class="form-label">*Jurusan</label>
                                    <select name="jurusan_id" id="id_kategori" class="form-select text-center" required>
                                        <option value="" disabled selected id="ktgtest">~ pilih Jurusan ~</option>
                                        @forelse ($jurusan as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->jurusan_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @empty
                                            <option value="">~ belum ada data Jurusan ~</option>
                                            <script>
                                                document.getElementById('ktgtest').remove();
                                            </script>
                                        @endforelse
                                    </select>
                                    @error('jurusan_id')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-4">
                                    <label class="form-label">*Kelas</label>
                                    <select name="kelas" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih Kelas ~</option>
                                        <option value="X" {{ $data->kelas == 'X' ? 'selected' : '' }}>X</option>
                                        <option value="XI" {{ $data->kelas == 'XI' ? 'selected' : '' }}>XI</option>
                                        <option value="XII" {{ $data->kelas == 'XII' ? 'selected' : '' }}>XII</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        value="{{ old('foto') }}" />

                                    @error('foto')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-danger">
                                        Delete Now!
                                    </button>
                                    {{-- <button type="reset" class="btn btn-secondary">
                                        Reset
                                    </button> --}}
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
