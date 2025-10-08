<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentAddRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'F_name'=>'required',
            'L_name'=>'required',
            'email'=>'required|email|unique:students,email',
            'faddress'=>'required',
            'fage'=>'required',
            'fgender'=>'required',
            'fclass'=>'required'
        ];
    }
    public function messages(){
        return [
            'F_name.required'=>'First name cant be empty. ',
            'L_name.required'=>'Last name cant be empty. ',
            'email.required'=>'This email is not valid. ',
            'faddress.required'=>'Address field cant be empty. ',
            'fage.required'=>'Age must be required. ',
            'fgender.required'=>'Please select the gender.',
            'fclass.required'=>'Enter your class. ',
        ];
    }
}
