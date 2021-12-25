<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequests;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    function home(){
        return view('teacher.home');
    }
    function teacherdash(){
        $event = DB::table('event')->get();

        $notice = DB::table('notice')
                        ->join('subject', 'notice.subject_id', '=', 'subject.subject_id')
                        ->orderBy('notice.noticedate', 'desc')
                        ->limit(10)
                        ->get();

        return view('teacher.teacherdash')->with('notice', $notice)->with('event', $event);
    }
    function note(){
        return view('teacher.home');
    }
    function assignment(){
        return view('teacher.home');
    }
    function teacherprofile(Request $request){

        $value = $request->session()->get('teacherid');

        $teacher = DB::table('teacher')->where('teacherid', $value)->first();

        return view('teacher.teacherprofile')->with('teacher', $teacher);
    }
    function updateprofile(Request $request){

        $value = $request->session()->get('teacherid');

        $teacher = DB::table('teacher')
                        ->join('user','user.userid','=','teacher.teacherid')
                        ->where('teacherid', $value)->first();

        return view('teacher.updateprofile')->with('teacher', $teacher);
    }

    function saveprofile(TeacherRequests $request){
        $id = $request->session()->get('teacherid');

        DB::table('teacher')
                    ->join('user','user.userid','=','teacher.teacherid')
                    ->where('teacherid', $id)
                    ->update(['teacher.teachername' => $request->name,
                        'user.password'          => $request->password,
                        'teacher.teachergmail'   => $request->email,
                        'teacher.teachercontact' => $request->phone,
                        'teacher.qualification'  => $request->qualification,
                        'teacher.teacheraddress' => $request->address]);
        return redirect()->route('teacher.teacherprofile');
    }
}
