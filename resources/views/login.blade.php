<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>School Login</title>
    <link rel="shortcut icon" href="/student/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="/student/css/style.css">
    <link rel="stylesheet" type="text/css" href="/student/css/bootstrap.min.css">
	<link href="/student/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/student/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<style>
.card-body {	
	margin-top: 10%;
    margin-bottom: 10%;
    margin-left: 10%;
    margin-right: 10%;
}
</style>
<body>
    
    <div class="col-xl-12">
        <div class="card-body">
            <h1 class="mt-0">Log In</h1>
            <p class="text-muted mb-4"><h2>Enter_your_ID_and_password.</h2></p>

            <form method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="emailaddress"><h2>User ID:</h2></label>
                    <input style="font-size:18px; height:40px;"class="form-control" type="text" name="userid" placeholder="Enter your id">
                </div>
                <div class="form-group">
                    <label for="password"><h2>Password</h2></label>
                    <input  style="font-size:18px; height:40px;"class="form-control" type="password" name="password" placeholder="Enter your password">
                    
                </div>
                <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"><h2> login </h2></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>