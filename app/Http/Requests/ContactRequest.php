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
             'name' => 'required|string',
             'email' => 'required|email',
             'phone' => 'required|digits:10',
             'message' =>'required',
        ];
    }
   public function messages(){

      return [
      'name.required'  =>'name is required',
      'name.string'    =>'this is not string description',
      'email.required' =>'email is required',
      'email.email'    =>'this is not valide email',
      'phone.required' =>'phone is required ',
      'phone.digits'   =>'this is not valide phone number',
      'message.required' =>'message is required',
      ];

    }
}
