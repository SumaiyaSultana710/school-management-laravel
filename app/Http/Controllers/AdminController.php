<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function home(Request $request){
    
        return view('admin.home');
    }
    //-------------------Teacher-------------------//
    function teacher(Request $request){

        $teacher = DB::table('teacher')
                        ->get();

        return view('admin.teacher')->with('teacher', $teacher);
    }
    function addteacher(Request $request){
        $subject = DB::table('subject')
                        ->get();

        return view('admin.addteacher')->with('subject', $subject);
    }
    function saveteacher(Request $request){
        $request->validate([
            'id' => 'required|max:11',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'designation' => 'required',
            'qualification' => 'required',
            'description' => 'required',
            'subject' => 'required',
            'address' => 'required',
            'phone' => 'required|max:11',
            'image' => 'required',
        ]);
        DB::table('teacher')->insert(
            ['teacherid' => $request->id,
            'teachername' => $request->name,
            'teachergmail' => $request->email,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'description' => $request->description,
            'subject_id' => $request->subject,
            'teacheraddress' => $request->address,
            'teachercontact' => $request->phone,
            'teacherimage' => $request->image]);
        DB::table('user')->insert(
            ['userid' => $request->id,
            'password' => $request->password,
            'type' => 'teacher',]);
        
        return redirect()->route('admin.teacher');
    }
    public function editteacher($id)
    {
        $teacher =DB::table('teacher')
                        ->join('user','user.userid','=','teacher.teacherid')
                        ->where('teacherid',$id)->first();
        $subject = DB::table('subject')
                        ->get();
        return view('admin.editteacher')->with('teacher', $teacher)->with('subject', $subject);
    }
    function updateteacher(Request $request, $id){
        DB::table('teacher')
        ->where('teacherid', $id)
        ->update(
            ['teachername' => $request->name,
            'teachergmail' => $request->email,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'description' => $request->description,
            'subject_id' => $request->subject,
            'teacheraddress' => $request->address,
            'teachercontact' => $request->phone]);
        DB::table('user')
            ->where('userid', $id)
            ->update(
                ['password' => $request->password]);
        return redirect()->route('admin.teacher');
    }
    public function deleteteacher($id)
    {   
        $delete_user= DB::table('user')->where('userid',$id)->delete();
        $delete_teacher=DB::table('teacher')->where('teacherid',$id)->delete();
        return redirect()->route('admin.teacher');
    }
    //-------------------Student-------------------//
    function student(Request $request){
    
        $student = DB::table('student')
                        ->get();

        return view('admin.student')->with('student', $student);
    }
    function addstudent(Request $request){
        $class = DB::table('class')
                        ->get();

        return view('admin.addstudent')->with('class', $class);
    }

    function savestudent(Request $request){
        $request->validate([
            'id' => 'required|max:11',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'class' => 'required',
            'section' => 'required',
            'gender' => 'required',
            'caddress' => 'required',
            'paddress' => 'required',
            'phone' => 'required|max:11',
            'religion' => 'required',
            'image' => 'required',
        ]);
        DB::table('student')->insert(
            ['studentid' => $request->id,
            'studentname' => $request->name,
            'student_academic_mail' => $request->email,
            'fathername' => $request->fathername,
            'mothername' => $request->mothername,
            'class_id' => $request->class,
            'section_id' => $request->section,
            'studentgender' => $request->gender,
            'caddress' => $request->caddress,
            'paddress' => $request->paddress,
            'studentcontact' => $request->phone,
            'studentreligion' => $request->religion,
            'studentimage' => $request->image]);
        DB::table('user')->insert(
            ['userid' => $request->id,
            'password' => $request->password,
            'type' => 'student',]);
        return redirect()->route('admin.student');
    }
    public function editstudent($id)
    {
        $student =DB::table('student')
                        ->join('user','user.userid','=','student.studentid')
                        ->where('studentid',$id)->first();
        $class = DB::table('class')->get();                           
        return view('admin.editstudent')->with('student', $student)->with('class', $class);
    }
    function updatestudent($id,Request $request){
        
        DB::table('student')
            ->where('studentid', $id)
            ->update(
                ['studentname' => $request->name,
                'student_academic_mail' => $request->email,
                'fathername' => $request->fathername,
                'mothername' => $request->mothername,
                'class_id' => $request->class,
                'section_id' => $request->section,
                'studentgender' => $request->gender,
                'caddress' => $request->caddress,
                'paddress' => $request->paddress,
                'studentcontact' => $request->phone,
                'studentreligion' => $request->religion]);
        DB::table('user')
            ->where('userid', $id)
            ->update(['password' => $request->password]);
        return redirect()->route('admin.student');
    }
    public function deletestudent($id)
    {   
        $delete_user= DB::table('user')->where('userid',$id)->delete();
        $delete_student=DB::table('student')->where('studentid',$id)->delete();
        return redirect()->route('admin.student');
    }

    //-------------------Parent-------------------//
    function parent(Request $request){
    
        $parent = DB::table('parent')
                        ->get();

        return view('admin.parent')->with('parent', $parent);
    }
    function addparent(Request $request){
        return view('admin.addparent');
    }

    function saveparent(Request $request){
        $request->validate([
            'id' => 'required|max:11',
            'sid' => 'required|max:11',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'occupation' => 'required',
            'relation' => 'required',
            'phone' => 'required|max:11',
            'image' => 'required',
        ]);
        DB::table('parent')->insert(
            ['parentid' => $request->id,
            'parentname' => $request->name,
            'parentgmail' => $request->email,
            'parentoccupation' => $request->occupation,
            'studentid' => $request->sid,
            'parentcontact' => $request->phone,
            'relation' => $request->relation,
            'parentimage' => $request->image]);
        DB::table('user')->insert(
            ['userid' => $request->id,
            'password' => $request->password,
            'type' => 'parent',]);
        return redirect()->route('admin.parent');
    }
    public function editparent($id)
    {
        $parent =DB::table('parent')
                        ->join('user','user.userid','=','parent.parentid')
                        ->where('parentid',$id)->first();
        $class = DB::table('class')->get();                           
        return view('admin.editparent')->with('parent', $parent)->with('class', $class);
    }
    function updateparent($id,Request $request){
        
        DB::table('parent')
            ->where('parentid', $id)
            ->update(
                ['parentname' => $request->name,
                'parentgmail' => $request->email,
                'parentoccupation' => $request->occupation,
                'parentcontact' => $request->phone,
                'relation' => $request->relation]);
        DB::table('user')
            ->where('userid', $id)
            ->update(['password' => $request->password]);
        return redirect()->route('admin.parent');
    }
    public function deleteparent($id)
    {   
        $delete_user= DB::table('user')->where('userid',$id)->delete();
        $delete_parent=DB::table('parent')->where('parentid',$id)->delete();
        return redirect()->route('admin.parent');
    }
    
    function subject(Request $request){
        $subject = DB::table('subject')
                        ->join('class','class.id','=','subject.class_id')
                        -> orderBy('class_id', 'asc')->get();

        return view('admin.subject')->with('subject', $subject);
    }
    function addsubject(Request $request){
        $class = DB::table('class')
                        ->get();
        return view('admin.addsubject')->with('class', $class);
    }
    function savesubject(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'class' => 'required']);
        DB::table('subject')->insert(
            ['subject_id' => $request->id,
            'subjectname' => $request->name,
            'class_id' => $request->class]);
        
        return redirect()->route('admin.subject');
    }
    
    function syllabus(Request $request){
    
        $syllabus = DB::table('syllabus')
                        ->join('class','class.id','=','syllabus.class_id')
                        ->join('subject','subject.subject_id','=','syllabus.subject_id')
                        -> orderBy('syllabus.class_id', 'asc')->get();

        return view('admin.syllabus')->with('syllabus', $syllabus);
    }
    function addsyllabus(Request $request){
        $class = DB::table('class')
                        ->get();
        $subject = DB::table('subject')
                        ->get();
        return view('admin.addsyllabus')->with('class', $class)->with('subject', $subject);
    }
    function savesyllabus(Request $request){
        
        if($request->hasfile('uploadfile') ){
            $AssignmentFile =  $request->file('uploadfile');
            $filename = $AssignmentFile->getClientOriginalName();
            
            if($AssignmentFile->move('teacher/file', $AssignmentFile->getClientOriginalName()) ){
                DB::table('syllabus')->insert(
                    ['title' => $request->title,
                    'directory' => $filename,
                    'class_id' => $request->class,
                    'subject_id' => $request->subject]);
                return redirect()->route('admin.syllabus');
            }else{
                return redirect()->route('admin.addsyllabus');
            }
        }

    }

    function updateprofile(Request $request){

        $value = $request->session()->get('adminid');

        $admin = DB::table('user')
                        ->where('userid', $value)->first();

        return view('admin.updateprofile')->with('admin', $admin);
    }

    function saveprofile(Request $request){
        $request->validate([
            'password'  => 'required'
        ]);
        $id = $request->session()->get('adminid');

        DB::table('user')
                    ->where('userid', $id)
                    ->update(['password' => $request->password]);
        return redirect()->route('admin.home');
    }
    
}
