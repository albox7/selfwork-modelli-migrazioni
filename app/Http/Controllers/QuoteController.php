<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
	public function store (QuoteRequest $request) {

		$citazione = $request->citazione;
		$autore = $request->autore;
		$img = null;

		// !!! ERRATO PASSAGGIO PARAMETRI ('public/img')
		//$img = $request->file('img')->store('public/img');

		// PASSAGGIO PARAMETRI CORRETTO: ('img', 'public')
		if($request->file('img')) {
			$img = $request->file('img')->store('img', 'public');	
		}

		// SALVATAGGIO DATI
		Quote::create([
			'citazione' => $citazione,
			'autore' => $autore,
			'img' => $img,
		]);


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



		// return redirect(route('inserisci-elemento'));
		return redirect()->back()->with('message', 'Good job!');
	}
}
