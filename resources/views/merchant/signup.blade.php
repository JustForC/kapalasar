@extends('layouts.app')
@section('content')

<div class="container" style="margin: 0; max-width: 100%;">
    <div class="row">
        <div class="col-md-3 nopadding">
            <img src="{{ asset('image/merchant-signup.png') }}" style="height:100vh" alt="">
        </div>
        <div class="col-md-9" >
            <div class="d-flex justify-content-center ">
               <p class="title-sign-merch">Gabung Sebagai Merchant Kapalasar</p>
            </div>
            <div class="d-flex justify-content-center" >
               <p class="sub-sign-merch">Sudah Terdaftar? </p><a href="" class="login-merch-signup">Masuk Sekarang</a>
            </div>
            <div >
                <form>
                <div class="form-group" style="">
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Nama</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" >
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Tanggal Lahir</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Nomor Telepon</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Alamat</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                    <label  class="form-sign-merch nopadding" for="exampleFormControlSelect1">Daerah</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    <label class="form-sign-merch nopadding" for="exampleFormControlInput1">Jenis Usaha</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" >
                
                </div>
                </form>
                <p class="form-sign-merch">Foto KTP</p>
                <button style="background: #C4C4C4;border-radius: 5px;width: 149px;">Upload</button>
                <p class="form-sign-merch">Foto Toko</p>
                <button style="background: #C4C4C4;border-radius: 5px;width: 149px;">Upload</button>
             </div>
        </div>
    </div>

</div>
@endsection