<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommandeRequest extends FormRequest
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
            'code_envoie'=>'required',
            'poids_commande'=>'required',
            'code_facteur'=>'required',
            'id_client'=>'required',
            'id_destinataire'=>'required',
            'date_validation'=>'required',
            'date_recevoire'=>'required',
            'taxe_commande'=>'required'
        ];
    }
}
