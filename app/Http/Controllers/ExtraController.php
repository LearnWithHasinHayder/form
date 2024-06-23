<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormVRequest;

class ExtraController extends Controller
{
    function checkValidation(FormVRequest $request,){


        $validated = $request->validated();

        // $validation = $request->validate([
        //     'name'=>'required|min:3|max:10|alpha|not_in:admin,password',
        //     // 'name'=>'required|min:3|max:10|alpha|not_in:admin,password|starts_with:A|ends_with:z',
        //     'email'=>'required|email',
        //     'price'=>'required|numeric|min:10|max:100',
        // ]);

        // print_r($validated);

        return redirect(route('form.get'))->with([
            'success'=>'Form submitted successfully',
            'name'=>$request->input('name'),
            'email'=>$request->input('email')
        ]);
    }
}
