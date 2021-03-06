
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>School</title>
    <link rel="shortcut icon" href="{{asset('/parent/img/favicon.png')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('/parent/css/style.css')}}">

    <link href="{{asset('/parent/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/parent/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('/parent/js/jquery.min.js')}}"></script>
    <script src="{{asset('/parent/js/jspdf.min.js')}}"></script>
</head>

<body data-layout="detached">
 
<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="" class="topnav-logo" style = "min-width: unset;">
            <span class="topnav-logo-lg">
                <img src="{{asset('/parent/img/favicon.png')}}" alt="" height="40">
            </span>
        </a>
        <a class="button-menu-mobile"href="{{route('parent.home')}}">
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a></ul>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">     
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" href="{{route('logout')}}" role="button">
            Logout
            </a>
        </ul>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" href="{{route('parent.parentprofile')}}" role="button">
               {{session('parentname')}}
            </a>
        </ul>
</div>
</div>
<div class="container-fluid">
<div class="wrapper">

<div class="left-side-menu left-side-menu-detached content-main">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
        <img src="{{asset('/parent/img')}}/{{session('parentimage')}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">{{session('parentname')}}</span>
        </a>
    </div>
  <!--- Sidemenu -->
    <ul class="metismenu side-nav side-nav-light">
        <li class="side-nav-item"><a href="{{route('parent.parentdash')}}" class="side-nav-link">
            <span> Dashboard </span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('parent.teacher')}}" class="side-nav-link">
            <span>Teacher</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('parent.routine')}}" class="side-nav-link">
            
            <span>Class Routine</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('parent.subject')}}" class="side-nav-link">
            
            <span>Subject</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('parent.syllabus')}}" class="side-nav-link">
            
            <span>Syllabus</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('parent.notes')}}" class="side-nav-link">
            
            <span>Notes</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('parent.grades')}}" class="side-nav-link">
            <span>Grades</span></a>
        </li>
    </ul>
  <!-- End Sidebar -->
  <div class="clearfix"></div>

</div>
<!-- Left Sidebar End -->

<div class="content-page">
    <div class="content content-main">
        <div class="loadings hidden"></div>
<div class="row ">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <h4 class="page-title">@yield('title') </h4>
      </div> 
    </div> 
  </div>
</div>

@yield('parentcontent')
</body>
</html>
