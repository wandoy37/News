<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
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
        $rule_title_unique = Rule::unique('articles', 'title');
        if ($this->method() !== 'POST') {
            $rule_title_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'title' => ['required', $rule_title_unique],
            'content' => ['required'],
            'category' => ['required'],
            'image' => ['image'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul artikel tidak boleh kosong',
            'content.required' => 'Artikel tidak boleh kosong',
            'category.required' => 'Kategori tidak boleh kosong',
            'image.required' => 'Images tidak boleh kosong',
            'title.unique' => 'Judul artikel telah dimiliki',
            'image.image' => 'Extention file beruapa png, jpg, jpeg',
        ];
    }
}
