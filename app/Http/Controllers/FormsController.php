<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Form3Request;
use App\Mail\ContactMail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $request->validate([
            'cv' => 'file|mimes:png,jpg,docx,doc,pdf'
        ]);
        // mkdir()
        // rmdir()
        // unlink()
        // unset()
        // dd($request->all());

        // abc.png => 646464549876546497abc.png
        // abc.png => 97646444549877797abc.png

        // $cvname = rand().time().$request->file('cv')->getClientOriginalName();

        $ex = $request->file('cv')->getClientOriginalExtension();

        $clientname = strtolower( $request->name );
        $clientname = str_replace(' ', '-', $clientname);
        $cvname = $clientname.'-cv-'.rand().'.'.$ex;

        // dd($clientname);

        // $cvname = rand().time().$request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads'), $cvname);
    }

    public function form5()
    {
        return view('forms.form5');
    }

    public function form5_data(Request $request)
    {
        $data = $request->except('_token');

        Mail::to('mm1358145@gmail.com')->send(new ContactMail($data));

    }
}
