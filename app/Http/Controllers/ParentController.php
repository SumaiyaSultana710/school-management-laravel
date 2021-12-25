<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParentRequests;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    function home(Request $request){
    
        return view('parent.home');
    }
    function parentdash(Request $request){
        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $event = DB::table('event')->get();

        $notice = DB::table('notice')
                        ->join('subject', 'notice.subject_id', '=', 'subject.subject_id')
                        ->where('notice.class_id', $class)
                        ->where('notice.section_id', $section)
                        ->orderBy('notice.noticedate', 'desc')
                        ->limit(10)
                        ->get();

        return view('parent.stdash')->with('notice', $notice)->with('event', $event);
    }
    function parentprofile(Request $request){

        $value = $request->session()->get('parentid');

        $parent = DB::table('parent')->where('parentid', $value)->first();

        return view('parent.parentprofile')->with('parent', $parent);
    }

    function updateprofile(Request $request){

        $value = $request->session()->get('parentid');

        $parent = DB::table('parent')
        ->join('user','user.userid','=','parent.parentid')
        ->where('parentid', $value)->first();

        return view('parent.updateprofile')->with('parent', $parent);
    }

    function saveprofile(ParentRequests $request){
        $id = $request->session()->get('parentid');

        DB::table('parent')
              ->join('user','user.userid','=','parent.parentid')
              ->where('parentid', $id)
              ->update(['parent.parentname'      => $request->name,
                        'user.password'          => $request->password,
                        'parent.parentgmail'     => $request->email,
                        'parent.parentoccupation'=> $request->occupation,
                        'parent.relation'        => $request->parentrelation,
                        'parent.parentcontact'   => $request->phone]);
        return redirect()->route('parent.parentprofile');
    }
    function teacher(Request $request){

        $teacher = DB::table('teacher')
                        ->get();

        return view('parent.teacher')->with('teacher', $teacher);
    }
    function routine(Request $request){

        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $saturday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Saturday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $sunday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Sunday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $monday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Monday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $tuesday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Tuesday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $wednesday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Wednessday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $thursday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Thursday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        return view('parent.routine')->with('saturday', $saturday)
                                      ->with('sunday', $sunday)
                                      ->with('monday', $monday)
                                      ->with('tuesday', $tuesday)
                                      ->with('wednesday', $wednesday)
                                      ->with('thursday', $thursday);
    }
    function subject(Request $request){
        $class = $request->session()->get('class');
        $subject = DB::table('subject')
                        ->join('teacher', 'subject.subject_id', '=', 'teacher.subject_id')
                        ->where('class_id', $class)
                        ->get();
        return view('parent.subject')->with('subject', $subject);
    }
    function syllabus(Request $request){

        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $syllabus = DB::table('syllabus')
                        ->join('subject', 'syllabus.subject_id', '=', 'subject.subject_id')
                        ->join('class', 'syllabus.class_id', '=', 'class.id')
                        ->where('syllabus.class_id', $class)
                        ->get();
        return view('parent.syllabus')->with('syllabus', $syllabus);
    }
    function notes(Request $request){

        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $notes = DB::table('note')
                        ->join('subject', 'note.subject_id', '=', 'subject.subject_id')
                        ->where('note.class_id', $class)
                        ->where('note.section_id', $section)
                        ->get();
        return view('parent.notes')->with('notes', $notes);
    }
    
    function grade(Request $request){
            $id = $request->session()->get('userid');
            $class = $request->session()->get('class');
            $section = $request->session()->get('section');
    
            $grade = DB::table('result')
                            ->join('grade', 'result.subject_id', '=', 'grade.subject_id')
                            ->join('subject', 'result.subject_id', '=', 'subject.subject_id')
                            ->where('result.class_id', $class)
                            ->where('result.section_id', $section)
                            ->where('result.student_id', $id)
                            ->where('grade.class_id', $class)
                            ->where('grade.section_id', $section)
                            ->where('grade.student_id', $id)
                            ->get();
        
        return view('parent.grade')->with('grade', $grade);
    }
}
