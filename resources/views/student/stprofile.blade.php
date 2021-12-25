@extends('layout.StudentMain')

@section('studentcontent')
@section('title')
My profile
@endsection
<div class="row">
    <div id = "profile_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-md-center">
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Student Profile</h4>
                <form class="col-12 profileAjaxForm" >
                    
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> ID</label>
                            <div class="col-md-10">
                                <label class="col-md-3 col-form-label" >{{$student->studentid}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> Name</label>
                            <div class="col-md-10">
                                <label class="col-md-3 col-form-label" >{{$student->studentname}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <label class="col-md-6 col-form-label">{{$student->student_academic_mail}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> Father name</label>
                            <div class="col-md-10">
                                <label class="col-md-3 col-form-label">{{$student->fathername}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> Mother name</label>
                            <div class="col-md-10">
                                <label class="col-md-3 col-form-label">{{$student->mothername}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label">Parmanent Address:</label>
                            <div class="col-md-10">
                                <label class="col-md-6 col-form-label">{{$student->paddress}}</label>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label">Current Address:</label>
                            <div class="col-md-10">
                                <label class="col-md-6 col-form-label">{{$student->caddress}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> Phone:</label>
                            <div class="col-md-10">
                                <label class="col-md-6 col-form-label">{{$student->studentcontact}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> Gender:</label>
                            <div class="col-md-10">
                                <label class="col-md-3 col-form-label">{{$student->studentgender}}</label>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label"> Religion:</label>
                            <div class="col-md-10">
                                <label class="col-md-3 col-form-label">{{$student->studentreligion}}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label" for="example-fileinput">Profile Image</label>
                            <div class="col-md-10 custom-file-upload">
                                <div class="wrapper-image-preview" style="margin-left: -6px;">
                                    <div class="box" style="width: 250px;">
                                        <div class="js--image-preview" style="background-image: url(); background-color: #F5F5F5;"><img src="/student/img/{{$student->studentimage}}" height="250px" width="250px"></div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{route('student.updateprofile')}}"class="button btn btn-secondary col-xl-4 col-lg-4 col-md-12 col-sm-12">Update Profile</a>
                        </div>
                    </div>
                    
                </form>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
</div>
    </div>
</div>

                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
@endsection