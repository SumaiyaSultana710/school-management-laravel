@extends('layout.ParentMain')

@section('parentcontent')

@section('title')
Teachers
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body teacher_content"style="overflow: auto;">
                
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr style="background-color: #313a46; color: #ababab;">
                            <th width="30%">Teacher</th>
                            <th></th>
                            <th></th>
                
                        </tr>
                    </thead>
                    <tbody id="searchteacher">
                        @for($i=0; $i != count($teacher); $i++)
                        <tr>
                            <td>
                            <div class="box">
                                <div class="js--image-preview" style="background-image: url(); background-color: #F5F5F5;"><img src="{{asset('/student/img')}}/{{$teacher[$i]->teacherimage}}" height="40%" width="40%"></div>
                            </div>
                            </td>
                            <td colspan='2'>{{$teacher[$i]->teachername}}<br>
                            {{$teacher[$i]->designation}}<br>
                            {{$teacher[$i]->qualification}}<br>
                            <b>Contact:</b>{{$teacher[$i]->teachercontact}}<br>{{$teacher[$i]->teachergmail}}
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