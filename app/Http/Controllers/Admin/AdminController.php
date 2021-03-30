<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use Validator;

class AdminController extends Controller
{
    //
    public function home(){
        return view('admin/home');
    }

    // Bagian product
    public function product(){
        $products = Product::get();
        return view('admin/product',['products' => $products]);
    }

    public function addProduct(Request $request){
        var_dump($request->all());
        $image = time().'-'.'.'.$request->product_image->extension();
        $test =  $request->product_image->move(public_path('productimages'),$image);

        if($request->product_cutprice != NULL){
            Product::create([
                'product_image' => $image,
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'product_stock' => $request->product_stock,
                'product_price' => $request->product_price,
                'product_cutprice' => $request->product_cutprice,
                'product_category' => $request->product_category,
                'product_finalprice' => $request->product_price - $request->product_cutprice,
            ]);
            return redirect('superadmin/product');
        }
        Product::create([
            'product_image' => $image,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_stock' => $request->product_stock,
            'product_price' => $request->product_price,
            'product_category' => $request->product_category,
            'product_finalprice' => $request->price,
        ]);
        return redirect('superadmin/product');
        
    }
    // End bagian product

    // Bagian voucher
    public function voucher(){
        $voucher = Voucher::get();
        return view('admin/voucher', ['voucher' => $voucher]);
    }

    public function makeVoucher(Request $request){
        $validator=Validator::make($request->all(),[
            'voucher_name' => ('required'),
            'voucher_type' => ('required'),
            'voucher_category' => ('required'),
            'voucher_amount' => ('required'),
            'voucher_description' => ('required'),
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

        return redirect('/admin/voucher');
    }
    // End bagian voucher
}
