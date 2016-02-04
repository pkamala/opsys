<?php

namespace opsys\Http\Requests;

use opsys\Http\Requests\Request;

class targetingFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Round' => 'required',
            'Incomplete' => 'required'
        ];
    }
}
