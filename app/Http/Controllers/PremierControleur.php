<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremierControleur extends Controller
{
    public function index() {
        return view("index");
    }

    public function APropos() {
        return "<h2>A PROPOS</h2>";
    }

    public function p($id) {
        return "<h2>guide de $id</h2>";
    }
}
