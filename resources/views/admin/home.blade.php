@extends('layout.AdminMain')

@section('admincontent')

<div class="col-xl-12">
    
    <div class="row"> 
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('admin.home')}}" style="color: rgb(108, 117, 125);"><h5> Dashboard </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('admin.teacher')}}" style="color: rgb(108, 117, 125);"><h5> Teachers </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('admin.student')}}" style="color: rgb(108, 117, 125);"><h5> Students </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('admin.parent')}}" style="color: rgb(108, 117, 125);"><h5> Parents </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
         
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('admin.subject')}}" style="color: rgb(108, 117, 125);"><h5> Subject </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('admin.syllabus')}}" style="color: rgb(108, 117, 125);"><h5> Syllabus </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
         
    </div> <!-- end row -->
</div> <!-- end col -->
  </div>


@endsection