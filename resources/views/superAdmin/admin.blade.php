@extends('layouts.app')

@section('content')
<div class="cover-container d-flex justify-content-start mx-auto">
    <div class="" style="flex: 2;">
        @include('../component.sidebarSuper')
    </div>
    <div class="" style="flex: 10;">
        <div class="d-flex flex-column">
            @include('../component.header', ['header_title' => 'Dashboard'])
            <div class="d-flex justify-content-between ml-4 mt-3">
                <div class="mr-3" style="flex: 8;border-radius: 1em;">
                    <div class="d-flex flex-column white-bg p-3" style="box-shadow: 0px 2px 15px rgba(221, 221, 221, 0.15);">
                        <div class="title-content mb-3">List Admin</div>
                        <!-- <input class="form-control" id="input-search" type="text" placeholder="Cari berdasarkan id, nama, dll"> -->
                        <div class="row">
                            <div class="col">
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
                                <button class="button-add" data-toggle="modal" data-target="#addModal">Tambah Admin</button>
                            </div>
                        </div>
                        <table class="table table-hover table-striped mt-2" >
                            <thead class="titletable">
                                <tr style="background: #A6CB26;">
                                    <th scope="col" class="headTable">Id Admin</th>
                                    <th scope="col" class="headTable">Nama</th>
                                    <th scope="col" class="headTable">Email</th>
                                    <th scope="col" class="headTable">Alamat</th>
                                    <th scope="col" class="headTable">Nomor Telepon</th>
                                    <th scope="col" class="headTable">Password</th>
                                    <th scope="col" class="headTable"></th>
                                </tr>
                            </thead>
                            @foreach($admins as $admin)
                            <tbody id="table-content">
                                <tr>
                                    <td>{{$admin->id}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->address}}</td>
                                    <td>{{$admin->telephone}}</td>
                                    <td>{{$admin->password}}</td>
                                    <td>
                                        <button class="button" data-toggle="modal" data-target="#updateAdmin">Update</button>
                                    </td>
                                </tr>
                            </tbody> 
                            @endforeach   
                        </table>
                        
                    </div>
                </div>
                
                @include('../superAdmin.addAdmin')
            </div>
        </div>
    </div>
</div>
@include('../superAdmin.updateAdmin')
<script>
$(document).ready(function(){
  $("#input-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table-content tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
