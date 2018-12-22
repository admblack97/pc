@extends('depan.layout.master')
@section('content')

    <h3 style="text-align: center; margin-top: 40px;">KERANJANG BELANJA</h3>

    <section id="list">
        <div>
            <img src="PC/gambar/core3_6-7th.png" alt="" style="float:left;">
                <br><br><br><br><br><br>
                <span style="margin-left:10px;">Intel Core i3-6500</span><br>
                <span style="margin-left:10px;">Rp xx.xxx.xxx</span><br>
                <span style="margin-left:10px;">Jumlah :</span><br>      
        </div>
        <div style="clear:left">
            <img src="PC/gambar/core7_6-7th.png" alt="" style="float:left;">
            <br><br><br><br><br><br>
                <span style="margin-left:10px;">Intel Core i7-6500</span><br>
                <span style="margin-left:10px;">Rp xx.xxx.xxx</span><br>
                <span style="margin-left:10px;">Jumlah :</span><br> 
        </div>
    </section>

    <section id="list2">
        <div style="text-align:center">
            <button id="pilihKurir">Pilih Kurir</button>
        </div>
        <div id="bayar">
            <span>Total Harga</span><br>
            <span>Total Ongkos Kirim</span><br>
            <span>Total Biaya Perakitan</span>
            <hr style="border-top:1px solid white;">
            <span>Total Tagihan</span><br><br>
            <div style="text-align:center">
            <button id="pilihKurir" style="width:60%">Bayar</button>
        </div>
        </div>
    </section>

@endsection