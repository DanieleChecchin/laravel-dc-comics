<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|min:3|max:50',
            'type'=>'required|string|min:5|max:70',
            'ps'=>'required|numeric|min:10|max:255',
            'attack'=>'required|numeric|min:10|max:255',
            'defense'=>'required|numeric|min:10|max:255',
            'strongest_move'=>'required|string|min:3|max:20',
            'species'=>'required|string|min:5|max:50'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Il nome è obbligatorio',
            'type.required' => 'Il tipo è obbligatorio',
            'ps.required' => 'I punti salute sono obbligatori',
            'attack.required' => 'L\'attacco è obbligatorio',
            'defense.required' => 'La difesa è obbligatoria',
            'strongest_move.required' => 'La mossa migliore è obbligatoria',
            'species.required' => 'La specie è obbligatoria',
            'name.min' => 'Il contenuto deve essere almeno di 3 caratteri',
            'type.min' => 'Il contenuto deve essere almeno di 5 caratteri',
            'ps.min' => 'Il contenuto deve essere almeno di 10 caratteri',
            'attack.min' => 'Il contenuto deve essere almeno di 10 caratteri',
            'defense.min' => 'Il contenuto deve essere almeno di 10 caratteri',
            'strongest_move.min' => 'Il contenuto deve essere almeno di 3 caratteri',
            'species.min' => 'Il contenuto deve contenere massimo 5 caratteri',
            'name.max' => 'Il contenuto deve contenere massimo di 50 caratteri',
            'type.max' => 'Il contenuto deve contenere massimo 70 caratteri',
            'ps.max' => 'Il contenuto deve contenere massimo 255 caratteri',
            'attack.max' => 'Il contenuto deve contenere massimo 255 caratteri',
            'defense.max' => 'Il contenuto deve contenere massimo 255 caratteri',
            'strongest_move.max' => 'Il contenuto deve contenere massimo 20 caratteri',
            'species.max' => 'Il contenuto deve contenere massimo 50 caratteri'
        ];
    }
}
