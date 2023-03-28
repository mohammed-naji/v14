<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name', 'phone'));
        // dd($request->input('name'));
        dd($request->name);
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;

        // return "Welcome $name your email is $email";
        return view('forms.form2_data', compact('name', 'email'));
    }
}
