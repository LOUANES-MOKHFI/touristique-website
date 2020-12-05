<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|min:3',
            'message' => 'required|min:3',
        ];
    }
     public function messages(){
         return [
            'required'     => 'Ce champ est obligatoire',
            'name.max'     => 'Le nom ne peut pas étre plus de 255 caractére',
            'subject.min'     => 'L\'objet ne peut pas contenir moins de 3 caractére',
            'message.min'     => 'Le message ne peut pas contenir moins de 3 caractére',  
        ];
    }
}
