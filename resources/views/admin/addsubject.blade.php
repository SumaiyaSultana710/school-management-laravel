@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Add Subject
@endsection

<div class="tab-content" data-select2-id="14">
<div class="tab-pane active" data-select2-id="13">
                    
<form method="POST" class="col-12 d-block ajaxForm" action="{{route('admin.addsubject')}}" id="student_admission_form" data-select2-id="student_admission_form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-12" data-select2-id="12">
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="id">Subject Code</label>
            <div class="col-md-9">
                <input type="text" id="id" name="id" class="form-control" placeholder="id" required="">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-md-3 col-form-label" for="name">Subject Name</label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="name" required="">
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
        <div class="text-center">
            <button type="submit" class="btn btn-secondary col-md-4 col-sm-12 mb-4">Add Subject</button>
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