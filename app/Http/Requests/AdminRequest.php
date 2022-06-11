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
            'name' => 'required|string',
            'catagory' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:5020',
            'price' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' :attribute is required',
            'catagory.required' => ' :attribute is required',
            'description.required' => ' :attribute is required',
            'image.required' => ' :attribute is required',
            'image.max' => ' :attribute maximum size',
            'image.mimes' => ' :attribute must be in png, jpg, png format',
            'prize.required' => ' :attribute is required',
            'prize.integer' => ' :attribute must be a number',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name of item',
            'catagory' => 'Type of item',
            'description' => 'Detail of item',
            'image' => 'Image of item',
            'prize' => 'Prize of item',
        ];
    }
}
