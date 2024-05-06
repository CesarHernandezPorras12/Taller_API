<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTelevisorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'marca' => 'required|string|max:255',
            'tamaño' => 'required|string|max:50', 
            'peso' => 'required|numeric|min:0|max:9999.99', 
            'color' => 'required|string|max:50',
            'tipo_pantalla' => 'required|string|max:50',
            'bluetooth' => 'required|boolean',
            'pais_fabricacion' => 'required|string|max:255',
            'fecha_importacion' => 'required|date',
        ];
    }
}
