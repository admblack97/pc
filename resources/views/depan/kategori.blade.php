@extends('depan.layout.master')
@section('content')
<section>
    <div class="kategori">
        <h4>KATEGORI</h4>
        <h5>INTEL</h5>
        <ul>
            <li>
                <input type="checkbox">
                    <label>Intel Core i9</label>
            </li>
        </ul>
        <ul>
            <li>
                <input type="checkbox">
                    <label>Intel Core i5</label>
            </li>
        </ul>
        <ul>
            <li>
                <input type="checkbox">
                    <label>Intel Core i3</label>
            </li>
        </ul>

        <h5>AMD</h5>
        <ul>
            <li>
                <input type="checkbox">
                    <label>AMD FX</label>
            </li>
        </ul>
        <ul>
            <li>
                <input type="checkbox">
                    <label>AMD PRO A-Series A10 APU</label>
            </li>
        </ul>
        <ul>
            <li>
                <input type="checkbox">
                    <label>AMD Ryzen 7</label>
            </li>
        </ul>
        <ul>
            <li>
                <input type="checkbox">
                    <label>AMD PRO A-Series A6 APU</label>
            </li>
        </ul>
    </div>
    
    
    <div class="row" id="utama">
        <!-- <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                
            </div>
        </div> -->
        
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <a href="{{ Route ('detail')}}">
                    <img src="/PC/gambar/core3_6-7th.png" alt="" class="title-menu">  
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/core5_6-7th.png" alt="" class="title-menu">  
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/core7_6-7th.png" alt="" class="title-menu">  
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/core3_6-7th_unlocked.png" alt="" class="title-menu">  
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/i3.png" alt="" class="title-menu">  
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/core5_8th.png" alt="" class="title-menu">  
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/core7_8th.png" alt="" class="title-menu">  
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                <img src="/PC/gambar/Intel-8086-box copy.png" alt="" class="title-menu">  
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="caption">
                
            </div>
        </div>
    </div>
</section>
@endsection