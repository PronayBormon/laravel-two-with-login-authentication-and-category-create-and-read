<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>[
                'string'
            ],
            'slug'=>[
                'string'
            ],
            'description'=>[
                'string'
            ],
            'image'=>[
                'mimes:jpeg,jpg,png'
            ],
            'meta_title'=>[
                'string'
            ],
            'meta_description'=>[
                'string'
            ],
            'meta_keyword'=>[
                'string'
            ],
            'nav_status'=>[
                'required'
            ],
            'status'=>[
                'required'
            ],
            'created_by'=>[
                'integer'
            ]
        ];

         
    }
}
