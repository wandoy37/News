<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
        $rule_category_unique = Rule::unique('categories', 'name');
        if ($this->method() !== 'POST') {
            $rule_category_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'name' => ['required', $rule_category_unique]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama category tidak boleh kosong',
            'name.unique' => 'Nama category sudah ada'
        ];
    }
}
