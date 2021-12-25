@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Update Teacher
@endsection
<div class="tab-content" data-select2-id="14">
<div class="tab-pane active" data-select2-id="13">
                    
<form method="POST" class="col-12 d-block ajaxForm" action="{{url('admin/editteacher')}}/{{$teacher->teacherid}}" id="student_admission_form" data-select2-id="student_admission_form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12" data-select2-id="12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="id">ID</label>
            <div class="col-md-9">
            <label class="col-md-3 col-form-label" >{{$teacher->teacherid}}</label>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="name">Name</label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{$teacher->teachername}}"required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="email">Email</label>
            <div class="col-md-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$teacher->teachergmail}}"required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="password">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="password"value="{{$teacher->password}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="designation">Designation</label>
            <div class="col-md-9">
                <input type="text" id="designation" name="designation" class="form-control" placeholder="designation"value="{{$teacher->designation}}" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="qualification">Qualification</label>
            <div class="col-md-9">
                <input type="text" id="qualification" name="qualification" class="form-control" placeholder="qualification" value="{{$teacher->qualification}}"required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="description">Description</label>
            <div class="col-md-9">
                <input type="text" id="description" name="description" class="form-control" placeholder="description" value="{{$teacher->description}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="subject_id">Class</label>
            <div class="col-md-9" id="section_content">
                <select class="form-control" name="subject" id="subject">
                @for($i=0; $i != count($subject); $i++)
                    <option value="{{$subject[$i]->subject_id}}"{{($teacher->subject_id === $subject[$i]->subject_id) ? 'Selected' : ''}}>{{$subject[$i]->subjectname}}</option>
                @endfor
                </select>
            </div>
        </div>


        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="example-textarea">Address</label>
            <div class="col-md-9">
                <textarea class="form-control" id="example-textarea" rows="3" name="address" placeholder="Current address"value="{{$teacher->teachername}}">{{$teacher->teacheraddress}}</textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="phone">Phone</label>
            <div class="col-md-9">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone"value="{{$teacher->teachercontact}}" required="">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4">Edit Teacher</button>
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
