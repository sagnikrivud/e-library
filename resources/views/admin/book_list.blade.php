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
	<style type="text/css">
		img {
  border-radius: 8px;
            }
	</style>
<div class="card">
	<form action="{{route('addbook')}}" method="get">
	<button class="btn btn-info" type="submit" value="submit">Add Book+</button>
    </form>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Book</th>
			<th>Look</th>
			<th>Author</th>
			<th>Catagory</th>
			<th>Quantity</th>
			<th>Aviliblity</th>
			<th>Add Copy</th>

		</thead>
		<tbody>
			@foreach($books as $bookData)
			<tr>
				<td>{{$bookData->id}}</td>
				<td>{{$bookData->name}}</td>
				<td><img src="{{$bookData->image}}" height="100px" width="100px" border="50%"></td>
				<td>{{$bookData->author}}</td>
				<td>{{$bookData->catagory}}</td>
				<td>{{$bookData->quantity}}</td>
				<td>{{$bookData->available}}</td>
			<td><a href="/addcopy/{{$bookData['id']}}"><font color="#445JJJ">Add Copy</font></a></td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="button">
		<form action="{{route('main')}}" method="get">
		<button class="btn btn-warning" type="submit" value="submit">Back</button>
		</form>
	</div>
</div>
</body>
</html>