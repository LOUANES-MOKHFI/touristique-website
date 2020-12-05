<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EndroitsRequest extends FormRequest
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
            'name'  => 'required|min:3|max:255',
            'photo' => 'required_without:id|mimes:jpeg,jpg,png',
            'wilaya' =>'required',
            'commune'=>'required|min:3|max:255',
            'adress'=>'required|min:3|max:255',
            'description'=>'required|min:10|max:1000',
        ];
    }

     public function messages(){
         return [
            'required'     => 'Ce champ est obligatoire',
            'photo.required_without' => 'Ce champ est obligatoire',
            'name.min'     => 'Le nom ne peut pas contenir moins de 3 caractére',
            'name.max'     => 'Le nom ne peut pas étre plus de 255 caractére',
            'photo.mimes'  => 'veuillez choisir un format correcte jpeg, jpg ou png',
            'commune.min'     => 'Le nom de commune ne peut pas contenir moins de 3 caractére',
            'commune.max'     => 'Le nom de commune ne peut pas étre plus de 255 caractére',
            'adress.min'     => 'L\'adress ne peut pas contenir moins de 3 caractére',
            'adress.max'     => 'L\'adress ne peut pas étre plus de 255 caractére',
            'description.min'     => 'La description ne peut pas contenir moins de 100 caractére',
            'description.max'     => 'La description ne peut pas étre plus de 1000 caractére',
            
        ];
    }
}
