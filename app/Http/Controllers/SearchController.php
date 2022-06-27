<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Produit;

class SearchController extends Controller
{
    public function search(Request $request){
        $nom = $request->input('recherche');

        dump($produit = DB::select('SELECT * FROM produits WHERE nom = ?',[$nom])); 
        //return view('pages.research', compact('produit'));   
	} 

}
