<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        $rules = [
            'nombres' => 'required|alpha|string|max:255', // Solo caracteres del abecedario
            'email' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'fono' => 'required|digits:9|numeric', // Número telefónico de 9 dígitos
        ];

        if ($this->isMethod('post')) {
            // Validation rules for creation
            $rules['email'] .= '|unique:clientes,email';
        } elseif ($this->isMethod('put')) {
            // Validation rules for update
            $rules['email'] .= '|unique:clientes,email,' . $this->route('cliente');
        }

        return $rules;
    }

    /**
     * Get the custom messages for the validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombres.required' => 'El nombre es obligatorio.',
            'nombres.alpha' => 'El nombre solo puede contener letras.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El email ya está en uso.',
            'direccion.required' => 'La dirección es obligatoria.',
            'fono.required' => 'El número de teléfono es obligatorio.',
            'fono.digits' => 'El número de teléfono debe tener 9 dígitos.',
            'fono.numeric' => 'El número de teléfono solo puede contener números.',
        ];
    }
}
