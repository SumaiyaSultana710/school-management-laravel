@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Update Parent
@endsection
<div class="tab-content" data-select2-id="14">
<div class="tab-pane active" data-select2-id="13">
                    
<form method="POST" class="col-12 d-block ajaxForm" action="{{url('admin/editparent')}}/{{$parent->parentid}}" id="student_admission_form" data-select2-id="student_admission_form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12" data-select2-id="12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="id">ID</label>
            <div class="col-md-9">
            <label class="col-md-3 col-form-label" >{{$parent->parentid}}</label>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="sid">Student ID</label>
            <div class="col-md-9">
            <label class="col-md-3 col-form-label" >{{$parent->studentid}}</label>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="name">Name</label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{$parent->parentname}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="email">Email</label>
            <div class="col-md-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$parent->parentgmail}}" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="relation">Relation with student</label>
            <div class="col-md-9">
                <input type="relation" class="form-control" id="relation" name="relation" placeholder="relation" value="{{$parent->relation}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="password">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{$parent->password}}" required="">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="occupation">Occupation</label>
            <div class="col-md-9">
                <input type="text" id="occupation" name="occupation" class="form-control" placeholder="occupation"  value="{{$parent->parentoccupation}}"required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="phone">Phone</label>
            <div class="col-md-9">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" value="{{$parent->parentcontact}}" required="">
            </div>
        </div>

        
        <div class="text-center">
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4">Update Parent</button>
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
