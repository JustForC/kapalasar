<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use Illuminate\Http\RedirectResponse;
use Validator;

class AdminController extends Controller
{
    //
    public function home(){
        return view('admin/home');
    }

    // Bagian product
    public function product(){
        return view('admin/product');
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
