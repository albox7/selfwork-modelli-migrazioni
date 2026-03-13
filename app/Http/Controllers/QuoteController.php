<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
	public function store (Request $request) {

		$citazione = $request->citazione;
		$autore = $request->autore;

		// Arrivano i dati in $request?
		//dd($request->all());


		// -----------------------------------
		// METODO SALVATAGGIO DATI 1

		// Creo una nuova istanza della classe Quote
		//$quote = new Quote();

		// Valorizzo i campi dell'oggetto $quote
		//$quote->citazione = $citazione;
		//$quote->autore = $autore;

		// Vengono valorizzate le proprietà?
		//dd($quote);

		// Salva i dati nel db
		//$quote->save();


		// -----------------------------------
		// METODO SALVATAGGIO DATI 2

		Quote::create([
			'citazione' => $citazione,
			'autore' => $autore,
		]);

		
		return redirect(route('inserisci-elemento'));
	}
}
