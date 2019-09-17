<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/');?>node_modules/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<center>
<h2><font color="#EE7788">E-Library Members</font></h2>
</center>
<center>
	<table class="table">
		<thead class="thead-light">
			<th>Name</th>
			<th>Image</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Updated At</th>
			<th>Status</th>
		</thead>
		<tbody>
			@foreach($users as $userData)
			<tr>
				<td>{{$userData->name}}</td>
				<td><img src="{{$userData->image}}" height="80px" width="80px"></td>
				<td>{{$userData->email}}</td>
				<td>{{$userData->mobile}}</td>
				<td>{{$userData->updated_at}}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="button mt-2">
		<form action="{{route('main')}}" method="get">
			<button class="btn btn-warning" type="submit" value="submit">Back</button>
		</form>
	</div>
</center>
</body>
</html>