<?php

namespace App\Http\Requests\clientes;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        'name'=>'string|required|max:30',
        'lastname'=>'string|required|max:30',
        'address'=>'text|unique|max:30',
        'phone'=>'integer|required|max:9',
        'email'=>'string|required|max:30|email:rfc,dns',
        'password'=>'string|required|max:30',
        
        ];
    }

    public function messages(){
        
        return[
        'name.required'=>'este campo es requerido',
        'name.string'=> 'Valor del nombre no es correcto',
        'name.max' => 'solo se permite 30 caracteres',

        'lastname.required'=>'este campo es requerido',
        'lastname.string'=> 'Valor del apellido no es correcto',
        'lastname.max' => 'solo se permite 30 caracteres',

        'address.required'=>'este campo es requerido',
        'address.string'=> 'Valor del direccion no es correcto',
        'address.max' => 'solo se permite 30 caracteres',
        
        'phone.integer' => 'El valor no es correcto',
        'phone.max' => 'solo se permite 9 caracteres',
        'phone.password' => 'Por favor utilice valores validos',
        
        'email.required'=>'este campo es requerido',
        'email.string'=> 'Valor del correo no es correcto',
        'email.max' => 'solo se permite 30 caracteres',
        'email.email' => 'No es un correo electronico',
        ];
    }
}
