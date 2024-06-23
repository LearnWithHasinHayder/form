<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVRequest extends FormRequest
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
            //
            'name'=>'required|min:3|max:10|alpha|not_in:admin,password',
            // 'name'=>'required|min:3|max:10|alpha|not_in:admin,password|starts_with:A|ends_with:z',
            'email'=>'required|email',
            'price'=>'required|numeric|min:10|max:100',
        ];

    }

    function messages(){
        return [
            'name.required' => "Ekhane Name Obosshoi proyjon",
            'name.min' => 'Name er minimum length hote hobe 3',
            'name.max' => 'Name er maximum length hote hobe 10',
            'name.alpha' => 'Name e only alphabet hote hobe',
            'name.not_in' => 'Name e admin or password na dilei hobe',
            'email.required' => 'Email dite hobe',
        ];
    }

}
