
<?php


session_start();
ini_set('display_errors','off');
$show=$_SESSION['name'];
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","erp");
if(!isset($_SESSION['name']))
{
   header("Location: index.html");
}




$sub=$_POST['rsub'];
$date=$_POST['rdate'];

 
					$ps="insert into $sub(date,`1`,`2`,`3`,`4`,`5`,`6`,`7`,`8`) values('$date',0,0,0,0,0,0,0,0)";
					mysqli_query($con,$ps);

if(isset($_POST['fill']))
{
	if(!empty($_POST['cb1']))
	{
		foreach($_POST['cb1'] as $selected)
		{
			
			$sqls="update $sub set `$selected`=1 where date='$date'";
			if(mysqli_query($con,$sqls))
			{
				echo "<script>alert('Attendance mark successfully');</script>";
				header("Location: view_faculty.php");
			}
			else{

				echo "<script>alert('Attendance not successfully mark');</script>";
				header("Location: index_f.php");

			}
			
		}
	}

}







?>