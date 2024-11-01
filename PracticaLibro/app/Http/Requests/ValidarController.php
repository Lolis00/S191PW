<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarController extends FormRequest
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
            'isbn' => 'required|min:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required',
            'paginas' => 'required|integer|min:1',
             'año' => 'required|integer|min:1000|max:'.date('Y'),
            'editorial' => 'required|string',
            'email' => 'required|email',
        ];
    }
}
