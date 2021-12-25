@extends('layout.AdminMain')

@section('admincontent')

@section('title')
Manage Profile
@endsection
<div class="row">
    <div id = "profile_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-md-center">
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Profile</h4>
                
                <form method="POST" class="col-12 " action="{{route('admin.updateprofile')}}">
        
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="name"> Name</label>
                            <div class="col-md-9">
                            <label class="col-md-3 col-form-label" >{{$admin->userid}}</label>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="password"> Change Password</label>
                            <div class="col-md-9">
                                <input type="password" id="password" name="password" class="form-control"  value="{{$admin->password}}" >
                                <div class="alert-secondary">{{ $errors->first('password') }}</div>
                            </div>
                        </div>
                        
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary col-xl-4 col-lg-4 col-md-12 col-sm-12">Update Profile</button>
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