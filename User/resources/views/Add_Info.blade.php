<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<form method = "post">
	<center>
		<table width="900px" border="0">
			<tr height="80px" width="800px" align="center">
				<td colspan="3">
					 <h1>Add Information</h1>
				</td>
			</tr>
			<tr>
				<td>Information</td>
				<td><input type="text" id="info" name="info" ></td>
			</tr>	
			<tr height="40px">
				<td colspan="3" align="center">
					<br/>
					<input type="submit" name="submit" value="Add">
</br>
<br><a href="/home"><input type="button" value=" Back"></a>
                    <a href="/logout">logout</a>
				</td>
			</tr>
	</center>
</form>
</body>
</html>
