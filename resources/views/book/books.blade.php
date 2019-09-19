<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>

	<title>My BookS</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body background="Images/mybook.jpg">
	<style type="text/css">
		.content_box{
    float:left;
    width:100%;
}
.left_bar{
    float:left;
    width:15%;
    background:#eaf4ff;
    height:100vh;
}

.right_bar{
    float:left;
    width:85%;
    padding:15px;
        /*border-left:1px solid #ccc;*/
        height:100%;
}

.nav-tabs--vertical li{
    float:left;
    width:100%;
    padding:0;
    position:relative;
}


.nav-tabs--vertical li a{
    float:left;
    width:100%;
    padding: 15px;
    border-bottom:1px solid #adcff7;
    color:#1276F0;
}

.nav-tabs--vertical li a.active::after {
    content: "";
    border-color: #1276F0;
    border-style: solid;
    position: absolute;
    right: -8px;
    /* border-top: transparent; */
    border-right: transparent;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    /*border-bottom: 16px solid #1276F0;*/
      border-bottom: 16px solid #fff;
    border-top: 0;
    transform: rotate(270deg);
    z-index:999;
}
	</style>
	<center><h2><font color="#9911VV">My Books</font></h2></center>
    <center>
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th>Request Date</th>
    			<th>Book</th>
                <th></th>
    			<th>Status</th>
    		</tr>
    	</thead>
    	<tbody>
            @foreach($mybooks as $bookData)


            @if(!empty($bookData['reserve']))
    		<tr>
                <td>{{$bookData['updated_at']}}</td>
    			<td>{{$bookData['reserve'][0]['name']}}</td>
        <td><img src="{{$bookData['reserve'][0]['image']}}" height="100" width="100"></td>
    		   <td><?php if($bookData['status']=="A") { ?>
            <span class="label label-info">Assigned</span>

            <?php } else if($bookData['status']=="I")  { ?>

            <span class="label label-danger">Not Assigned</span>

            <?php }else if ($bookData['status']=="C")  { ?>

            <span class="label label-success">Confirmed</span>

            <?php }else if ($bookData['status']=="D")  { ?>
            <span class="label label-warning">Returned</span>

            <?php }else if ($bookData['status']=="F")  { ?>
            <span class="label label-default">Failed</span>
            <?php } ?></td>
    		</tr>
            @endif
           @endforeach
    	</tbody>
        <td><button type="submit" value="submit" class="btn btn-success" onclick="window.print();return false">Print Details</button></td>
    </table>
    <form action="{{route('home')}}" method="get">
    	<button class="btn btn-warning" type="submit" value="submit">Home</button>
    </form>
    </center>

</body>
</html>
<!--  -->