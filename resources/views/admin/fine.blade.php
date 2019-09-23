<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
<h2>Penalty Invoice</h2>
<p>Your Caution money is</p>
<p><font color="red">{{Session::get('fine')}} /- Rupees</font></p>
<div class="button mt-2">
<form action="{{route('main')}}" method="get" >
	<button class="btn btn-warning" type="submit" value="submit">Back</button>
</form>	
</div>
<div>
	<button type="submit" value="submit" class="btn btn-success" onclick="window.print();return false">Print Invoice</button>
</div>
</center>
</body>
</html>