@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Parents
@endsection
<div class="row ">
  <div class="col-12">
    <div class="card">
        <a class="btn btn-secondary" href="{{route('admin.addparent')}}"> <h5> Add New Parent </h5></a>
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
                            <th width="30%">Parents</th>
                            <th></th>
                            <th></th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="searchteacher">
                        @for($i=0; $i != count($parent); $i++)
                        <tr>
                            <td>
                            <div class="box">
                                <div class="js--image-preview" style="background-image: url(); background-color: #F5F5F5;"><img src="{{asset('/student/img')}}/{{$parent[$i]->parentimage}}" height="40%" width="60%"></div>
                            </div>
                            </td>
                            <td colspan='2'><b>ID:</b>{{$parent[$i]->parentid}}<br>
                                {{$parent[$i]->parentname}}<br>
                                {{$parent[$i]->parentoccupation}}<br>
                                <b>Contact:</b>{{$parent[$i]->parentcontact}}<br>{{$parent[$i]->parentgmail}}
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('admin.editparent', [$parent[$i]->parentid])}}" role="button">Edit</a><br><br>
                                <a class="btn btn-secondary" href="{{route('admin.deleteparent', [$parent[$i]->parentid])}}" role="button">Delete</a>
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