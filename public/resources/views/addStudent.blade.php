<!DOCTYPE html>
<html>
<head>
	<title>add student</title>
</head>
<body>
	<div>
		<form action="#" method="POST" accept-charset="utf-8">
			{{ csrf_field() }}
			<h2>Add student</h2>
			<table>
				<tr>
					<th>Name: </th>
					<td><input type="text" name="studentName"></td>
				</tr>
			</table>
			<input type="submit" name="add" value="Add">
		</form>
	</div>	
</body>
</html>