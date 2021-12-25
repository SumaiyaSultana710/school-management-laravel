@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Students
@endsection
<div class="row ">
  <div class="col-12">
    <div class="card">
        <a class="btn btn-secondary" href="{{route('admin.addstudent')}}"> <h5> Add New Student </h5></a>
    </div> 
  </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card" style="overflow: auto;">
            <div class="card-body teacher_content">
                
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th width="30%">Students</th>
                            <th></th>
                            <th></th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i != count($student); $i++)
                        <tr>
                            <td>
                            <div class="box">
                                <div class="js--image-preview" style="background-image: url(); background-color: #F5F5F5;"><img src="{{asset('/student/img')}}/{{$student[$i]->studentimage}}" height="60%" width="80%"></div>
                            </div>
                            </td>
                            <td colspan='2'><b>ID:</b>{{$student[$i]->studentid}}<br>
                                {{$student[$i]->studentname}}<br>
                                {{$student[$i]->class_id}}<br>
                                {{$student[$i]->studentgender}}<br>
                                <b>Contact:</b>{{$student[$i]->studentcontact}}<br>{{$student[$i]->student_academic_mail}}<br>
                                <b>Address:</b>{{$student[$i]->caddress}}
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('admin.editstudent', [$student[$i]->studentid])}}" role="button">Edit</a><br><br>
                                <a class="btn btn-secondary" href="{{route('admin.deletestudent', [$student[$i]->studentid])}}" role="button">Delete</a>
                            </td>
                        </tr>
                        @endfor
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


    @endsection