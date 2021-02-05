<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "prenom" => 'required|max:5'
        ];
    }
    
    
    public function messages(): array
    {
        return [
            "prenom.required" => "T'as oublié le nom",
            "prenom.max" => "ton nom est grand"

        ];
    }
}
