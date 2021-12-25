@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Add Student
@endsection

<div class="tab-content" data-select2-id="14">
<div class="tab-pane active" data-select2-id="13">
                    
<form method="POST" class="col-12 d-block ajaxForm" action="{{route('admin.addstudent')}}" id="student_admission_form" data-select2-id="student_admission_form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12" data-select2-id="12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="id">ID</label>
            <div class="col-md-9">
                <input type="text" id="id" name="id" class="form-control" placeholder="id" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="name">Name</label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="name" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="email">Email</label>
            <div class="col-md-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="password">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="fathername">Father Name</label>
            <div class="col-md-9">
                <input type="text" id="fathername" name="fathername" class="form-control" placeholder="fathername" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="mothername">Mother Name</label>
            <div class="col-md-9">
                <input type="text" id="mothername" name="mothername" class="form-control" placeholder="mothername" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="religion">Religion</label>
            <div class="col-md-9">
                <input type="text" id="religion" name="religion" class="form-control" placeholder="religion" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="class_id">Class</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="class" id="class">
                @for($i=0; $i != count($class); $i++)
                    <option value="{{$class[$i]->id}}">{{$class[$i]->classname}}</option>
                @endfor
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="section_id">Section</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="section" id="section">
                    <option value="1">A</option>
                    <option value="2">B</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3" data-select2-id="11">
            <label class="col-md-3 col-form-label" for="gender">Gender</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-textarea">Current Address</label>
            <div class="col-md-9">
                <textarea class="form-control" id="example-textarea" rows="3" name="caddress" placeholder="Current address"></textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-textarea">Parmanent Address</label>
            <div class="col-md-9">
                <textarea class="form-control" id="example-textarea" rows="3" name="paddress" placeholder="Parmanent address"></textarea>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="phone">Phone</label>
            <div class="col-md-9">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-fileinput">Student profile image</label>
            <div>
                <input type="file" name="image" id= "image" class="form-control file-upload-info" >
                              
            </div>
            <div class="form-group row mb-3">
                <div class="col-md-9 custom-file-upload">
                    <div class="wrapper-image-preview" style="margin-left: -6px;">
                        <div class="box" style="width: 250px;">
                            <div class="js--image-preview" style="background-image: url(); background-color: #F5F5F5;"><img height="250px" width="250px"id="show_image"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image").change(function(){
                readURL(this);
            });
            </script>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4">Add student</button>
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