<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WatchRequest extends Request
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
            'brand_id' => 'required|integer',
            'model_id' => 'required|integer',
            'movement' => 'required|min:2',
            'gender'   => 'required|min:2',
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
            'brand_id.required' => 'The Brand field is required.',
            'model_id.required'  => 'The Model field is required.',
        ];
    }
}
