<!DOCTYPE html>
<html>
<head>
	<title>Issue-monitor</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/');?>node_modules/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<center>
	<h2>Issues</h2>
</center>
<center>
	<form action="" method="">
	<table class="table table-condensed" width="50">
		<thead>
			<th>User</th>
			<th>Book</th>
			<th>Look</th>
			<th>Date</th>
			<th>Status</th>
			<th>Position</th>
		</thead>
		<tbody>
			@foreach ($issues as $issue)
			
			<tr>
				<td>{{$issue['issue']['name']}}</td>
				
				<td>{{$issue['reserve'][0]['name']}}</td> <!-- reserve relation is a array under a user for thid reason an [0] have tobe defined -->
	<td><img src="{{$issue['reserve'][0]['image']}}" height="100px" width="100px"></td>
				<td>{{$issue['updated_at']}}</td>
				<td>
					<select class="form-control" name="status">
						<option>---</option>
						<option value="A">Assign</option>
						<option value="C">Confirm</option>
                        <option value="F">Reject</option>
                        <option value="D">Returned</option>						
				    </select>
				</td>
				<td><?php if($issue['status']=="A") { ?>
            <span class="badge badge-info">Assigned</span>

            <?php } else if($issue['status']=="I")  { ?>

            <span class="badge badge-danger">Not Assigned</span>

            <?php }else if ($issue['status']=="C")  { ?>

            <span class="badge badge-success">Confirmed</span>

            <?php }else if ($issue['status']=="D")  { ?>
            <span class="badge badge-warning">Returned</span>

            <?php }else if ($issue['status']=="F")  { ?>
            <span class="badge badge-secondary">Failed</span>
            <?php } ?> </td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="button">
	<button class="btn btn-info"  type="submit" value="">Update</button>
	</div>
	</form>
</center>
<center>
	<div class="button mt-2">
	<form action="dashboard" method="get">
		<button class="btn btn-warning" type="submit"  value="submit">Back</button>
	</form>
	</div>
</center>
</body>
</html>
<!-- {{$issue['status']}} -->