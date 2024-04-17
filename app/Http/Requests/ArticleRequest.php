<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name'=> 'required|min:3',
            'price'=> 'required',
            'category'=> 'required',
        ];
    }

    public function messages(){
        return [
            'name.required'=> 'Il nome deve essere inserito obbligatoriamente',
            'name.min'=> 'Il nome deve avere almeno 3 caratteri',
            'price.required'=> 'Il prezzo deve essere inserito obbligatoriamente',
            'category.required'=> 'La categoria deve essere selezionata obbligatoriamente'
        ];
    }
}
