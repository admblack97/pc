@extends('depan.layout.master')
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="PC/gambar/logo.png" alt="First slide">
            </div>
        </div>
    </div>

    <p class="harga">Rp xx.xxx.xxx,-</p>
    <table class="table table-striped table-dark" style=" max-width: 800px; margin-left: 350px; margin-top: 63px;">
        <thead>
            <tr>
            <th style="font-size: 24px;">SPESIFIKASI TEKNIK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Market Segment</td>
                <td>Desktop</td>
            </tr>
        </tbody>
    </table>

    <p class="stok">Stok : </p>
    <div class="tombol">
        <button class="lanjut"><a href="#" ></a>Lanjut Belanja</button>
        <button class="tambah"><a href="#" ></a>Tambah ke Keranjang</button>
    </div>
@endsection
