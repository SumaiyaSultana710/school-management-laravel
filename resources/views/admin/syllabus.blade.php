@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Syllabus
@endsection
<div class="row ">
  <div class="col-12">
    <div class="card">
        <a class="btn btn-secondary" href="{{route('admin.addsyllabus')}}"> <h5> Create Syllabus </h5></a>
    </div> 
  </div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body" style="overflow: auto;">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
							<th>Title</th>
							<th>Class</th>
							<th>Subject</th>
							<th>Download</th>
						</tr>
					  </thead>
					<tbody>
					@for($i=0; $i != count($syllabus); $i++)
                        <tr>
                            <td>{{$syllabus[$i]->title}}</td>
                            <td>{{$syllabus[$i]->subjectname}}</td>
                            <td>{{$syllabus[$i]->classname}}</td>
                            <td><a class="btn btn btn-secondary" href="{{asset('/student/file')}}/{{$syllabus[$i]->directory}}" download><i class="fa fa-download" style="width:50%"></i> Download</a></td> 
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