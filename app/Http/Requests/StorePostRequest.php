<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'description' => 'required',
            'image' => 'required|min:5',
            'price' => 'required|numeric|min:0.00|max:999.99|decimal:2',
            'series' => 'required|min:3|max:100',
            'date' => 'required|date_format:Y-m-d',
            'type' => 'required|in:comic book,graphic novel'

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è richiesto e deve essere lungo almeno 5 caratteri',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare :max caratteri',
            'description.required' => 'La descrizione è richiesta',
            'image.required' => 'Il link dell\'immagine è richiesto',
            'price.required' => 'Il prezzo è richiesto',
            'price.max' => 'Il prezzo non può essere maggiore di 999.99',
            'price.min' => 'Il prezzo non può essere minore di 0',
            'price.decimal' => 'Vanno inseriti due numeri decimali',
            'series.required' => 'La serie è richiesta',
            'series.min' => 'La serie deve essere lungo almeno :min caratteri',
            'series.max' => 'La serie non deve superare :max caratteri',
            'type.required' => 'La tipologia è richiesta'
        ];
    }
}
