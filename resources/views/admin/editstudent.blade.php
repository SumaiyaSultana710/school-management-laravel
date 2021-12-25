@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Update Student
@endsection

<div class="tab-content" data-select2-id="14">
<div class="tab-pane active" data-select2-id="13">
                    
<form method="POST" class="col-12 d-block ajaxForm" action="{{url('admin/updatestudent')}}/{{$student->studentid}}" id="student_admission_form" data-select2-id="student_admission_form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12" data-select2-id="12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="id">ID</label>
            <div class="col-md-9">
            <label class="col-md-3 col-form-label" >{{$student->studentid}}</label>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="name">Name</label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{$student->studentname}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="email">Email</label>
            <div class="col-md-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$student->student_academic_mail}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="password">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{$student->password}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="fathername">Father Name</label>
            <div class="col-md-9">
                <input type="text" id="fathername" name="fathername" class="form-control" placeholder="fathername" value="{{$student->fathername}}" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mothername">Mother Name</label>
            <div class="col-md-9">
                <input type="text" id="mothername" name="mothername" class="form-control" placeholder="mothername" value="{{$student->mothername}}" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="religion">Religion</label>
            <div class="col-md-9">
                <input type="text" id="religion" name="religion" class="form-control" placeholder="religion" value="{{$student->studentreligion}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="class_id">Class</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="class" id="class">
                @for($i=0; $i != count($class); $i++)
                    <option value="{{$class[$i]->id}}"{{($student->class_id === $class[$i]->id) ? 'Selected' : ''}}>{{$class[$i]->classname}}</option>
                @endfor
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="section_id">Section</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="section" id="section">
                    <option value="1"{{($student->section_id === "1") ? 'Selected' : ''}}>A</option>
                    <option value="2"{{($student->section_id === "2") ? 'Selected' : ''}}>B</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3" data-select2-id="11">
            <label class="col-md-3 col-form-label" for="gender">Gender</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="gender" id="gender">
                    <option value="male"{{($student->studentgender === "male") ? 'Selected' : ''}}>Male</option>
                    <option value="female" {{($student->studentgender === "female") ? 'Selected' : ''}}>Female</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-textarea">Current Address</label>
            <div class="col-md-9">
                <textarea class="form-control" id="example-textarea" rows="3" name="caddress" placeholder="Current address"value="{{$student->caddress}}" >{{$student->caddress}} </textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-textarea">Parmanent Address</label>
            <div class="col-md-9">
                <textarea class="form-control" id="example-textarea" rows="3" name="paddress" placeholder="Parmanent address"value="{{$student->paddress}}" >{{$student->paddress}}</textarea>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="phone">Phone</label>
            <div class="col-md-9">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required=""value="{{$student->studentcontact}}" >
            </div>
        </div>        
        <div class="text-center">
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4">Edit student</button>
        </div>
    </div>
</form>

<script type="text/javascript">
var form;
$(".ajaxForm").submit(function(e) {
  form = $(this);
  ajaxSubmit(e, form, refreshForm);
});
var refreshForm = function () {
    form.trigger("reset");
}
</script>
                </div>
            </div>
@endsection