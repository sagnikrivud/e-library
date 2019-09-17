<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/');?>node_modules/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<center>
	<div class="card">
		<center>
			<div class="button mt-2">
<form action="{{route('issuemonitor')}}" method="get">
  <button class="btn btn-info" type="submit" value="submit">Issue-Monitor</button>
</form>
</div>
<div class="button mt-2">
<form action="{{route('booklist')}}" method="get">
  <button class="btn btn-info" type="submit" value="submit">Book List</button>
</form>
</div>
<div class="buton mt-2">
  <form action="{{route('member')}}" method="get">
    <button class="btn btn-primary" type="submit" value="submit">Members</button>
  </form>
</div>
<div class="button mt-2">
<form action="{{route('logout')}}" method="get">
  <button class="btn btn-danger" type="submit" value="submit">Logout<i class="fa fa-log-off"></i></button>
</form>
</div>
		</center>
	</div>
</center>
</body>
</html>