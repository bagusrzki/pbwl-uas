@extends('template')

@section('konten')
    
<div class="container mt-4">
        <form action="/delete-pegawai" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-img-top mt-2">
                            <h1>Edit Data Pegawai</h1>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pegawai</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pegawai" name="nama" value="{{ $user->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-4 mt-2">
                <button class="btn btn-danger btn-block btn-lg" type="submit">Delete</button>
            </div>
        </form>
</div>

@endsection