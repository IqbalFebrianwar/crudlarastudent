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
        <div class="mt-5">
            <div class="container">
                <div class="col">
                    <h2>Selamat Datang!</h2>
                    <h2>Crud Data Mahasiswa</h2>
                    <a href="{{ url('create') }}" class="btn btn-primary mt-5">Tambah Mahasiswa</a>
                </div>
            </div>
            <div class="container text-center">
                <div class="row mt-5">

                    <div class="col">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Fakultas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                @foreach ($data as $dataMahasiswa)
                                    <tr>
                                        <td scope="col">{{ $dataMahasiswa->nim }}</td>
                                        <td scope="col">{{ $dataMahasiswa->nama }}</td>
                                        <td scope="col">{{ $dataMahasiswa->tahun }}</td>
                                        <td scope="col">{{ $dataMahasiswa->fakultas }}</td>
                                        <td scope="col">{{ $dataMahasiswa->jurusan }}</td>
                                        <td scope="col">{{ $dataMahasiswa->kelas }}</td>
                                        <td class="col">
                                            <a href="{{ url('/show/' . $dataMahasiswa->id) }}"
                                                class="btn btn-warning">Edit</a>
                                        </td>
                                        <td class="col">
                                            <a href="{{ url('/destroy/' . $dataMahasiswa->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
