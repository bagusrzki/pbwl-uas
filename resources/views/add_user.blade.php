@extends('template')

@section('konten')
    
<div class="container mt-4">
        <form action="/add-pegawai" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-img-top mt-2">
                            <h1>Tambah Pegawai</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pegawai</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pegawai" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Password" name="password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-4 mt-2">
                <button class="btn btn-success btn-block btn-lg" type="submit">Tambah</button>
            </div>
        </form>
</div>

@endsection