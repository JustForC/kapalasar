<div class="d-flex flex-column white-bg pl-4 pr-4 sidebar-row " style="height: calc(100vh);">
    <div class="d-flex flex-column" style="height:100vh;">
        <div class="row pl-2 pr-2 pb-3 mt-3">
            <div class="header-part white-bg pb-5 pl-4 pr-5 pt-2 ">
                <img src="{{ asset('image/homeDashboard.png') }}" onclick="homePage()" style="cursor: pointer;" alt="" height="25rem" class="logoKapalasar">
            </div>
        </div>
        <div class="row pl-2 pr-2 pt-3 pb-3 mt-3 d-flex justify-content-center align-items-center" onclick="homePage()" style="cursor: pointer;" id="sidebar_menu">
            <div class="col-md-3">
                <img src="{{ asset('image/home-page.png') }}" alt="">
            </div>
            <div class="col-md-5 sidebar-text">
                Dashboard
            </div>
        </div>
        <div class="row pl-2 pr-2 pt-3 pb-3 mt-3 d-flex justify-content-center align-items-center" onclick="adminPage()" style="cursor: pointer;" id="sidebar_menu">
            <div class="col-md-3">
                <img src="{{ asset('image/admin.png') }}" alt="">
            </div>
            <div class="col-md-5 sidebar-text">
                Admin
            </div>
        </div>
        <div class="row pl-2 pr-2 pt-3 pb-3 mt-3 d-flex justify-content-center align-items-center" onclick="merchantPage();" style="cursor: pointer;" id="sidebar_menu">
            <div class="col-md-3">
                <img src="{{ asset('image/merchant.png') }}" alt="">
            </div>
            <div class="col-md-5 sidebar-text">
                Merchant
            </div>
        </div>
        <div class="row pl-2 pr-2 pt-3 pb-3 mt-3 d-flex justify-content-center align-items-center" onclick="userPage();" style="cursor: pointer;" id="sidebar_menu">
            <div class="col-md-3">
                <img src="{{ asset('image/user.png') }}" alt="">
            </div>
            <div class="col-md-5 sidebar-text">
                User
            </div>
        </div>
        <div class="row pl-2 pr-2 pt-3 pb-3 mt-3 d-flex justify-content-center align-items-center" onclick="productPage();" style="cursor: pointer;" id="sidebar_menu">
            <div class="col-md-3">
                <img src="{{ asset('image/product.png') }}" alt="">
            </div>
            <div class="col-md-5 sidebar-text">
                Produk
            </div>
        </div>
        <div class="row pl-2 pr-2 pt-3 pb-3 mt-3 d-flex justify-content-center align-items-center" onclick="voucherPage();" style="cursor: pointer;" id="sidebar_menu">
            <div class="col-md-3">
                <img src="{{ asset('image/voucher.png') }}" alt="">
            </div>
            <div class="col-md-5 sidebar-text">
                Voucher
            </div>
        </div>
    </div>
</div>

<script>
     function homePage(){
        window.location.href = "{{ URL::to('superadmin/home') }}";
    }
     function adminPage(){
        window.location.href = "{{ URL::to('superadmin/admin') }}";
    }
     function merchantPage(){
        window.location.href = "{{ URL::to('superadmin/merchant') }}";
    }
     function userPage(){
        window.location.href = "{{ URL::to('superadmin/user') }}";
    }
     function productPage(){
        window.location.href = "{{ URL::to('superadmin/product') }}";
    }
     function voucherPage(){
        window.location.href = "{{ URL::to('superadmin/voucher') }}";
    }
</script>