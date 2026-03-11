<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function Home () {
        return view('home');
    }

    public function Quotes () {
        return view('quotes');
    }

    public function InserisciElemento () {
        return view('inserisci-elemento');
    }
}
