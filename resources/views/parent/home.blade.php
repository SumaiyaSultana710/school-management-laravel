@extends('layout.ParentMain')

@section('parentcontent')

<div class="col-xl-12">
    
    <div class="row"> 
        <div class="col-lg-3">
        <div class="card widget-flat" id="student" style="on">
            <div class="card-body">
            <a href="{{route('parent.parentdash')}}" style="color: rgb(108, 117, 125);"><h5> Dashboard </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="parent" style="on">
            <div class="card-body">
            <a href="{{route('parent.teacher')}}" style="color: rgb(108, 117, 125);"><h5> Teachers </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="parent" style="on">
            <div class="card-body">
            <a href="{{route('parent.routine')}}" style="color: rgb(108, 117, 125);"><h5> Class Routine</h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="parent" style="on">
            <div class="card-body">
            <a href="{{route('parent.subject')}}" style="color: rgb(108, 117, 125);"><h5> Subject </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="parent" style="on">
            <div class="card-body">
            <a href="{{route('parent.syllabus')}}" style="color: rgb(108, 117, 125);"><h5> Syllabus </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
        <div class="col-lg-3">
        <div class="card widget-flat" id="parent" style="on">
            <div class="card-body">
            <a href="{{route('parent.notes')}}" style="color: rgb(108, 117, 125);"><h5> Notes </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->      
        <div class="col-lg-3">
        <div class="card widget-flat" id="parent" style="on">
            <div class="card-body">
            <a href="{{route('parent.grades')}}" style="color: rgb(108, 117, 125);"><h5> Grades </h5></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
        </div> <!-- end col-->   
    </div> <!-- end row -->
</div> <!-- end col -->
  </div>


@endsection