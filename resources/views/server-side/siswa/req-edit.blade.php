@extends('server-side.layouts.server-app')
@section('title', 'Data Siswa | SMART-School')
@section('main-content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Request Edit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Request Edit</li>
                    <li class="breadcrumb-item active">Data Request Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Data Request Edit</h5>
                                    {{-- <a href="{{ route('siswa.create') }}">
                                        <button class="btn btn-success btn-sm">Tambah Siswa</button>
                                    </a> --}}
                                </div>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle me-1"></i> {{ Session::get('message') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle me-1"></i> {{ Session::get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#No</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Pengaturan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $numb++ }}</th>
                                            <td>{{ $item->nis }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                @if ($item->status == 'verified')
                                                    <span class="badge bg-success">{{ $item->status }}</span>
                                                @elseif ($item->status == 'request edit')
                                                    <span class="badge bg-warning">{{ $item->status }}</span>
                                                @elseif ($item->status == 'request delete')
                                                    <span class="badge bg-danger">{{ $item->status }}</span>
                                                @endif
                                            <td>
                                                <a href="{{ route('siswa.reqedit.show', $item->id) }}"
                                                    class="badge bg-success border-0">Lihat Detail</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i> Belum ada data Siswa!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
