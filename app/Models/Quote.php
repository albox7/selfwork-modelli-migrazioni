<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
	use HasFactory;

	// Proprietà che definisce i campi del mio modello
	protected $fillable = [
		'citazione',
		'autore',
	];
}
