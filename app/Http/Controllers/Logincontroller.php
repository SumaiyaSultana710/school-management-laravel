<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logincontroller extends Controller
{
    function index(){
        return view('index');
    }

    function login(){
        return view('login');
    }

    function varify(Request $request){
        $request->validate([
            'userid'  => 'required|max:11|min:11',
            'password'  => 'required'
        ]);

       $data = DB::table('user')
                    ->where('userid', $request->userid)
                    ->where('password', $request->password)
                    ->get();

        if(count($data) > 0 ){
            //split
            $type= explode("-",$request->userid);

            if($type[1] == "03"){
                $request->session()->put('userid', $request->userid);
                $request->session()->put('type', $data[0]->type);

                $student = DB::table('student')
                        ->where('studentid', $request->userid)
                        ->get();
                $request->session()->put('studentname', $student[0]->studentname);
                $request->session()->put('studentimage', $student[0]->studentimage);
                $request->session()->put('class', $student[0]->class_id);
                $request->session()->put('section', $student[0]->section_id);
                return redirect()->route('student.home');
            }
            elseif($type[1] == "04"){
                $request->session()->put('parentid', $request->userid);
                $request->session()->put('type', $data[0]->type);

                $parent = DB::table('parent')
                        ->join('student', 'parent.studentid', '=', 'student.studentid')
                        ->where('parent.parentid', $request->userid)
                        ->get();
                $request->session()->put('parentname', $parent[0]->parentname);
                $request->session()->put('parentimage', $parent[0]->parentimage);
                $request->session()->put('userid', $parent[0]->studentid);
                $request->session()->put('class', $parent[0]->class_id);
                $request->session()->put('section', $parent[0]->section_id);
                return redirect()->route('parent.home');
            }
            elseif($type[1] == "02"){
                $request->session()->put('teacherid', $request->userid);
                $request->session()->put('type', $data[0]->type);

                $teacher = DB::table('teacher')
                        ->where('teacher.teacherid', $request->userid)
                        ->get();
                $request->session()->put('teachername', $teacher[0]->teachername);
                $request->session()->put('teacherimage', $teacher[0]->teacherimage);
                return redirect()->route('teacher.home');
            }
            elseif($type[1] == "01"){
                $request->session()->put('adminid', $request->userid);
                $request->session()->put('type', $data[0]->type);
                return redirect()->route('admin.home');
            }
        }else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login');
        }
    }
    function logout(Request $request){

    	$request->session()->flush();
    	return redirect('/login');
    }
}
