@extends('layouts.default')

@section('content')
    <nav class="navbar navbar-dark px-5 bg-primary">
        <a class="navbar-brand" href="#">
            <img src="https://img.icons8.com/windows/128/000000/cloudsmith.png" width="32" height="32"
                class="d-inline-block align-top" alt="">
            Kiyomi
        </a>
    </nav>
    <section>
        <div class="container">
            <div class="col mt-3">
                <h2>Edit data mahasiswa</h2>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <form action="{{ url('/update/' . $data->id) }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="gap-0 col-gap-3 grid">
                            <div class="form-group my-2">
                                <label for="nama">NIM*</label>
                                <input type="text" name="nim" class="form-control" placeholder="isi NIM"
                                    value="{{ $data->nim }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="nama">Nama Mahasiswa*</label>
                                <input type="text" name="nama" class="form-control " placeholder="isi nama mahasiswa"
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="nama">Tahun*</label>
                                <input type="text" name="tahun" class="form-control" placeholder="isi tahun masuk"
                                    value="{{ $data->tahun }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="nama">Fakultas*</label>
                                <input type="text" name="fakultas" class="form-control"
                                    placeholder="isi fakultas"value="{{ $data->fakultas }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="nama">Jurusan*</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="isi jurusan"
                                    value="{{ $data->jurusan }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="nama">Kelas*</label>
                                <input type="text" name="kelas" class="form-control" placeholder="isi kelas"
                                    value="{{ $data->kelas }}">
                            </div>
                            <div class="form-group my-5">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="submit" class="btn btn-primary"><a
                                        class="text-white link-offset-2 link-underline link-underline-opacity-0"
                                        href="{{ url('/') }}">Kembali</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
