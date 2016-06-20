<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SintegraRequest extends Request
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
        	'idusuario' => 'required',
		'cnpj' => 'required|min:14|max:14',
		'resultado_json' => 'required'
        ];
    }
}
