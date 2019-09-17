<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	 <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body background="Images/about.jpg">
<style type="text/css"></style>
<h2>Hii...</h2>
<p>This is about....................</p>
<center>
	<form action="{{route('back')}}" method="get">
		<button class="btn btn-warning" type="submit" value="submit">Back</button>
	</form>
</center>
</body>
</html>