<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'identifiant' => 'required|max:255',
            'password' => 'required|max:255'
        ];
    }

    public function messages()
{
    return [
        'identifiant.required' => 'A title is required',
        'password.required' => 'A message is required',
    ];
}
}
