<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    //
    public function home(){
        return view('merchant/home');
    }
}
