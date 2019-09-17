<!DOCTYPE html>
<html>
<head>
	<title>Rules</title>
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
<h1><font color="red">Rules And Regulation</font></h1>
  <h2>Dear {{Auth::user()->name}} You have to maintain These conditions</h2>
  <p>1..</p>
  <p>2..</p>
  <p>3..</p>
  <p>4..</p>

  <div class="button">
  	<form action="{{route('home')}}" method="get">
  		<button class="btn btn-warning" type="submit" value="submit">Back</button>
  	</form>
  </div>
    </center>
</body>
</html>