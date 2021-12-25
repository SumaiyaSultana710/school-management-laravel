@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Subjects
@endsection
<div class="row ">
  <div class="col-12">
    <div class="card">
        <a class="btn btn-secondary" href="{{route('admin.addsubject')}}"> <h5> Add New Subject </h5></a>
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
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                    @for($i=0; $i != count($subject); $i++)
                        <tr>
                            <td>{{$subject[$i]->subject_id}}</td>
                            <td>{{$subject[$i]->subjectname}}</td>
                            <td>{{$subject[$i]->classname}}</td>
                            
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