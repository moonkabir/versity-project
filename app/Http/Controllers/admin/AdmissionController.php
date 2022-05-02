<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Validator;
use Redirect;

class AdmissionController extends Controller{
    //------add_admission view----------
    public function add_admission(){
        return view('admin.admission.add_admission');
    }
    //------add_admission_post view----------
    public function add_admission_post(Request $request){
        // dd($request);
        try {            
            $rules = array(
                'title' => 'required',
                'description' => 'required',
            );
            $messages = array(
                'title' => 'Title Missing',
                'description' => 'Description Missing',
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return Redirect::back()->with('Emessage', $validator->errors()->first());
            }            
            DB::table('admission')->insert([
                'title' => $request->title,
                'description' => $request->description
            ]);
            return redirect('/admin/manage_admission')->with('Smessage', 'Admission Section Added Succefully');
        } catch (\Exception $e) {
            return Redirect::back()->with('Emessage', $e->getMessage());
        }
    }
    //------manage_admission view----------
    public function manage_admission(){
        $admission = DB::table('admission')->get();
        return view('admin.admission.manage_admission')->with('admission', $admission);
    } 
    //------delete_admission view----------
    public function delete_admission($id){
        DB::table('admission')->where('id',$id)->delete();
        return redirect()->back()->with('Emessage', 'Admission Section Delete Succefully');
    }
    //------edit_admission view----------
    public function edit_admission($id){
        $edit_data = DB::table('admission')->where('id',$id)->first();
        return view('admin.admission.edit_admission')->with('edit_data', $edit_data);
    }
    //------edit_admission_post view----------
    public function edit_admission_post(Request $request){
        DB::table('admission')
            ->where('id', $request->id)
            ->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        return redirect('/admin/manage_admission')->with('Smessage', 'Admission Section Updated Succefully');
    }
}
