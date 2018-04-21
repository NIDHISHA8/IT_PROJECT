<?php
session_start();
include('connection.php');
$sec=$_SESSION['sec'];
$query="select * from candidate where section=\"$sec\" and cgpa>=6.5";
$result=mysqli_query($dbh,$query) or die("error connecting");
echo '<form id="myform">';
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" id="na" name="vote" value='.$row['id'].'>'.$row['id'].'---'.$row['name'].'</input>';
echo '<br/>';
}
echo '</form>';

?>
