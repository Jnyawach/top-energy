<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BladeViewController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function products(){
        $products=Product::where('status',1)->get();
        return view('products',compact('products'));
    }

    public function language(string $lang){
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
