<?php include 'connect.php';
$days_lived=$_POST['no_of_days_lived']; 
//session variable
$user=$_POST['username'];
$level_score=$_POST['no_of_days_lived'];
$water=$_POST['water'];
$food=$_POST['food'];
$fuel=$_POST['fuel'];
$dayoffood=$_POST['day_of_no_food'];
$dayofwater=$_POST['day_of_no_water'];
$dayoffuel=$_POST['day_of_no_fuel'];

$sql1="SELECT * FROM level1 WHERE tk_emailid ='$user'";
$result1=mysql_query($sql1) or die(mysql_error());
$row=mysql_fetch_array($result1);
	
if($row)
{  $sql2="UPDATE level1 set tk_water='$water'
	       WHERE tk_emailid =$user AND '$water' > tk_water";
 $result2=mysql_query($sql2) or die(mysql_error());
}
else
{ 
$sql2 = "INSERT INTO level1 (tk_emailid,tk_water,tk_food,tk_fuel,tk_no_of_days_lived,tk_nofood,tk_nowater,tk_nofuel,tk_level_score,tk_leader) VALUES ('$user','$water','$food','$fuel','$days_lived','$dayoffood','$dayofwater','$dayoffuel','$level_score','')";
$result2=mysql_query($sql2)or die(mysql_error());
}
?>