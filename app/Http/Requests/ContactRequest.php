<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'title' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
            'twitter' => ['required'],
            'facebook' => ['required'],
            'whatsapp' => ['required'],
            'instagram' => ['required'],
            'map' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title tidak boleh kosong.',
            'address.required' => 'Address tidak boleh kosong.',
            'telephone.required' => 'Telephone tidak boleh kosong.',
            'email.required' => 'Email tidak boleh kosong.',
            'twitter.required' => 'Twitter tidak boleh kosong.',
            'facebook.required' => 'Facebook tidak boleh kosong.',
            'whatsapp.required' => 'Whatsapp tidak boleh kosong.',
            'instagram.required' => 'Instagram tidak boleh kosong.',
            'map.required' => 'Map tidak boleh kosong.',
        ];
    }
}
