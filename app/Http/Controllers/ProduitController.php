<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = DB::table('produits')->get();
        
        return view('admin/drugs', compact('produits'));
    }


    public function store(){
        $imageName = time().'.'.request()->image->extension();

        $test = request()->image->move(public_path('images'),$imageName);

        $produit = new Produit;
		$produit->nom = request('nom');
		$produit->notice = request('notice');
		$produit->prixunit = request('prix');
		$produit->type = request('type');
		$produit->stockdis = request('stock');
		$produit->image = $imageName;
		$produit->save();
        
		return back()->with('success', 'Votre produit est enregistré avec succès');
    }

    public function destroy($id){
    	$produit = Produit::findOrFail($id);

    	$produit->delete();

    	return redirect('/admin/drugs')->with('success', 'Votre produit est supprimé avec succès');
    }

    public function edit($id){
        $produit = Produit::findOrFail($id);

        return view('admin/update', compact('produit'));
    }

    public function update(Request $request,$id){
        $imageName = time().'.'.request()->image->extension();

        $test = request()->image->move(public_path('images'),$imageName);

        $nom = $request->input('nom');
        $notice = $request->input('notice');
        $prix = $request->input('prix');
        $type = $request->input('type');
        $stock = $request->input('stock');
        $image = $imageName;
        DB::update('UPDATE produits set nom=?,notice=?,prixunit=?,type=?,stockdis=?,image=? where id=?',[$nom,$notice,$prix,$type,$stock,$image,$id]);

        //$this->storeImage($produit);

        return redirect('admin/show/{id}')->with('success', 'Votre produit a été modifié avec succès');
    }

    public function show($id){
        $produit = Produit::findOrFail($id);

        return view('admin/edit', compact('produit'));
    }

    public function search(){
        $filtre = request()->input('filtre');

        $produits = Produit::where('nom','like', "%$filtre%")
                ->orWhere('notice','like', "%$filtre%")
                ->paginate(6);

        return view('search')->with('produits', $produits);
    }
}

