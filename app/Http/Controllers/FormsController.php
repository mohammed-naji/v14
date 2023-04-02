<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Form3Request;
use Illuminate\Support\Facades\Validator;

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

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Form3Request $request)
    {
        // $request->validate([
        //     'name' => 'required|min:4|max:20|string',
        //     'email' => 'required|ends_with:@gmail.com',
        //     'dob' => 'nullable|before:today',
        //     'end_event' => 'nullable|after:start_event',
        //     'password' => 'confirmed'
        // ]);

        // $vv = Validator::make($request->all(), [
        //     'name' => 'required|min:4|max:20|string',
        //     'email' => 'required|ends_with:@gmail.com',
        //     'dob' => 'nullable|before:today',
        //     'end_event' => 'nullable|after:start_event',
        //     'password' => 'confirmed'
        // ]);

        // if($vv->fails()) {
        //     return response()->json( [
        //         'status' => 0,
        //         'message' => 'There is an error',
        //         'data' => []
        //     ] );
        // }

        dd($request->all());
    }
}
