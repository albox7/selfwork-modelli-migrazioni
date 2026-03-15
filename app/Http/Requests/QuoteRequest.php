<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'citazione' => 'required | min:12',
			'autore' => 'required | min:6',
			'img' => 'required',
        ];
    }

	
	// Override del metodo messages per modificare i messaggi di errore
	public function messages()
	{
		// Array chiave-valore
		// Chiave = la chiave da validare
		// Valore = il valore da sovrascrivere
		return [
			'citazione.required' => 'The <em>Quote</em> field is required.',
			'citazione.min' => 'The <em>Quote</em> field must be at least :min characters',
			'autore.required' => 'The <em>Author</em> field is required.',
			'autore.min' => 'The <em>Author</em> field must be at least :min characters.',
			'img.required' => 'The <em>Author image</em> field is required.',
		];
	}

}
