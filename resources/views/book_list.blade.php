<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/');?>node_modules/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="card">
	<form action="{{route('addbook')}}" method="get">
	<button class="btn btn-info" type="submit" value="submit">Add Book+</button>
    </form>
	<table class="table table-striped">
		<thead>
			<th>Book</th>
			<th>Look</th>
			<th>Author</th>
			<th>Quantity</th>
			<th>Add Copy</th>
		</thead>
		<tbody>
			@foreach($books as $bookData)
			<tr>
				
				<td>{{$bookData->name}}</td>
				<td><img src="{{$bookData->image}}" height="100px" width="100px" border="50%"></td>
				<td>{{$bookData->author}}</td>
				<td>{{$bookData->quantity}}</td>
				<td><a href="{{route('back')}}"><font color="#445JJJ">Add Copy</font></a></td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="button">
		<form action="{{route('dashboard')}}" method="get">
		<button class="" type="submit" value="submit">Back</button>
		</form>
	</div>
</div>
</body>
</html>