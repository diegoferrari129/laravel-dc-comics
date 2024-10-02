<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required|max:100',
            'price' => 'required|integer',
            'sale_date' => 'required|numeric',
            'type' => 'required|max:25',
            'image' => 'required',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Title is required',
            'title.max' => 'Title cannot have more than 50 characters',
            'description.required' => 'Description is required',
            'description.max' => 'Description cannot have more than 100 characters',
            'price.required' => 'Price is required',
            'price.integer' => 'Price must be a number',
            'sale_date.require' => 'Sale Date is required',
            'sale_date.year' => 'Sale Date must be a year',
            'type.required' => 'Type is required',
            'type.max' => 'Type cannot have more than 25 characters',
            'image.require' => 'Image is required',
        ];
    }
}
