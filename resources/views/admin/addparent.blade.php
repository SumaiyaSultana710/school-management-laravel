@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Add Parent
@endsection
<div class="tab-content" data-select2-id="14">
<div class="tab-pane active" data-select2-id="13">
                    
<form method="POST" class="col-12 d-block ajaxForm" action="{{route('admin.addparent')}}" id="student_admission_form" data-select2-id="student_admission_form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12" data-select2-id="12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="id">ID</label>
            <div class="col-md-9">
                <input type="text" id="id" name="id" class="form-control" placeholder="id" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="sid">Student ID</label>
            <div class="col-md-9">
                <input type="text" id="sid" name="sid" class="form-control" placeholder="studentid" required="">
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
            <label class="col-md-3 col-form-label" for="relation">Relation with student</label>
            <div class="col-md-9">
                <input type="relation" class="form-control" id="relation" name="relation" placeholder="relation" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="password">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="occupation">Occupation</label>
            <div class="col-md-9">
                <input type="text" id="occupation" name="occupation" class="form-control" placeholder="occupation" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="phone">Phone</label>
            <div class="col-md-9">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-fileinput">Teacher profile image</label>
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
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4">Add Parent</button>
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
