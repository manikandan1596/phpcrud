<?php
$db=mysqli_connect('localhost','root','');

mysqli_select_db($db,'todo');

$title=$_POST['title'];
$description=$_POST['description'];
$duedate=$_POST['duedate'];

$sql = "INSERT INTO todo1(TITE,DISCRIPTION,DUEDATE) VALUES ('$title','$description','$duedate')";
	
	if(!mysqli_query($db,$sql))
	 {
		 echo '"<h1>" <Details you entered not inserted into the database"<h1>"';
	 }
	 {
		 echo '"<h1>"Details are inserted successfully"</h1>"';
	 }
 header("refresh:2; url=todo.php");
?>