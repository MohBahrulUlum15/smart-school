@extends('server-side.layouts.server-app')
@section('title', 'Tambah Data User Roles | SMART-School')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Tambah User Roles</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">User Roles</li>
                    <li class="breadcrumb-item active">Tambah User Roles</li>
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
                            <form class="row g-3" action="{{ route('user-roles.store') }}" enctype="multipart/form-data"
                                method="post" autocomplete="off">
                                @csrf
                                {{-- <div class="col-6">
                                    <label for="inputUsername" class="form-label">*Username</label>
                                    <input type="text" class="form-control" id="inputUsername" name="username"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('username') }}" />

                                    @error('username')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6" hidden>
                                    <label for="inputEmail" class="form-label">*Email</label>
                                    <input type="text" class="form-control" id="inputEmail" name="email" />

                                    @error('nis')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div> --}}

                                {{-- <div class="col-6" hidden>
                                    <label for="inputEmail" class="form-label">*Password</label>
                                    <input type="password" class="form-control" id="inputEmail" name="password" />

                                    @error('nis')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div> --}}

                                {{-- <div class="col-6">
                                    <label for="inputNis" class="form-label">*NIS</label>
                                    <input type="text" class="form-control" id="inputNis" name="nis"
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')" value="{{ old('nis') }}" />

                                    @error('nis')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div> --}}

                                {{-- <div class="col-6">
                                    <label for="nama" class="form-label">*Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('nama') }}" />

                                    @error('nama')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div> --}}

                                {{-- <div class="col-6">
                                    <label for="inputTempatlahir" class="form-label">*Tempat Lahir</label>
                                    <input type="text" class="form-control" id="inputTempatlahir" name="tempat_lahir"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('tempat_lahir') }}" />

                                    @error('tempat_lahir')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputNohp" class="form-label">*Nomor Handphone</label>
                                    <input type="text" class="form-control" id="inputNohp" name="no_hp"
                                        oninput="this.value=this.value.replace(/[^0-9]/, '')"
                                        value="{{ old('no_hp') }}" />

                                    @error('no_hp')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputAlamat" class="form-label">*alamat</label>
                                    <input type="text" class="form-control" id="inputAlamat" name="alamat"
                                        value="{{ old('alamat') }}" />

                                    @error('alamat')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputAyah" class="form-label">*Nama Ayah</label>
                                    <input type="text" class="form-control" id="inputAyah" name="nama_ayah"
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
                                    <input type="text" class="form-control" id="inputIbu" name="nama_ibu"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g, '')"
                                        value="{{ old('nama_ibu') }}" />

                                    @error('nama_ibu')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label class="form-label">*Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih Jenis Kelamin ~</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Pria">Wanita</option>
                                    </select>
                                </div> --}}

                                <div class="col-6">
                                    <label for="role_id" class="form-label">*Roles</label>
                                    <select name="role_id" id="role_id" class="form-select text-center" required>
                                        <option value="" disabled selected id="ktgtest">~ pilih Roles ~</option>
                                        @forelse ($roles as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @empty
                                            <option value="">~ belum ada data Roles ~</option>
                                            <script>
                                                document.getElementById('ktgtest').remove();
                                            </script>
                                        @endforelse
                                    </select>
                                    @error('role_id')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="master_id" class="form-label">*Master Data</label>
                                    <select name="master_id" id="master_id" class="form-select text-center" required>
                                        <option value="" disabled selected id="ktgtest">~ pilih Master Data ~
                                        </option>
                                        @forelse ($masters as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @empty
                                            <option value="">~ belum ada data Master ~</option>
                                            <script>
                                                document.getElementById('ktgtest').remove();
                                            </script>
                                        @endforelse
                                    </select>
                                    @error('master_id')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Create</label>
                                    <select name="create" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Read</label>
                                    <select name="read" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Update</label>
                                    <select name="update" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Delete</label>
                                    <select name="delete" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                {{-- <div class="col-6">
                                    <label for="inputTTL" class="form-label">*Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="inputTTL" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir') }}" />
                                    @error('tanggal_lahir')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="foto" class="form-label">*Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        value="{{ old('foto') }}" />

                                    @error('foto')
                                        <strong class="fw-bold d-block text-danger mt-2">
                                            <small>&nbsp;* {{ $message }}</small>
                                        </strong>
                                    @enderror
                                </div> --}}

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
