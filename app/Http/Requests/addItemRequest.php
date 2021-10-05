<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addItemRequest extends FormRequest
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
            'description'  =>'required|min:40|max:120',
            'name'         =>'required|min:5|max:17',
            'price'        =>'required|numeric',
            'count'        =>'required',
            'image'        =>'required',
        ];
    }
    public function messages(){
        return [

            'description.required'  =>'description is required',
            'description.min'        =>'this is short description',
            'description.max'        =>'this is long description',
            'name.min'              =>'this is short name',
            'name.max'              =>'this is long name ',
            'name.required'         =>'name is required',
            'price.required'        =>'required',
             'price.numeric'        =>'most numeric',
            'count.required'        =>'required',
            'image.required'        =>'required',

       ];

    }
}
