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

    public function Supprimer($id) {

        $asupp = ag::find($id);

        $asupp->delete();

        $agl = ag::all();

        return view("agedit",  ["agl" => $agl]);
    }

    public function AGListe() {

        $agl = ag::all();

        return view("agliste",  ["agl" => $agl]);
    }
    
    public function interface() {

        $agl = ag::all();

        return view("agedit",  ["agl" => $agl]);
    }

    public function creer() {
        return view("creer");
    }

    public function tr( Request $request) {
        // dd($_FILES, $request->file('image'));
        $name = $request->file('visuel')->hashName();
        $request->file('visuel')->move("d/", $name);
        $nema = $request->file('audio')->hashName();
        $request->file('audio')->move("d/", $nema);
        $audioguide = new AG();
        $audioguide -> titre = $request ->input('titre');
        $audioguide -> contenu = $request ->input('contenu');
        $audioguide -> audio = "d/".$nema;
        $audioguide -> image = "d/".$name;

        $audioguide -> save();


        return redirect("/");
    }
}
