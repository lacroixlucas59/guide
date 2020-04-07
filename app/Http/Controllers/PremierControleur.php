<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremierControleur extends Controller
{
    public function index() {
        return view("index");
    }

    public function APropos() {
        return view("apropos");
    }

    public function ag($id) {
        return view("ag", ["id" => $id]);
    }

    public function AGListe() {
        return view("agliste");
    }
}
