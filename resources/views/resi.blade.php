@extends('template')

@section('konten')
    
<div class="container mt-4">
    <div class="row">
        <div class="col-4">
            <h1>Selamat datang, {{ $user->name }}</h1>
            <div class="card" style="width: 10rem;">
                <div class="card-img-top mt-2">
                    <h1>{{ $resi }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text isi-card">Cucian</p>
                </div>
            </div>
        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No .</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Berat Pakaian</th>
                    <th scope="col">Harga/KG</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($allResi as $resi)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $resi->pelanggan->nama }}</td>
                            <td>{{ $resi->berat_pakaian }} KG</td>
                            <td>Rp. 2000</td>
                            <td>Rp. {{ $resi->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection