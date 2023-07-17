@extends('template')

@section('konten')
<div class="container mt-4">
        <form action="/update" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-6">
                    <div class="card" style="width: 100%;">
                        <div class="card-img-top mt-2">
                            <h1>Data Pelanggan</h1>
                        </div>
                        <input type="hidden" name="id" value="{{ $cucian->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pelanggan" name="nama_pel" value="{{ $cucian->pelanggan->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Handphone</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor HP" name="hp_pel" value="{{ $cucian->pelanggan->no_hp }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Pelanggan" name="alamat_pel" value="{{ $cucian->pelanggan->alamat }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="width: 100%;">
                        <div class="card-img-top mt-2">
                            <h1>Data Cucian</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Berat Pakaian</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Berat Pakaian" name="berat" value="{{ $cucian->berat_pakaian }}">
                                <small id="emailHelp" class="form-text text-muted">Inputan Hanya Berupa Angka</small>
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