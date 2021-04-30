<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'is_admin' => 'boolean',
        ];

        if ( $this->filled('password') )
        {
            $rules['password'] = ['confirmed', 'min:6'];
        }

        return $rules;
    }
}
