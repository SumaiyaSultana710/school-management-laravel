@extends('layout.ParentMain')

@section('parentcontent')

@section('title')
Syllabus
@endsection

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body"style="overflow: auto;">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
						<th></th>
							<th>Title</th>
							<th>Syllabus</th>
							<th>Class</th>
							<th>Download</th>
						</tr>
					  </thead>
					<tbody>
					@for($i=0; $i != count($syllabus); $i++)
                        <tr>
						<td width="1%">{{$i+1}}</td>
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