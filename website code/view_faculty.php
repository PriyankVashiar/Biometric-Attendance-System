<?php
session_start();
$show=$_SESSION['name'];
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","erp");
if(!isset($_SESSION['name']))
{
   header("Location: index.html");
}
/*else
{
    $getid=$_SESSION["name"];
    $sql="SELECT name FROM student_info WHERE id='$getid'";
    $rev=mysqli_query($con,$sql);
    while($c=mysqli_query($rev))
    {
        $show=$c["name"];
    }
}*/
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
  <!--  <script>
        function view()
        {
             var xml=new XMLHttpRequest();
             $mon=document.getElementById("month").innerHTML;
             $year=document.getElementById("year").innerHTML;
              xml.open("GET","show_s.php?month="+ $mon + "&year="+$year,true);
                 xml.send();
                 xml.onreadystatechange=function(){
                    if(xml.readyState==4 && xml.status==200)
                    {
                       document.getElementById("report").innerHTML=xml.responseText;             
                    }
                   
                };   
        }
    </script> -->

</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                    <h1  Style="color:white; padding:-100px; top:2px bottom:100px font-size:200px"><b>&nbsp;&nbsp;  Cat Computers </b></h1>
                
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
               


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="user_profile.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>

                       <li class="divider"></li>
                        <li><a href="change_pass_f.php"><i class="fa fa-lock"></i> Change Password</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                    <div> &nbsp;<strong><?php echo $show; ?></strong></div>
                                <div class="user-text-online">
                                    <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                    <br><br>
                                </div> 
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search" style="height:20px"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
					
                    <li>
                        <a href="index_f.php"><i class="fa fa-dashboard fa-fw"></i>Fill Attendence</a>
                    </li>
                    <li class="selected">
                        <a href=""><i class="fa fa-dashboard fa-fw"></i>View Attendence</a>
                    </li>


                    <li>
                        <a href="percentage.php"><i class="fa fa-dashboard fa-fw"></i>Low Attendance Status</a>
                        
                    </li>


					<li>
                        <a href="add_s.php"><i class="fa fa-dashboard fa-fw"></i>Add Student</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Results</a>
                    </li>
                
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Documents<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="timetable.php">Timetable</a>
                            </li>
                            <li>
                                <a href="notice.html">Notice </a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                   
                   
                  
                  
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">View Attendence</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b><b>Welcome to our System  </b>

                    </div>
                </div>
                <!--end  Welcome -->
            </div>
                           <div class="panel-body">
                        <form role="form" action="" method="post">
                           <fieldset>
                                <div class="form-group" style="text-align:center">
                                   <table border="0" width="100%"><tr><td> 
                                        <select name="month" id="month"  class="form-control" style="text-align:center; width:60%; align:center" required>
                                            <option value="">(select Month)</option>
                                            <option value="01">January </option>
                                            <option value="02">Febuary </option>
                                            <option value="03">March </option>
                                            <option value="04">April
                                            </option>
                                            <option value="05">May
                                            </option>
                                            <option value="06">June </option>
                                            <option value="07">July </option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October </option>
                                            <option value="11">November </option>
                                            <option value="12">December </option>
                                        </select>
                                        </td>
                                       <td>
                                           <select name="year" class="form-control" style="text-align:center; width:60%; align:center" required>
                                            <option  value="">(select Year)</option>
                                            <option value="2017">2017 </option>
                                            <option value="2018"> 2018 </option>
                                            <option value="2019"> 2019 </option>
                                        </select>
                                       </td>
                                       
                                       <td>
                                           <select name="sub" class="form-control" style="text-align:center; width:60%; align:center" required>
                                            <option  value="">(select Subject)</option>
                                            <option value="sub1">Subject 1 </option>
                                            <option value="sub2">Subject 2 </option>
                                            
                                        </select>
                                       </td>

                                       <td>
                                           <select name="clas" class="form-control" style="text-align:center; width:60%; align:center" required>
                                            <option  value="">(select class)</option>
                                            <option value="c1">class 1 </option>
                                            <option value="c2">class 2 </option>
                                            
                                        </select>
                                       </td>


                                       <td>
                                       
                                       
                                           
                                        <input type="submit" value="Submit" name="search"  class="btn btn-primary" style="text-align:center; width:100%; ">
                                       </td></tr>
                                   </table>
                                </div>
                           </fieldset>
                        </form>
                        
                 </div>

                 <?php

   if(isset($_POST['search']))
   {

        $sub=$_POST['sub'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $class=$_POST['clas'];

        $done=$class."_".$sub;

        echo"<div style='overflow-x:auto;'><table border=2><tr>";

        $queries="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='erp' AND `TABLE_NAME`='$done'";
        $final_res=mysqli_query($con,$queries);

        while($res=mysqli_fetch_assoc($final_res))
          {

            $ans[]=$res;
        }

            $columnArr = array_column($ans, 'COLUMN_NAME');
            $i=0;
            $c=count($columnArr);
            while($c>$i){
                echo" <th> $columnArr[$i] </th>";
                $i++;

            }
            

                $my_sql="select * from $done where month(date) = '$month'";
                $final_res=mysqli_query($con,$my_sql);

                
                while ($res=mysqli_fetch_array($final_res)) {
                    echo"<tr>";
                        $p=0;
                        while($p<$i){
                            if($p==0){
                                echo"<td>  <p>$res[$p]</p> </td>";
                            }else{

                            if($res[$p]==1){

                                echo"<td>  <p style='color:blue';>P</p> </td>";
                            }
                            else{
                                echo"<td>  <p style='color:red;'>A</p> </td>";
                            }
                        }

                            
                            $p++;
                        }
                        echo"</tr>";
                }
          //echo"<tr> <td> $columnArr[0] </td></tr>";



        
                
        echo "</table></div>";







   }

?>

                <div id="report"> 
                   
                </div>
        </div>
     
            
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
