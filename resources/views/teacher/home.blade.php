@extends('layout.TeacherMain')

@section('studentcontent')

<div class="col-xl-12">
    
    <div class="row"> 
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('teacher.teacherdash')}}" style="color: rgb(108, 117, 125);"><h5> Dashboard </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('teacher.teacherdash')}}" style="color: rgb(108, 117, 125);"><h5> Notes </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('teacher.teacherdash')}}" style="color: rgb(108, 117, 125);"><h5> Assignments </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
         
         
         
    </div> <!-- end row -->
</div> <!-- end col -->
  </div>


@endsection