<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller{
    //------admin_view_contact view----------
    public function admin_view_contact(){
        $data = DB::table('contact')->get();
        return view('admin.contact.contact', compact('data'));
    }
    //------admin_contact_post view----------
    public function admin_contact_post(Request $request){
        DB::table('contact')
        ->where('id', $request->id)
        ->update([
            'PHONE1' => $request->PHONE1,
            'PHONE2' => $request->PHONE2,
            'TELEPHONE1' => $request->TELEPHONE1,
            'TELEPHONE2' => $request->TELEPHONE2,
            'EMAIL' => $request->EMAIL,
            'ADDRESS' => $request->ADDRESS,
            'twitter' => $request->twitter,
            'PHONE1' => $request->PHONE1,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
        ]);
        return back()->with('Emessage', 'Contact Page Content Update Succefully');
    }
    //------admin_view_contact_form view----------
    public function admin_view_contact_form(){
        $contact_form_datas = DB::table('contact_form')->get();
        return view('admin.contact.contact_form', compact('contact_form_datas'));
    }
    //------contact_form_data_delete view----------
    public function contact_form_data_delete($id){
        DB::table('contact_form')->where('id',$id)->delete();
        return redirect()->back()->with('Emessage', 'Data Delete Succefully');
    }
    //------contact_form_data_details view----------
    public function contact_form_data_details($id){
        $contact_form_data = DB::table('contact_form')->where('id',$id)->get();
        return view('admin.contact.contact_form_details', compact('contact_form_data'));
    }
}
