<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produit;
class MainController extends Controller
{
    //
    public function index()
    {
        $produits =Produit::all();
        // dd($produits);
        return view('shop.index',compact('produits'));
    }
}
