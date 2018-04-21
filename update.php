<?php
session_start();
include('connection.php');
$name=$_GET['q'];
$query="update candidate set vote_count=vote_count+1 where id=\"$name\"";
mysqli_query($dbh,$query) or die("error querying");
$i=$_SESSION['id'];
$query="update login set voted=1 where id=\"$i\"";
mysqli_query($dbh,$query) or die("error querying");
?>

