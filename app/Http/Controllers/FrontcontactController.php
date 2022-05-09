<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Redirect;

class FrontcontactController extends Controller{

    //------contact_post view----------
    public function contact_post(Request $request){
        try {
            $rules = array(
                'name' => ['required', 'regex:/^[a-zA-Z .]+$/'],
                'phone' => ['required', 'regex:/^(?:\\+88|88)?(01[3-9]\\d{8})$/'],
                'email' => ['required', 'regex:/\S+@\S+\.\S+/'],
                'message' => ['required'],
            );
            $messages = array(
                'name' => 'Name is required',
                'phone' => 'Phone is required',
                'email' => 'Email is required',
                'message' => 'Message is required',
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return Redirect::back()->with('Emessage', $validator->errors()->first());
            }
            DB::table('contact_form')
            ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]);
            return back()->with('Emessage', 'Succefully submit your message');
        } catch (\Exception $e) {
            return Redirect::back()->with('Emessage', $e->getMessage());
        }
    }
}
