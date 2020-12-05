<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique'
        ];
    }

     public function messages()
    {
        return [
            'required' => 'Ce champ est obligatoire',
            'name.min' => 'le nom ne peut pas étre  moins de 3 caractére',
            'email.unique' => 'ce membre est existe, essayez de changer votre adress email'
        ];
    }
}
