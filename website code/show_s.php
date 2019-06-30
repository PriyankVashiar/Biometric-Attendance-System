<html>
<head>
<style>
    table,tr,th{
        text-align:center;
    } 
    div{
      
    }
</style>   
</head>
<body>
     <hr style="color:black; height:0px"> 
    <h2 style="color:darkgreen;"><center>Your Attendence Report</center> </h2><br>
    </body>
</html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","erp");
if(!isset($_SESSION['name']))
{
   header("Location: index.html");
}
$m=$_GET["month"];
$y=$_GET["year"];
$id=$_SESSION["id"];

    $sql="SELECT class FROM student_info WHERE id='$id'";
    $rev=mysqli_query($con,$sql);
    while($r=mysqli_fetch_array($rev))
    {
        $class=$r["class"];     
    }        
    
    echo "<table border=3 width=50%><tr> <th>Date</th> <th>subject 1</th> <th>subject 2</th></tr><tr>";
       
    $temp=$class."_sub1";
        
    $sql1="SELECT * FROM $temp WHERE date LIKE '%{$m}%'";
    $rev1=mysqli_query($con,$sql1);
    while($r=mysqli_fetch_array($rev))
    {       
            echo "hi";
            $t1=$r["date"]; 
            $t2=$r["$id"];          
            $x=date('d',strtotime($t1));
            echo "<td>".$x."</td><td>".$t2."</td><td></td></tr><tr>";     
    }
    
?>