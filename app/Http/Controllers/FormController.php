<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class FormController extends Controller {
    function handleFormSubmission(Request $request) {

        //validate only image upload
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //check validation error
        // if (@$request->fails()) {
        //     return redirect(route("form.get"))->withErrors($request->errors());
        // }

        $name = $request->input('name');
        $email = $request->input('email');
        $path = "";
        if ($request->has("profile_picture")) {
            $file = $request->file('profile_picture');
            $name = $file->getClientOriginalName();
            // $file->store("uploads", "public");
            $uploadPath = $file->storeAs("uploads", $name, "public");
            $path = Storage::url($uploadPath);
        }

        // return [
        //     "name"=>$name,
        //     "email"=>$email
        // ];
        // return redirect(route("form.get"))->with("success", "Form submitted successfully");
        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully",
            "name" => $name,
            "email" => $email,
            "profile_picture"=>$path
        ]);
        // return redirect(route("form.get"))->withError("Wrong Data");
    }
}
