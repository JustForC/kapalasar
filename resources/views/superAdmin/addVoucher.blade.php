


<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #A6CB26;">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Voucher</h5>
        <button type="button" class="close modal-title" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/superadmin/addvoucher" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="card">
            <div class="card-header header-add-voucher">
                Pilih Jenis Voucher yang Ingin Dibuat
            </div>
            <div class="card-body">
                <p class="card-text">Pilih Jenis Voucher</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cashback" id="defaultCheck1" name="voucher_type">
                    <label class="form-check-label" for="defaultCheck1">
                    Voucher Cashback
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Potongan Ongkir" id="defaultCheck1" name="voucher_type">
                    <label class="form-check-label" for="defaultCheck1">
                    Voucher Potongan Ongkir
                    </label>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header header-add-voucher">
                Isi Detail dari Voucher yang ingin dibuat
            </div>
            <div class="card-body">
                <label class="label-add" for="exampleFormControlInput1">Nama Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="voucher_name">
                <label class="label-add" for="exampleFormControlInput1">Deskripsi Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="voucher_description">
                <label class="label-add" for="exampleFormControlInput1">Kategori Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="voucher_category">
                <label class="label-add" for="exampleFormControlInput1">Stok</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="voucher_amount">
            </div>
        </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>