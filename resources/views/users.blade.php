@extends('template')

@section('konten')
    
<div class="container mt-4">
    <div class="row">
        <div class="col-4">
            <h1>Selamat datang, {{ $username }}</h1>
            <div class="card" style="width: 10rem;">
                <div class="card-img-top mt-2">
                    <h1>{{ $countUser }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text isi-card">Pegawai</p>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div style="float: right" class="mb-2">
                <a href="/add-pegawai"><button class="btn btn-success">Tambah Pegawai</button></a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No .</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Email Pegawai</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/edit-pegawai/{{ $user->id }}"><button class="btn btn-info">update</button></a>
                                <a href="/delete-pegawai/{{ $user->id }}"><button class="btn btn-danger">delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection