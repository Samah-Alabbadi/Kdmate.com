<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProfileRequest extends FormRequest
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
            'description'=>'required|max:255|min:40',
            'location'=>'required',
            'number'=>'required|digits:10',
            'image'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'A description is required',
            'description.max' =>'this is long description',
            'description.min' =>'this is short description',
            'location.required' => 'A location is required',
            'number.required' => 'A number is required',
            'number.digits' => 'this is not valide phone number',
            'image.required' => 'A image is required',
        ];
    }
}
