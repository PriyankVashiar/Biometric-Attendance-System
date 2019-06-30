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
               
					<h1  Style="color:white; padding:-100px; top:2px bottom:100px font-size:200px"><b>&nbsp&nbsp  Cat Computers </b></h1>
                
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
                        <li><a href="change_pass.php"><i class="fa fa-lock"></i> Change Password</a>
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
                                    <div> <strong><?php echo $show; ?></strong></div>
                                <div class="user-text-online">
                                    <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
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
                        <a href=""><i class="fa fa-dashboard fa-fw"></i>Fill Attendence</a>
                    </li>
                    <li class="selected">
                        <a href="view_faculty.php"><i class="fa fa-dashboard fa-fw"></i>View Attendence</a>
                    </li>
					<li>
                        <a href="add_s.php"><i class="fa fa-dashboard fa-fw"></i>Add Student</a>
                    </li>
                     <li>
                        <a href="#.php"><i class="fa fa-bar-chart-o fa-fw"></i>Results</a>
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
                    <h1 class="page-header">Attendence</h1>
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
                        <form role="form">
                           <fieldset>
								<div class="form-group" style="text-align:center">
									
								
									
									<?php
									
									$a=$_POST["month"];
									$b=$_POST["year"];
									$c=$_POST["sub"];

									if(isset($_POST['submit']))
									{
	
										if($a=="" or $b=="" or $c=="")
										{
											header('Location: index_f.php');
										}
										else
										{
											header('Location: attendance_f.php');
										}
									}
									// $sql="SELECT * FROM student_info WHERE Email='$email'";
									// $rev=mysqli_query($con,$sql);
									// while($data=mysqli_fetch_array($rev))
									// {
									// 	$class=$data['class'];
									// 	$id=$data['id'];
									// }
					
									if($class=="c1" && $c=="sub1")
									{	
									 echo "<table border=1>";
									 echo "<tr><th>Date</th><th> Subject 1 </th></tr>";
										$q1="SELECT * FROM c1_sub1";
										//$q2="SELECT * FROM c1_sub2";
										
										$ex1=mysqli_query($con,$q1);
                                        $qr1="SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'c1_sub1'";
                                        $re=mysqli_query($con,$qr1);
                                        $ans=mysqli_num_rows($re);
				                						//$ex2=mysqli_query($con,$q1);
										// $datee[]=array();
										// $subject1[]=array();
										//$subject2[]=array();
										while($data=mysqli_fetch_array($ex1))
										{
											$date=$data["date"];
												
											$month=date('m',strtotime($date));
											$year=date('Y',strtotime($date));
											
											if($month==$a && $year==$b)
											{	 
												
												$datee[]=$data['date'];
												$subject1[]=$data[$id];
												
											}
										}
										for ($i=1 ; $i <=$ans; $i++)
										{	
											
											echo "<tr><td>".$datee[$i]."</td>";
											echo "<td>".$subject1[$i][0]."</td>";
											//echo "<td>".$subject2[$i][0]."</td></tr>";
										}
									}
									else if($class=="c1" && $c=="sub2")
									{
									 echo "<table border=1 >";
									 echo "<tr><th>Date</th><th> Subject 2</th></tr>";
										
										//$q1="SELECT * FROM c1_sub1";
										$q2="SELECT * FROM c1_sub2";
										
										//$ex1=mysqli_query($con,$q1);
										$ex2=mysqli_query($con,$q2);
										$datee[]=array();
										//$subject1[]=array();
										$subject2[]=array();
										while($data=mysqli_fetch_array($ex2))
										{
											$date=$data["date"];
												
											$month=date('m',strtotime($date));
											$year=date('Y',strtotime($date));
											
											if($month==$a && $year==$b)
											{	 
												$datee[]=$data['date'];
												$subject2[]=$data[$id];
											}
										}
										for ($i=1 ; $i < count($datee); $i++)
										{	
											
											echo "<tr><td>".$datee[$i]."</td>";
											echo "<td>".$subject2[$i][0]."</td></tr>";
										}
									
									}
									else if($class=="c2" && $c=="sub1")
									{	
									 echo "<table border=1 >";
									 echo "<tr><th>Date</th><th> Subject 1 </th></tr>";
										$q1="SELECT * FROM c2_sub1";
										//$q2="SELECT * FROM c1_sub2";
										
										$ex1=mysqli_query($con,$q1);
										//$ex2=mysqli_query($con,$q1);
										$datee[]=array();
										$subject1[]=array();
										//$subject2[]=array();
										while($data=mysqli_fetch_array($ex1))
										{
											$date=$data["date"];
												
											$month=date('m',strtotime($date));
											$year=date('Y',strtotime($date));
											
											if($month==$a && $year==$b)
											{	 
												
												$datee[]=$data['date'];
												$subject1[]=$data[$id];
												
											}
										}
										for ($i=1 ; $i < count($datee); $i++)
										{	
											
											echo "<tr><td>".$datee[$i]."</td>";
											echo "<td>".$subject1[$i][0]."</td>";
											//echo "<td>".$subject2[$i][0]."</td></tr>";
										}
									}
									else if($class=="c2" && $c=="sub2")
									{
									 echo "<table border=1>";
									 echo "<tr><th>Date</th><th> Subject 2</th></tr>";
										
										//$q1="SELECT * FROM c1_sub1";
										$q2="SELECT * FROM c2_sub2";
										
										//$ex1=mysqli_query($con,$q2);
										$ex2=mysqli_query($con,$q1);
										$datee[]=array();
										//$subject1[]=array();
										$subject2[]=array();
										while($data=mysqli_fetch_array($ex2))
										{
											$date=$data["date"];
												
											$month=date('m',strtotime($date));
											$year=date('Y',strtotime($date));
											
											if($month==$a && $year==$b)
											{	 
												$datee[]=$data['date'];
												$subject2[]=$data[$id];
											}
										}
										for ($i=1 ; $i < count($datee); $i++)
										{	
											
											echo "<tr><td>".$datee[$i]."</td>";
											echo "<td>".$subject2[$i][0]."</td></tr>";
										}
									
									}									
                                ?>
									

                                      
                                </div>
                           </fieldset>
                        </form>
                        
                 </div>
                <div id="report"> 
                   <a href="view_faculty.php" style="align:center"><input type="button" class="btn btn-primary" value="Back"  style="width:20%;height:6%; background-color:#007acc; color:white "></a>
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

