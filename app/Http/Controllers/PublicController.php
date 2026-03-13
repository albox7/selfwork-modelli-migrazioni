<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quote;


class PublicController extends Controller
{
	public function Home () {
		return view('home');
	}

	public function Quotes () {
		$quotes = Quote::all();
		return view('quotes', ['quotes' => $quotes]);
	}

	public function InserisciElemento () {
		return view('inserisci-elemento');
	}
}
