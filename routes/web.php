<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Logincontroller@index')->name('index');
Route::get('/login','App\Http\Controllers\Logincontroller@login')->name('login');
Route::post('/login','App\Http\Controllers\Logincontroller@varify');
Route::get('/logout','App\Http\Controllers\Logincontroller@logout')->name('logout');

Route::middleware(['session'])->group(function(){
	//Student
    Route::group(['middleware'=>['studenttype']], function(){
        Route::get('/student/home','App\Http\Controllers\StudentController@home')->name('student.home');
        Route::get('/student/stdash','App\Http\Controllers\StudentController@stdash')->name('student.stdash');
        Route::get('/student/stprofile','App\Http\Controllers\StudentController@stprofile')->name('student.stprofile');
        Route::get('/student/updateprofile','App\Http\Controllers\StudentController@updateprofile')->name('student.updateprofile');
        Route::post('/student/updateprofile','App\Http\Controllers\StudentController@saveprofile');

        Route::get('/student/teacher','App\Http\Controllers\StudentController@teacher')->name('student.teacher');
        Route::get('/student/routine','App\Http\Controllers\StudentController@routine')->name('student.routine');
        Route::get('/student/subject','App\Http\Controllers\StudentController@subject')->name('student.subject');
        Route::get('/student/syllabus','App\Http\Controllers\StudentController@syllabus')->name('student.syllabus');
        Route::get('/student/notes','App\Http\Controllers\StudentController@notes')->name('student.notes');
        Route::get('/student/assignment','App\Http\Controllers\StudentController@assignment')->name('student.assignment');
        Route::post('/student/upload/{id}', 'App\Http\Controllers\StudentController@upload');
        Route::get('/student/grade','App\Http\Controllers\StudentController@grade')->name('student.grade');
    });

    Route::group(['middleware'=>['parenttype']], function(){
        Route::get('/parent/home','App\Http\Controllers\ParentController@home')->name('parent.home');
        Route::get('/parent/parentdash','App\Http\Controllers\ParentController@parentdash')->name('parent.parentdash');
        Route::get('/parent/parentprofile','App\Http\Controllers\ParentController@parentprofile')->name('parent.parentprofile');
        Route::get('/parent/updateprofile','App\Http\Controllers\ParentController@updateprofile')->name('parent.updateprofile');
        Route::post('/parent/updateprofile','App\Http\Controllers\ParentController@saveprofile' );

        Route::get('/parent/teacher','App\Http\Controllers\ParentController@teacher')->name('parent.teacher');
        Route::get('/parent/routine','App\Http\Controllers\ParentController@routine')->name('parent.routine');
        Route::get('/parent/subject','App\Http\Controllers\ParentController@subject')->name('parent.subject');
        Route::get('/parent/syllabus','App\Http\Controllers\ParentController@syllabus')->name('parent.syllabus');
        Route::get('/parent/notes','App\Http\Controllers\ParentController@notes')->name('parent.notes');
        Route::get('/parent/grade','App\Http\Controllers\ParentController@grade')->name('parent.grades');
    });

    Route::group(['middleware'=>['teachertype']], function(){
        Route::get('/teacher/home','App\Http\Controllers\TeacherController@home')->name('teacher.home');
        Route::get('/teacher/teacherdash','App\Http\Controllers\TeacherController@teacherdash')->name('teacher.teacherdash');
        Route::get('/teacher/teacherprofile','App\Http\Controllers\TeacherController@teacherprofile')->name('teacher.teacherprofile');
        Route::get('/teacher/updateprofile','App\Http\Controllers\TeacherController@updateprofile')->name('teacher.updateprofile');
        Route::post('/teacher/updateprofile','App\Http\Controllers\TeacherController@saveprofile');

        Route::get('/teacher/note','App\Http\Controllers\TeacherController@note')->name('teacher.note');
        Route::get('/teacher/assignment','App\Http\Controllers\TeacherController@assignment')->name('teacher.assignment');
    });

    Route::group(['middleware'=>['admintype']], function(){
        Route::get('/admin/home','App\Http\Controllers\AdminController@home')->name('admin.home');
        Route::get('/admin/updateprofile','App\Http\Controllers\AdminController@updateprofile')->name('admin.updateprofile');
        Route::post('/admin/updateprofile','App\Http\Controllers\AdminController@saveprofile');

        Route::get('/admin/teacher','App\Http\Controllers\AdminController@teacher')->name('admin.teacher');
        Route::get('/admin/addteacher','App\Http\Controllers\AdminController@addteacher')->name('admin.addteacher');
        Route::post('/admin/addteacher','App\Http\Controllers\AdminController@saveteacher');
        Route::get('/admin/editteacher/{id}','App\Http\Controllers\AdminController@editteacher')->name('admin.editteacher');
        Route::post('/admin/editteacher/{id}','App\Http\Controllers\AdminController@updateteacher');
        Route::get('/admin/deleteteacher/{id}','App\Http\Controllers\AdminController@deleteteacher')->name('admin.deleteteacher');

        Route::get('/admin/student','App\Http\Controllers\AdminController@student')->name('admin.student');
        Route::get('/admin/addstudent','App\Http\Controllers\AdminController@addstudent')->name('admin.addstudent');
        Route::post('/admin/addstudent','App\Http\Controllers\AdminController@savestudent');
        Route::get('/admin/editstudent/{id}','App\Http\Controllers\AdminController@editstudent')->name('admin.editstudent');
        Route::post('/admin/updatestudent/{id}','App\Http\Controllers\AdminController@updatestudent');
        Route::get('/admin/deletestudent/{id}','App\Http\Controllers\AdminController@deletestudent')->name('admin.deletestudent');

        Route::get('/admin/parent','App\Http\Controllers\AdminController@parent')->name('admin.parent');
        Route::get('/admin/addparent','App\Http\Controllers\AdminController@addparent')->name('admin.addparent');
        Route::post('/admin/addparent','App\Http\Controllers\AdminController@saveparent');
        Route::get('/admin/editparent/{id}','App\Http\Controllers\AdminController@editparent')->name('admin.editparent');
        Route::post('/admin/editparent/{id}','App\Http\Controllers\AdminController@updateparent');
        Route::get('/admin/deleteparent/{id}','App\Http\Controllers\AdminController@deleteparent')->name('admin.deleteparent');

        Route::get('/admin/subject','App\Http\Controllers\AdminController@subject')->name('admin.subject');
        Route::get('/admin/addsubject','App\Http\Controllers\AdminController@addsubject')->name('admin.addsubject');
        Route::post('/admin/addsubject','App\Http\Controllers\AdminController@savesubject');
        
        Route::get('/admin/syllabus','App\Http\Controllers\AdminController@syllabus')->name('admin.syllabus');
        Route::get('/admin/addsyllabus','App\Http\Controllers\AdminController@addsyllabus')->name('admin.addsyllabus');
        Route::post('/admin/addsyllabus','App\Http\Controllers\AdminController@savesyllabus');

    });
});