<?php
session_start();
include('connection.php');
$username=$_POST['name'];
$_SESSION['id']=$username;
$pass=$_POST['password'];
$query="select * from login where id=\"$username\"";
$result=mysqli_query($dbh,$query) or die("error querying");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row['password']==$pass && $row['user_type']==0)
{
if($row['voted']==1)
{
echo "already voted";
echo '<a href="login.html">logout </a>';
}
else
{
$_SESSION['sec']=$row['section'];
header('Location:ajax1.html');
}
}
else if($row['password']==$pass  && $row['user_type']==1)
header('Location:admin.php');
else
header('Location:login.html');
}
?>

