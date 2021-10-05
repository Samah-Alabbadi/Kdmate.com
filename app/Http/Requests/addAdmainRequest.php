<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addAdmainRequest extends FormRequest
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
            'name' => ['required', 'max:30','unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'image'=>'required',

        ];
    }

    public function messages(){

        return[

                'name.required' => 'Name is required',
                'name.unique'=>'This name already exists',
                'name.max' =>'This is long name',
                'email.required'=>'Email is required',
                'email.email'=>'Must be email',
                'email.unique'=>'This email already exists',
                'password.required'=>'password is required',
                'password.min'=>'this is short password',
                'image.required'=>'image is required',

            ];


    }
}
