<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Produit;
use App\Mail\Contactmail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function userhome(){
    	
    	return view('welcome');
    }

    public function adminhome(){
        
        return view('home');
    }

    public function index(){

    	$produits = DB::table('produits')->get();
        
        return view('user/drugs-user', compact('produits'));
    }

    public function show($id){
    	$produit = Produit::findOrFail($id);

        return view('user/edit-user', compact('produit'));
    }

    public function contact(){

        return view('user.contact');
    }

    public function sendEmail(Request $request){

        $details=[
            'cnom' => $request->cnom,
            'cmail' => $request->cmail,
            'cnumero' => $request->cnumero,
            'cmessage' => $request->cmessage
        ];

        Mail::to("joiesagbohan@gmail.com")->send(new Contactmail($details));

        return "Votre message a été envoyé avec succès !";
        //return back()->with('message_sent','Votre message a été envoyé avec succès !');
    }
}
