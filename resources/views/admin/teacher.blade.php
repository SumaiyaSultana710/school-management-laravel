@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Teachers
@endsection
<div class="row ">
  <div class="col-12">
    <div class="card">
        <a class="btn btn-secondary" href="{{route('admin.addteacher')}}"> <h5> Add New Teacher </h5></a>
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
                            <th width="30%">Teachers</th>
                            <th></th>
                            <th></th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="searchteacher">
                        @for($i=0; $i != count($teacher); $i++)
                        <tr>
                            <td>
                            <div class="box">
                                <div class="js--image-preview" style="background-image: url(); background-color: #F5F5F5;"><img src="{{asset('/student/img')}}/{{$teacher[$i]->teacherimage}}" height="40%" width="60%"></div>
                            </div>
                            </td>
                            <td colspan='2'><b>ID:</b>{{$teacher[$i]->teacherid}}<br>
                                {{$teacher[$i]->teachername}}<br>
                                {{$teacher[$i]->designation}}<br>
                                {{$teacher[$i]->qualification}}<br>
                                <b>Contact:</b>{{$teacher[$i]->teachercontact}}<br>{{$teacher[$i]->teachergmail}}<br>
                                <b>Address:</b>{{$teacher[$i]->teacheraddress}}
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('admin.editteacher', [$teacher[$i]->teacherid])}}" role="button">Edit</a><br><br>
                                <a class="btn btn-secondary" href="{{route('admin.deleteteacher', [$teacher[$i]->teacherid])}}" role="button">Delete</a>
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