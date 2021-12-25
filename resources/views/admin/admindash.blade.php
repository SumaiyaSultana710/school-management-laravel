@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Dashboard
@endsection
<div class="col-xl-12">
    <div class="row">
      <div class="col-xl-8">
        <div class="row">
          <div class="col-lg-6">
            <div class="card widget-flat" id="student" style="on">
              <div class="card-body">
                
                <h5 class="text-muted font-weight-normal mt-0" title="Number of Student"> Students <a href="" style="color: rgb(108, 117, 125); display: none;" id="student_list"></a></h5>
                <h3 class="mt-3 mb-3">1</h3>
                <p class="mb-0 text-muted">
                  <span class="text-nowrap">Total number of student</span>
                </p>
              </div> <!-- end card-body-->
            </div> <!-- end card-->
          </div> <!-- end col-->

          <div class="col-lg-6">
            <div class="card widget-flat" id="teacher" style="on">
              <div class="card-body">
                
                <h5 class="text-muted font-weight-normal mt-0" title="Number of Teacher">Teacher  <a href="" style="color: rgb(108, 117, 125); display: none;" id="teacher_list"></a></h5>
                <h3 class="mt-3 mb-3">1</h3>
                <p class="mb-0 text-muted">
                  <span class="text-nowrap">Total number of teacher</span>
                </p>
              </div> <!-- end card-body-->
            </div> <!-- end card-->
          </div> <!-- end col-->
        </div> <!-- end row -->

        <div class="row">
          <div class="col-lg-6">
            <div class="card widget-flat" id="parent">
              <div class="card-body">
                
                <h5 class="text-muted font-weight-normal mt-0" title="Number of Parents">  Parents <a href="" style="color: rgb(108, 117, 125); display: none;" id="parent_list"></a></h5>
                <h3 class="mt-3 mb-3">1</h3>
                <p class="mb-0 text-muted">
                  <span class="text-nowrap">Total number of parent</span>
                </p>
              </div> <!-- end card-body-->
            </div> <!-- end card-->
          </div> <!-- end col-->

        </div>
      </div> <!-- end col -->
      <div class="col-xl-4">
        <div class="card bg-primary">
          <div class="card-body">
            <h4 class="header-title text-white mb-2">Todays attendance</h4>
            <div class="text-center">
              <h3 class="font-weight-normal text-white mb-2">1</h3>
              <p class="text-light text-uppercase font-13 font-weight-bold">0 Students are attending today</p>
              </a>

            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>


@endsection