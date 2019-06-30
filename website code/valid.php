<?php

$con=mysqli_connect("localhost","root","","erp");
$a=$_POST["email"];
$b=$_POST["password"];
$c=$_POST["user"];



if(isset($_POST["submit"]))
{
	
    if($a=="" or $b=="" or $c=="")
	{
		header('Location: index.html');
      
	}
	if($c=="Admin")
	{
		$sql="SELECT * FROM admin_info WHERE Email='$a' and Password='$b'";
		
		$rev=mysqli_query($con,$sql);
		$count=mysqli_num_rows($rev);
		if($count==1)
		{
			session_start();

            $sql2="SELECT name FROM admin_info WHERE Email='$a'";
             $rev2=mysqli_query($con,$sql2);
            while($cc=mysqli_fetch_array($rev2))
            {   
                
                $show=$cc["name"];
            }
            $_SESSION["name"]=$show;
            $_SESSION["email"]=$a;
			header('Location: add_f.php');
		}
		else
		{
			header('Location: index.html');
		}
	}

    if($c == 'Faculty')
	{
		$sql="SELECT * FROM faculty_info WHERE Email='$a' and Password='$b'";
		
		$rev=mysqli_query($con,$sql);
    
		$count=mysqli_num_rows($rev);
        //echo $count;
		if($count==1)
		{
			session_start();

            $sql2="SELECT name FROM faculty_info WHERE Email='$a'";
             $rev2=mysqli_query($con,$sql2);
            while($cc=mysqli_fetch_array($rev2))
            {   
                
                $show=$cc["name"];
            }
            $_SESSION["name"]=$show;
            $_SESSION["email"]=$a;
            header("Location: index_f.php");
           //echo $c;

		}
        else
		{
			header("Location: index.html");
		} 
	}
	if($c=="Student")
	{
		$sql="SELECT * FROM student_info WHERE Email='$a' and Password='$b'";
		//$sql1="SELECT id FROM student_info WHERE Email='$a'";
       
           
		$rev=mysqli_query($con,$sql);
        //$rev1=mysqli_query($con,$sql1);
       
        
		$count=mysqli_num_rows($rev);
		if($count==1)
		{ 
            session_start();

            $sql2="SELECT name FROM student_info WHERE Email='$a'";
             $rev2=mysqli_query($con,$sql2);
            while($cc=mysqli_fetch_array($rev2))
            {   
                
                $show=$cc["name"];
            }
            $_SESSION["name"]=$show;
            $_SESSION["email"]=$a;
			header('Location: index_s.php');
            // echo "hi";
		}
		else
		{
			header('Location: index.html');
            //echo "error";
		}
	}
	
}
mysqli_close($con);
?>