<?php
if($_POST){
	$username=$_POST['username'];
	$comment=$_POST['comment'];
	$handle=fopen("a.txt", "a");
	fwrite($handle,"<b><i><br>" .$name."</i> said:<br>".$comment);
	fclose($handle);
}
	
	 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Comment System</title>
</head>
<body>
	
	<table border ='1' border="2" width="60%" >


			 <tr>    
      <td>
      <h2 align="center">Help-Center</h2>


      
        
      </td><br>
      <td width=80%>
			<b>Comment</b>
		
			</td>
			<td width=80%>
			
			<table   >
<h1>Post a Comment:</h1>
			<form action="" method="post"  >
				Name:<br/>
  <input type="text" name="name"  ><br>
  Comment:<br/><textarea rows="10" cols="30" name="comment" ></textarea><br><br>
  <input type="submit" value="Post Comment">
  

    </form>	
   <hr>
   <h2>All Comments</h2>
    <?php
    include "a.txt";
    ?>

    </table>	
</body>
</table>
</html