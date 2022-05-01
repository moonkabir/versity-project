<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;
use Redirect;

class FacultyController extends Controller{
    //------add_faculty_member view----------
    public function add_faculty_member(){
        return view('admin.faculty.add_faculty_member');
    }
    //------add_faculty_member_post view----------
    public function add_faculty_member_post(Request $request){
        try {
            if($request->permanent_status == "Member"){
                $rules = array(
                    'name' => ['required', 'regex:/^[a-zA-Z .]+$/'],
                    'contact_number' => ['required','unique:faculty_member', 'regex:/^(?:\\+88|88)?(01[3-9]\\d{8})$/'],
                    'email' => ['required', 'unique:faculty_member', 'regex:/\S+@\S+\.\S+/'],
                    'permanent_status' => 'required',
                    'image' => 'nullable|max:2048',
                );
            }else{
                $rules = array(
                    'name' => ['required', 'regex:/^[a-zA-Z .]+$/'],
                    'permanent_status' => 'required',
                );
            }
            $messages = array(
                'email.unique' => 'This Email is already been registered!.',
                'contact_number.unique' => 'This Phone Number is already been registered!',
                'image.max' => 'Photo must be below 2MB!',
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return Redirect::back()->with('Emessage', $validator->errors()->first());
            }
            if($request->permanent_status == "Member"){
                if ($request->hasFile('image')) {
                    $studentImage = $request->file('image');
                    $imageName = uniqid() . '-' . date('Y-M-D-H-i-s') . '.' . $studentImage->getClientOriginalExtension();
                    $directory = 'assets/img/faculty-images/';
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
                DB::table('users')->insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make("Secret"),
                ]);
            }else{
                DB::table('faculty_member')->insert([
                    'name' => $request->name,
                    'contact_number' => $request->contact_number,
                    'email' => $request->email,
                    'description' => $request->description,
                    'designation' => $request->designation,
                    'permanent_status' => $request->permanent_status,
                    'institution' => $request->institution,
                ]);
            }
            return redirect('/admin/manage_faculty_member')->with('Smessage', 'Faculty Member add Succefully');
        } catch (\Exception $e) {
            // return response()->json(['status' => false, 'message' => $e->getMessage()]);
            // return Redirect::back()->with('Emessage', $e->getMessage());
            return Redirect::back()->with('Emessage', $e->getMessage());
        }
    }
    //------manage_faculty_member view----------
    public function manage_faculty_member(){
        $faculty_members = DB::table('faculty_member')->get();
        // dd($faculty_member);
        return view('admin.faculty.manage_faculty_member')->with('faculty_members', $faculty_members);
    } 
    //------delete_faculty_member view----------
    public function delete_faculty_member($id){
        $member_email = DB::table('faculty_member')->where('id',$id)->value("email");
        DB::table('faculty_member')->where('email',$member_email)->delete();
        DB::table('users')->where('email',$member_email)->delete();
        return redirect()->back()->with('Emessage', 'Faculty Member Delete Succefully');
    }
    //------edit_faculty_member view----------
    public function edit_faculty_member($id){
        $edit_data = DB::table('faculty_member')->where('id',$id)->get();
        return view('admin.faculty.edit_faculty_member')->with('edit_data', $edit_data);
    }
    //------edit_faculty_member_post view----------
    public function edit_faculty_member_post(Request $request){
        if ($request->hasFile('image')) {
            $studentImage = $request->file('image');
            $imageName = uniqid() . '-' . date('Y-M-D-H-i-s') . '.' . $studentImage->getClientOriginalExtension();
            $directory = 'assets/img/faculty-images/';
            $imageUrl = $directory . $imageName;
            $studentImage->move($directory, $imageName);
        }else{
            $imageUrl = DB::table('faculty_member')->where('id', $request->id)->value('image');
        }
        $member_email = DB::table('faculty_member')->where('id',$request->id)->value("email");
        DB::table('faculty_member')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'description' => $request->description,
                'image' => $imageUrl,
                'designation' => $request->designation,
                'permanent_status' => $request->permanent_status,
            ]);
        DB::table('users')
            ->where('email', $member_email)
            ->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        return redirect('/admin/manage_faculty_member')->with('Smessage', 'Faculty Member Update Succefully');
    }
    //------add_faculty_chairman view----------
    public function add_faculty_chairman(){
        $member_data = DB::table('faculty_member')->where("permanent_status", "Member")->get();
        return view('admin.faculty.add_faculty_chairman',compact('member_data'));
    }
    //------add_faculty_chairman_post view----------
    public function add_faculty_chairman_post(Request $request){
        $rules = array(
            'member_id' => 'required',
            'status' => 'required',
        );
        $messages = array(
            'member_id' => 'Member Id required',
            'status' => 'Status required',
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->with('Emessage', $validator->errors()->first());
        }
        DB::table('chairman')->insert([
            'member_id' => $request->member_id,
            'status' => $request->status,
            'chairman_speech' => $request->chairman_speech,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return redirect('/admin/manage_faculty_chairman')->with('Smessage', 'Faculty Chairman add Succefully');
    }
    //------manage_faculty_chairman view----------
    public function manage_faculty_chairman(){
        $faculty_chairmans = DB::table('chairman')
                            ->join('faculty_member', 'chairman.member_id', '=', 'faculty_member.id')
                            ->select('chairman.id as chairman_id', 'chairman.*', 'faculty_member.*')
                            ->get();
        // dd($faculty_chairmans);
        return view('admin.faculty.manage_faculty_chairman')->with('faculty_chairmans', $faculty_chairmans);
    } 
    //------delete_faculty_chairman view----------
    public function delete_faculty_chairman($id){
        DB::table('chairman')->where('id',$id)->delete();
        return redirect()->back()->with('Emessage', 'Faculty Chairman Delete Succefully');
    }
    //------edit_faculty_chairman view----------
    public function edit_faculty_chairman($id){
        $edit_data = DB::table('chairman')->where('id',$id)->first();
        $member_data = DB::table('faculty_member')->where('id',$edit_data->member_id)->first();
        return view('admin.faculty.edit_faculty_chairman', compact("edit_data","member_data"));
    }
    //------edit_faculty_chairman_post view----------
    public function edit_faculty_chairman_post(Request $request){
        // dd($request);
        DB::table('chairman')
            ->where('id', $request->id)
            ->update([
                'status' => $request->status,
                'chairman_speech' => $request->chairman_speech,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);
        return redirect('/admin/manage_faculty_chairman')->with('Smessage', 'Faculty Chairman Update Succefully');
    }


}
