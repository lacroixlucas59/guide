<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ag;

class PremierControleur extends Controller
{
    public function index() {
        return view("index");
    }

    public function APropos() {
        return view("apropos");
    }

    public function ag($id) {

        $agn = ag::find($id);

        return view("ag", ["agn" => $agn]);
    }

    public function AGListe() {

        $agl = ag::all();

        return view("agliste",  ["agl" => $agl]);
    }
    public function create() {
        return view("create");
    }

    public function store(Request $request) {
        $ag=new Ag();
        $ag->titre=$request->input( 'titre');
        $ag->image=$request->input( 'image');
        $ag->audio=$request->input( 'audio');
        $ag->save(); //insert into images...
        return redirect('/agl');
        
    }
}
