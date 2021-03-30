@extends('layouts.app')

@section('content')
<div class="cover-container d-flex justify-content-start mx-auto">
    <div class="" style="flex: 2;">
        @include('component.sidebar')
    </div>
    <div class="" style="flex: 10;">
        <div class="d-flex flex-column">
            @include('component.header', ['header_title' => 'Dashboard'])
            <div class="d-flex justify-content-between ml-4 mt-3">
                <div class="mr-3" style="flex: 8;border-radius: 1em;">
                    <div class="d-flex flex-column white-bg p-3" style="box-shadow: 0px 2px 15px rgba(221, 221, 221, 0.15);">
                        <div class="title-content mb-3">List Voucher</div>
                        <div class="row">
                            <div class="col-md-3 col">
                                Pencarian
                                <form class="form-inline md-form form-sm mt-0 " style="width: 30vh; height:5vh" >        
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                    <input class="form-control form-control-sm ml-3 " id="input-search" type="text" placeholder="Cari berdasarkan id, nama, dll" aria-label="Search" >
                                </form>   
                            </div>
                            <div class="col-md-3 col">
                                <div> Urut Berdasarkan</div>
                                <select name="" id="sortBy" style="width: 30vh; height:5vh">
                                    <option value="">aaa</option>
                            </select>
                            </div>
                            <div class="col-md-3 offset-md-3 button-position">
                                <button class="button-add" data-toggle="modal" data-target="#addModal">Buat Voucher</button>
                            </div>
                        </div>
                        <table class="table table-hover table-striped mt-2">
                            <thead class="titletable">
                                <tr style="background: #A6CB26;">
                                    <th scope="col" class="headTable">Id</th>
                                    <th scope="col" class="headTable">Nama</th>
                                    <th scope="col" class="headTable">Tipe </th>
                                    <th scope="col" class="headTable">Kategori</th>
                                    <th scope="col" class="headTable">Periode Mulai</th>
                                    <th scope="col" class="headTable">Periode Berakhir</th>
                                    <th scope="col" class="headTable">Kuota</th>
                                    <th scope="col" class="headTable"></th>
                                    <th scope="col" class="headTable"></th>
                                </tr>
                            </thead>
                            @foreach($voucher as $v)
                            <tbody id="table-content">
                            
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->voucher_name}}</td>
                                    <td>{{$v->voucher_type}}</td>
                                    <td>{{$v->voucher_category}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$v->voucher_amount}}</td>
                                    <td>
                                        <button class="button" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                    </td>
                                    <td>
                                        <button class="button" data-toggle="modal" data-target="#updateModal">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @include('admin.addVoucher')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection