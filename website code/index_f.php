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
					


                    <li class="selected">
                        <a href=""><i class="fa fa-dashboard fa-fw"></i>Fill Attendence</a>
                    </li>
                    <li>
                        <a href="view_faculty.php"><i class="fa fa-dashboard fa-fw"></i>View Attendence</a>
                    </li>

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
                    <h1 class="page-header">Fill Attendence</h1>
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
                                   <table border="0" width="100%">
                                   <tr>
                  
                                    <tr>
                                    <td style="color:white;padding:10px;">
                                        <select name="class"  class="form-control" style="text-align:center; align:center">
                                            <option value="">(select class)</option>
                                            <option value="c1">class1 </option>
                                            <option value="c2">class2 </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="sub"   class="form-control" style="text-align:center; align:center">
                                            <option value="">(select subject)</option>
                                            <option value="sub1">subject1 </option>
                                            <option value="sub2">subject2 </option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="date" name="date" class="form-control" style="margin:10px; text-align:center; align:center; width:80%">
                                    </td>
                                    </tr>


                                    
                                    <tr><td> </td></tr>
                                    <tr><td>
                                        <br><br>
                                    <input type='submit' value='Submit' name='submit'  class='btn btn-primary' style='align:center; width:90%; background-color:green;'>
                                    </td></tr>
                                    </form>

                                                                     
                                    
                                    <?php

                                    if(isset($_POST['submit']))
                                    {
                                    ini_set('display_errors', 'Off');
                                    $flag=0;         
                                    $r_date=$_POST['date'];
                                    $r_sub=$_POST['sub']; 
                                    $r_class=$_POST['class']; 
                                    $com=$r_class."_".$r_sub;                 
                                    if($_POST['class']=="c1")
                                    {
                                        $qr1="SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'c1_sub1'";
                                        $re=mysqli_query($con,$qr1);
                                        $ans=mysqli_num_rows($re);
                                     
                                        $a=1;
                                        //echo "<input type='checkbox' name='cb1[]'>";
                                        echo "<form action='fill.php' method='post'>";
                                        while($ans>1)
                                        {
                                            echo "<tr><td style='padding:20px;margin-left:30px;'>".$a."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='cb1[]' value='".$a."'>"."<br></td></tr>";
                                            $ans--;
                                            $a++;
                                        }

                                    }
                                    elseif($_POST['class']=="c2"){
                                        $qr1="SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'c2_sub1'";
                                        $re=mysqli_query($con,$qr1);
                                        $ans=mysqli_num_rows($re);
                                     
                                        $a=1;
                                        //echo "<input type='checkbox' name='cb1[]'>";
                                        while($ans>1)
                                        {
                                            echo "<tr><td style='padding:20px;margin-left:30px;'>".$a."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='cb1[]' class='pad'>"."<br></td></tr>";
                                            $ans--;
                                            $a++;
                                        }
                                    }
                                    else{

                                    }
                                    
                                    /*$insert = "INSERT INTO submitted (cb) VALUES ('". implode(",", $_POST['options']) ."')";      
                                    $query = mysql_query($insert);*/    
                                    ?>
                                    
                                    <input type="hidden" value="<?php echo $r_date  ?>" name="rdate">
                                    <input type="hidden" value="<?php  echo $com ?>" name="rsub">

                                    </table><br><br>
                                    <br><br>
                                    <input type='submit' value='Fill Attendance' name='fill'  class='btn btn-primary' style='margin-left:-6%; align:center; width:20%; background-color:green;'>
                                    

                                    <?php

                                        }
                                    ?>
                                    
                                    
                                    

                                    </table>
                                </div>
                           </fieldset>
                        </form>
                        
                 </div>

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
<?php

    $class=$_POST["class"];
    $sub=$_POST["sub"];
    echo $class;
    echo $sub;
    if(isset($_POST['fill']))
    {
        $s=$_POST["cb1"];
        $date=$_POST["date"];
        echo "hello";
        echo $_POST["class"];
        $q1="INSERT INTO".$class;
        echo $q1;
        $r1=mysqli_query($con,$q1);
        echo $r1;
        for($i=1;$i<=$a;$i++)
        {
            if($i==$s[i])
            {
                $q = "UPDATE ".$class."_".$sub." SET`".$i."`='1' WHERE `date`='".$date."'";
                $r= mysqli_query($con,$q);
            }
        }
    }

?>