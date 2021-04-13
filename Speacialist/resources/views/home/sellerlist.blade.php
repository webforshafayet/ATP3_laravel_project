<?php
session_start();
	
	 
?>



<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	
	<table border ='1' border="2" width="60%" >

		
		<tr>		
			<td>
			<b>Seller</b>
			<hr>
				<ul><a href="/home/create">Create user</a> |<br>
<a href="{{route('home.userlist')}}">View user list</a> |<br>
<a href="{{route('home.seller')}}">View Seller lists</a> |
<a href="/home/sellerlist">View Seller list</a> |<br>
<a href="/home/profile">Profile</a> |<br>
<a href="/home/notification">Notification</a> |<br>
<a href="/specialist">Specialist</a>|<br>
<a href="/home/help_center">Go Help_center</a> |<br>
<a href="/home/comment">Comment</a> |<br>
<a href="/logout">logout</a>| <br>

                    
				</ul>
			</td>
			<td width=80%>
			
			
			
<h2 align="center">View Volunteer Details </h2>
<table border ='1' border="2" width="60%" align="center" >
  <tr>
    <th>NAME</th>
    <th>ID</th>
    <th>Phone Number</th>
     <th>Email Adress</th>
  </tr>
  <tr>
    <td>Aklima</td>
    <td>01</td>
    <td>01746789345</td>
    <td>aklima@gmail.com</td>

  </tr>
  <tr>
    <td>Rahim</td>
    <td>02</td>
    <td>01746679378</td>
    <td>rahim@gmail.com</td>

  </tr>
   <tr>
    <td>karim</td>
    <td>03</td>
    <td>01346679398</td>
    <td>karim@gmail.com</td>

  </tr>

   <tr>
    <td>Mila</td>
    <td>04</td>
    <td>01744479378</td>
    <td>mila@gmail.com</td>

  </tr>
   <tr>
    <td>Shila</td>
    <td>05</td>
    <td>01714657937</td>
    <td>shila@gmail.com</td>

  </tr>
	


</table><br><br>







			
			
			
			</table>
				
    </form>		
</body>
</html