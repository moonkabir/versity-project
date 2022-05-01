<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller{
    //------admin_view_about view----------
    public function admin_view_about(){
        $data = DB::table('about')->get();
        return view('admin.about.about', compact('data'));
    }
    //------admin_about_post view----------
    public function admin_about_post(Request $request){
        DB::table('about')
        ->where('id', $request->id)
        ->update([
            'page_title' => $request->page_title,
            'description' => $request->description,
        ]);
        return back()->with('Emessage', 'About Page Content Update Succefully');
    }
}
