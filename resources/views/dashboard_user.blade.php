<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> 
</head>

<body> 

	<div class="container">

			<h3>Hello User, {{session()->get('nama_user')}}</h3>
        <br/>
        <center>
        <a href="{{ route('logic')}}" class="btn btn-lg btn-primary">Logic</a>
        <a href="{{ route('data_siswa')}}" class="btn btn-lg btn-primary">Database</a>
        </center>

        <a href="{{ route('logout')}}">
        <h3>Logout Akun Disini</h3>
        </a>
        
    </div>

    <script src="{{url('assets/js/jquery.js')}}"></script> 
	<script src="{{url('assets/js/popper.js')}}"></script> 
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    
</body>
</html>