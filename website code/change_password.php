<?php
session_start();
$show=$_SESSION['name'];
$email=$_SESSION['email'];
$old=$_POST['opass'];
$new=$_POST['pass'];
$conform=$_POST['cpass'];
$con=mysqli_connect("localhost","root","","erp");
if(!isset($_SESSION['name']))
{
   header("Location: index.html");
}
if($new==$conform)
{
$sql="UPDATE student_info SET Password ='$new' WHERE Email='$email' AND Password='$old'";
$result=mysqli_query($con,$sql);
$p=mysqli_affected_rows($con);
	
	if(!$p)
	{
		echo ("<script LANGUAGE='JavaScript'>
    alert('Old Password Does not Matched');
    window.location.href='change_pass.php';
    </script>");

	}
	else
	{
		session_destroy();
		echo ("<script LANGUAGE='JavaScript'>
    alert('Successfully updated! Login Again');
    window.location.href='index.html';
    </script>");

	}
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
    alert('Both New Password Does not Matched');
    window.location.href='change_pass.php';
    </script>");
}
?>