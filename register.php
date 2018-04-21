<?php
include('connection.php');
$id=$_POST['id1'];
$name=$_POST['name'];
$section=$_POST['section'];
$cgpa=$_POST['cgpa'];
$query_insert="insert into candidate(id,name,section,cgpa) values('$id','$name','$section','$cgpa');";
$insert_result =mysqli_query($dbh,$query_insert) or die ('error inserting');
mysqli_close($dbh);
echo '<p align=center>THANKYOU FOR REGISTERING </p>';
?>

