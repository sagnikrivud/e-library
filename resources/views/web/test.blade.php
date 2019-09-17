<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{route('issueupdate')}}" method="post">
	@csrf
	<table>
		<thead>
			<th>ID</th>
			<th>Book</th>
			<th>status</th>
			<th>Submit</th>
		</thead>
		<tbody>
			<tr>
				
				<td>1</td>
				<td>Harrypotter</td>
				<td>
				<select name="status">
				<option value="1">Assign</option>
				<option value="2">Confirm</option>
				<option value="3">Return</option>	
				</select>
			     </td>
				<td><button type="submit" value="id" name="id">Update</button></td>
				<td>2</td>
				<td>ajkhf</td>
				<td>
				<select name="status">
				<option value="1">Assign</option>
				<option value="2">Confirm</option>
				<option value="3">Return</option>	
				</select>
			     </td>
				<td><button type="submit" value="id" name="id">Update</button></td>
			</tr>
		</tbody>
	</table>
</form>
</body>
</html>