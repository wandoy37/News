<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AboutRequest extends FormRequest
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
            'description' => ['required'],
            'visi' => ['required'],
            'misi' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Description tidak boleh kosong',
            'visi.required' => 'Visi tidak boleh kosong',
            'misi.required' => 'Misi tidak boleh kosong',
        ];
    }
}
