<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProdukController extends Controller{
    public function index2(){
        $produk = 'Aqua 400ml';
        return view('produk',['produk'=> $produk]);
    }
    public function show(){
        $produk = ['Aqua 115ml','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
        return view('show',['produk'=> $produk]);
    }
    public function index() { 
return 'Mengakses Fungsi di Controller menggunakan route';
    }
}