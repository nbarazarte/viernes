<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReglasMascotasPerdidas extends FormRequest
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
            //'str_dueno' => 'required',
            'str_telefono' => 'required',
            //'str_correo' => 'required',
            'str_mascota' => 'required',
            'str_especie' => 'required',
            //'str_ruta_foto' => 'required',
            'str_ciudad' => 'required',
            'str_sector' => 'required',
            'str_fecha_perdida' => 'required',
            'txt_descripcion' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //'str_dueno.required' => 'El nombre del dueño es requerido',
            'str_telefono.required' => 'El número de teléfono es requerido',
            //'str_correo.required' => 'La dirección de Correo Electrónico es requerida',
            'str_mascota.required' => 'El nombre de la mascota es requerida',
            'str_especie.required' => 'Indique a que especie pertene la mascota',
            //'str_ruta_foto.required' => 'Seleccione una foto de la mascota',
            'str_ciudad.required' => 'Indique la ciudad en la que se extravió',
            'str_sector.required' => 'Indique en que sector se extravió',
            'str_fecha_perdida.required' => 'Indique la fecha en que se extravió',
            'txt_descripcion.required' => 'Indique mayores detalles de su mascota',            
            
        ];
    }

}
