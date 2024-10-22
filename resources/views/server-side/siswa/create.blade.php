@extends('server-side.layouts.server-app')
@section('title', 'Tambah Data Siswa | Skripsi Rindi')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Tambah Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Siswa</li>
                    <li class="breadcrumb-item active">Tambah Siswa</li>
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
                            <form class="row g-3" action="{{ route('siswa.store') }}" enctype="multipart/form-data"
                                method="post" autocomplete="off">
                                @csrf

                                <div class="col-6">
                                    <label for="inputNis" class="form-label">*NIS</label>
                                    <input type="number" class="form-control" id="inputNis" name="nis" required
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')" value="{{ old('nis') }}" />

                                    @error('nis')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="nama" class="form-label">*Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('nama') }}" />

                                    @error('nama')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputTempatlahir" class="form-label">*Tempat Lahir</label>
                                    <input type="text" class="form-control" id="inputTempatlahir" name="tempat_lahir"
                                        required oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('tempat_lahir') }}" />

                                    @error('tempat_lahir')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputTTL" class="form-label">*Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="inputTTL" name="tanggal_lahir" required
                                        value="{{ old('tanggal_lahir') }}" />
                                    @error('tanggal_lahir')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputNohp" class="form-label">*Nomor Handphone</label>
                                    <input type="text" class="form-control" id="inputNohp" name="no_telp" required
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')"
                                        value="{{ old('no_telp') }}" />

                                    @error('no_telp')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputAlamat" class="form-label">*Alamat</label>
                                    <input type="text" class="form-control" id="inputAlamat" name="alamat" required
                                        value="{{ old('alamat') }}" />

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
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">*Agama</label>
                                    <select name="agama" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih Agama ~</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen Protestan</option>
                                        <option value="Katolik">Kristen Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="inputAyah" class="form-label">*Nama Ayah</label>
                                    <input type="text" class="form-control" id="inputAyah" name="nama_ayah" required
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('nama_ayah') }}" />

                                    @error('nama_ayah')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputIbu" class="form-label">*Nama Ibu</label>
                                    <input type="text" class="form-control" id="inputIbu" name="nama_ibu" required
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('nama_ibu') }}" />

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

                                <div class="col-4">
                                    <label for="ktgBarang" class="form-label">*Jurusan</label>
                                    <select name="jurusan_id" id="id_kategori" class="form-select text-center" required>
                                        <option value="" disabled selected id="ktgtest">~ pilih Jurusan ~</option>
                                        @forelse ($jurusan as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
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
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="foto" class="form-label">*Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required
                                        value="{{ old('foto') }}" />

                                    @error('foto')
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
