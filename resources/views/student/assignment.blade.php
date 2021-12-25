@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Assignment
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body teacher_content">
                <div class="items" style="overflow: auto;">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Subject</th>
                            <th>Teacher Name</th>
                            <th>Assignment</th>
                            <th>File</th>
                            <th>Date</th>
                            <th>Duedate</th>
                            <th>Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{session('msg')}}
                    @for($i=0; $i != count($assignment); $i++)  
                    <form action="{{asset('/student/upload')}}/{{$assignment[$i]->assignment_id}}", method="post", enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <tr>
                            <td width="20%">{{$assignment[$i]->subjectname}}</td>
                            <td width="20%">{{$assignment[$i]->teachername}}</td>
                            <td width="20%">{{$assignment[$i]->filename}}</td>
                            <td><a class="btn btn btn-secondary" href="{{asset('/student/file')}}/{{$assignment[$i]->directory}}" download><i class="fa fa-download" style="width:50%"></i> Download</a></td>
                            <td width="15%">{{$assignment[$i]->date}}</td>
                            <td width="15%">{{$assignment[$i]->duedate}}</td>
                            <td width="10%"><input class="btn btn btn-secondary" type="file" name="uploadfile"/><br><br><input class="btn btn btn-secondary" type="submit" value="Upload"/></td>
                        </tr>
                    </form>
                    @endfor
                    </tbody>
                    <div class="alert-danger">{{ $errors->first('uploadfile') }}</div>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3>Uploaded Assignments</h3>
            <div class="card-body teacher_content">
                <div class="items" style="overflow: auto;">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Subject</th>
                            <th>Teacher Name</th>
                            <th>Assignment</th>
                            <th>File</th>
                            <th>Upload Date</th>
                            <th>Duedate</th>
                            <th>Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i != count($upload); $i++)  
                        <tr>
                            <td width="20%">{{$upload[$i]->subjectname}}</td>
                            <td width="20%">{{$upload[$i]->teachername}}</td>
                            <td width="20%">{{$upload[$i]->filename}}</td>
                            <td><a class="btn btn btn-secondary" href="{{asset('/student/file')}}/{{$upload[$i]->directory}}" download><i class="fa fa-download" style="width:50%"></i> Download</a></td> 
                            <td width="15%">{{$upload[$i]->uploaddate}}</td>
                            <td width="15%">{{$upload[$i]->duedate}}</td>
                            <td><a class="btn btn btn-secondary" href="{{asset('/student/file')}}/{{$upload[$i]->uploadfilename}}" download><i class="fa fa-download" style="width:50%"></i> Download</a></td>
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
</div>
    
@endsection