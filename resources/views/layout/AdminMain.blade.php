
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>School</title>
    <link rel="shortcut icon" href="{{asset('/student/img/favicon.png')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('/student/css/style.css')}}">

    <link href="{{asset('/student/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/student/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('/student/js/jquery.min.js')}}"></script>
    <script src="{{asset('/student/js/jspdf.min.js')}}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body data-layout="detached">
 
<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="" class="topnav-logo" style = "min-width: unset;">
            <span class="topnav-logo-lg">
                <img src="{{asset('/student/img/favicon.png')}}" alt="" height="40">
            </span>
        </a>
        <a class="button-menu-mobile"href="{{route('admin.home')}}">
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </a>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">     
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" href="{{route('logout')}}" role="button">
            Logout
            </a>
        </ul>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" href="{{route('admin.updateprofile')}}" role="button">
               {{session('adminid')}}
            </a>
        </ul>
</div>
</div>
<div class="container-fluid">
<div class="wrapper">

<div class="left-side-menu left-side-menu-detached content-main">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <span class="leftbar-user-name">Admin</span>
            <span class="leftbar-user-name">{{session('adminid')}}</span>
        </a>
    </div>
  <!--- Sidemenu -->
    <ul class="metismenu side-nav side-nav-light">
        <li class="side-nav-item"><a href="{{route('admin.home')}}" class="side-nav-link">
            <span> Dashboard </span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('admin.teacher')}}" class="side-nav-link">
            <span> Teachers </span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('admin.student')}}" class="side-nav-link">
            <span> Students </span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('admin.parent')}}" class="side-nav-link">
            <span> Parents </span></a>
        </li>
        
        <li class="side-nav-item"><a href="{{route('admin.subject')}}" class="side-nav-link">
            
            <span>Subject</span></a>
        </li>
        
        <li class="side-nav-item"><a href="{{route('admin.syllabus')}}" class="side-nav-link">
            
            <span>Syllabus</span></a>
        </li>
        
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

@yield('admincontent')
</body>
</html>
