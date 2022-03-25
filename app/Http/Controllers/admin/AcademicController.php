<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AcademicController extends Controller{
    //------add_syllabus view----------
    public function add_syllabus(){
        return view('admin.academic.add_syllabus');
    }
    //------add_syllabus_post view----------
    public function add_syllabus_post(Request $request){
        // dd($request);
        $check_data = DB::table('syllabus')
            ->where('course_code', '=', $request->course_code)
            ->value('id');
            // dd($check_data);
        if($check_data == null){
            DB::table('syllabus')->insert([
                'course_code' => $request->course_code,
                'course_title' => $request->course_title,
                'course_credit' => $request->course_credit,
                'semester' => $request->semester,
                'degree' => $request->degree,
                'status' => $request->status,
            ]);
            return redirect('/manage_syllabus')->with('Smessage', 'Succefully syllabus added'); 
        }else{
            return redirect()->back()->with('Emessage', 'Duplicate course code');
        }
        
    }
    //------manage_syllabus view----------
    public function manage_syllabus(){
        $check_datas = DB::table('syllabus')->orderBy("course_code", 'asc')->get();
        // dd($check_data);
        return view('admin.academic.manage_syllabus')->with('check_datas', $check_datas);
    } 
    //------syllabus_delete view----------
    public function syllabus_delete($id){
        $check_datas = DB::table('syllabus')
                            ->where('id',$id)
                            ->delete();
        return redirect()->back()->with('Emessage', 'Data Delete Succefully');
    }
    //------edit_syllabus view----------
    public function edit_syllabus($id){
        $edit_data = DB::table('syllabus')->where('id',$id)->get();
        return view('admin.academic.edit_syllabus')->with('edit_data', $edit_data);
    }
    //------edit_syllabus_post view----------
    public function edit_syllabus_post(Request $request){
        DB::table('syllabus')
            ->where('id', $request->id)
            ->update([
                'course_code' => $request->course_code,
                'course_title' => $request->course_title,
                'course_credit' => $request->course_credit,
                'semester' => $request->semester,
                'degree' => $request->degree,
                'status' => $request->status,
            ]);
        return redirect('/manage_syllabus')->with('Smessage', 'Succefully syllabus edited');
    }
}
