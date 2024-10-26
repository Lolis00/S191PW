<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadadorCliente extends FormRequest
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
            //hay diferentes validaiones y se van concatenando con | 
            //validacion min y max
            //validacion de numero numeric
            //validacion correo email, rfc, dns
            //validacion 
            'txtnombre'=>'required|min:3|max:20',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email:rfc:dns',
            'txttelefono'=>'required|numeric',
        
        ];
    }
}
