<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Product;
use Validator;
use Auth;

class SuperAdminController extends Controller
{
    //
    public function home(){
        return view('/superAdmin/index');
    }

    // Bagian admin
    public function admin(){
        $admins = User::where('role_id','=',1)->get();
        return view('/superAdmin/admin',['admins' => $admins]);
    }

    public function registerAdmin(Request $request){
        $validator=Validator::make($request->all(),[
            'name' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'password' => ['required','confirmed'],
        ]);

        if($validator->fails()){
            var_dump($request->all());
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'role_id' => 1,
            'job' => "Admin",
        ]);

        return redirect('/superadmin/admin');
    }
    // End bagian admin

    // Bagian user
    public function user(){
        $users = User::where('role_id','=', 4)->get();
        return view('superAdmin/user',['users' => $users]);
    }
    // End bagian user

    // Bagian merchant
    public function merchant(){
        $merchants = User::where('role_id','=', 3)->get();
        return view('superAdmin/merchant',['merchants' => $merchants]);
    }

    public function registerMerchant(Request $request){
        $validator=Validator::make($request->all(),[
            'name' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'address_detail' => ['required'],
            'telephone' => ['required'],
            'birthdate' => ['required'],
            'job' => ['required'],
            'password' => ['required','confirmed'],
        ]);

        if($validator->fails()){
            var_dump($request->all());
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'role_id' => 3,
            'job' => $request->job,
            'birthdate' => $request->birthdate,
        ]);

        return redirect('/superadmin/merchant');
    }
    // End bagian merchant

    // Bagian product
    public function product(){
        $products = Product::get();
        return view('superAdmin/product',['products' => $products]);
    }

    public function addProduct(Request $request){
        var_dump($request->all());
        $test = $request->product_image->move(public_path('productimages'),$request->product_image);
        Product::create([
            'product_image' => $image,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_stock' => $request->product_stock,
            'product_price' => $request->product_price,
            'product_cutprice' => $request->product_cutprice,
            'product_category' => $request->product_category,
        ]);
        return redirect('superadmin/product');
    }
    // End bagian product

    // Bagian voucher
    public function voucher(){
        $voucher = Voucher::get();
        return view('superadmin/voucher', ['voucher' => $voucher]);
    }

    public function makeVoucher(Request $request){
        $validator=Validator::make($request->all(),[
            'voucher_name' => ['required'],
            'voucher_type' => ['required'],
            'voucher_category' => ['required'],
            'voucher_amount' => ['required'],
            'voucher_description' => ['required'],
        ]);

        if($validator->fails()){

        }

        Voucher::create([
            'voucher_name' => $request->voucher_name,
            'voucher_type' => $request->voucher_type,
            'voucher_category' => $request->voucher_category,
            'voucher_amount' => $request->voucher_amount,
            'voucher_description' => $request->voucher_description,
        ]);

        return redirect('/superadmin/voucher');
    }
    // End bagian voucher
}
