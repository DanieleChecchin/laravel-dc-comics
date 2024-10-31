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
        ];
    }
}
