<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Validator;

class FacultyController extends Controller{
    //------add_faculty_member view----------
    public function add_faculty_member(){
        return view('admin.faculty.add_faculty_member');
    }
    //------add_faculty_member_post view----------
    public function add_faculty_member_post(Request $request){
        try {
            $rules = array(
                'name' => ['required', 'regex:/^[a-zA-Z .]+$/'],
                'contact_number' => ['required', 'unique:faculty_member', 'regex:/^(?:\\+88|88)?(01[3-9]\\d{8})$/'],
                'email' => ['required', 'unique:faculty_member', 'regex:/\S+@\S+\.\S+/'],
                'permanent_status' => 'required',
                'image' => 'nullable|max:2048',
            );

            $messages = array(
                'email.unique' => 'This Email is already been registered!.',
                'contact_number.unique' => 'This Phone Number is already been registered!',
                'image.max' => 'Photo must be below 2MB!',
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return [
                    'status' => false,
                    'message' => $validator->errors()->first()
                ];
            }
            if ($request->hasFile('image')) {
                $studentImage = $request->file('image');
                $imageName = uniqid() . '-' . date('Y-M-D-H-i-s') . '.' . $studentImage->getClientOriginalExtension();
                $directory = 'assets/img/student-images/';
                $imageUrl = $directory . $imageName;
                $studentImage->move($directory, $imageName);
            }
            DB::table('faculty_member')->insert([
                'name' => $request->name,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'description' => $request->description,
                'image' => $imageUrl,
                'designation' => $request->designation,
                'permanent_status' => $request->permanent_status,
            ]);
            return view('admin.faculty.manage_faculty_member');
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
    //------manage_faculty_member view----------
    public function manage_faculty_member(){
        $check_datas = DB::table('faculty_member')->get();
        // dd($check_data);
        return view('admin.faculty.manage_faculty_member')->with('check_datas', $check_datas);
    } 
    //------faculty_member_delete view----------
    public function faculty_member_delete($id){
        $check_datas = DB::table('faculty_member')
                            ->where('id',$id)
                            ->delete();
        return redirect()->back()->with('Emessage', 'Data Delete Succefully');
    }
    //------edit_faculty_member view----------
    public function edit_faculty_member($id){
        $edit_data = DB::table('faculty_member')->where('id',$id)->get();
        return view('admin.faculty.edit_faculty_member')->with('edit_data', $edit_data);
    }
    //------edit_faculty_member_post view----------
    public function edit_faculty_member_post(Request $request){
        DB::table('faculty_member')
            ->where('id', $request->id)
            ->update([
                'course_code' => $request->course_code,
                'course_title' => $request->course_title,
                'course_credit' => $request->course_credit,
                'semester' => $request->semester,
                'degree' => $request->degree,
                'status' => $request->status,
            ]);
        return redirect('/manage_faculty_member')->with('Smessage', 'Succefully faculty_member edited');
    }
}
