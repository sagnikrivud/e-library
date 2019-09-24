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
  <h1>Admin Dashboard</h1>
  <h2>{{Auth::user()->name}}</h2>

</center>
<div class="container">
<div class="card">
<center>
  <div class="button">
<form action="{{route('logout')}}" method="get">
  <button class="btn btn-danger" type="submit" value="submit">Logout</button>
</form>
</div>

<div class="button mt-2">
  <form action="{{route('main')}}" method="get">
    <button class="btn btn-success" type="submit" value="submit">Main</button>
  </form>
</div>
<div class="button mt-2">
  <form action="{{route('home')}}" method="get">
    <button class="btn btn-info" type="submit">Librery</button>
  </form>
</div>
</center>
</div>
</div>
</body>
</html>