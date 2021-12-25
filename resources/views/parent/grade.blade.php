@extends('layout.ParentMain')

@section('parentcontent')
@section('title')
Gradesheet
@endsection


<div class="row" id="contnet">
    <div class="col-12">
        <div class="card" style="overflow: auto;">
            <div class="card-body teacher_content">
                <h2>Gradesheet</h2>
                <h3>Exam:Final</h3>
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th>Subject</th>
                            <th>Attendance</th>
                            <th>Mid</th>
                            <th>Final</th>
                            <th>Total</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i != count($grade); $i++) 
                        <tr>
                            <td width="20%">{{$grade[$i]->subjectname}}</td>
                            <td width="20%">{{$grade[$i]->attendance}}</td>
                            <td width="20%">{{$grade[$i]->midmarks}}</td>
                            <td width="20%">{{$grade[$i]->finalmarks}}</td>
                            <td width="20%">{{$grade[$i]->total}}</td>
                            <td width="20%">{{$grade[$i]->finalgrade}}</td>
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