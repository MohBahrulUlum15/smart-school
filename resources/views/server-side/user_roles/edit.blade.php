@extends('server-side.layouts.server-app')
@section('title', 'Edit Data User Roles | SMART-School')
@section('main-content')

    <style>
        input[readonly] {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Edit User Roles</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">User Roles</li>
                    <li class="breadcrumb-item active">Edit User Roles</li>
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
                            <form class="row g-3" action="{{ route('user-roles.update', $dataReal->id) }}"
                                enctype="multipart/form-data" method="post" autocomplete="off">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="id" value="{{ $dataReal->id }}">

                                <div class="col-6">
                                    <label for="role_id" class="form-label">*Roles</label>
                                    <select name="role_id" id="role_id" class="form-select text-center" required>
                                        <option value="" disabled selected id="ktgtest">~ pilih Roles ~</option>
                                        @forelse ($roles as $data)
                                            <option value="{{ $data->id }}" disabled
                                                {{ $dataReal->role_id == $data->id ? 'selected' : '' }}>
                                                {{ $data->name }}
                                            </option>
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
                                            <option value="{{ $data->id }}" disabled
                                                {{ $dataReal->master_id == $data->id ? 'selected' : '' }}>
                                                {{ $data->name }}
                                            </option>
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
                                        <option value="1" {{ $dataReal->create == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $dataReal->create == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Read</label>
                                    <select name="read" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1" {{ $dataReal->read == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $dataReal->read == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Update</label>
                                    <select name="update" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1" {{ $dataReal->update == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $dataReal->update == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="form-label">*Delete</label>
                                    <select name="delete" class="form-select text-center" required>
                                        <option value="" disabled selected>~ Pilih ~</option>
                                        <option value="1" {{ $dataReal->delete == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $dataReal->delete == 0 ? 'selected' : '' }}>No</option>
                                    </select>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        const checkboxJuri = document.getElementById('inputRoleJuri');
        const checkboxAdmin = document.getElementById('inputRoleAdmin');

        checkboxJuri.addEventListener('change', function() {
            if (this.checked) {
                checkboxAdmin.checked = false;
            }
        });

        checkboxAdmin.addEventListener('change', function() {
            if (this.checked) {
                checkboxJuri.checked = false;
            }
        });
    </script>
@endpush
