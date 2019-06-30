<?php
session_start();
$show=$_SESSION['name'];
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","erp");
if(!isset($_SESSION['name']))
{
   header("Location: index.html");
}
$con=mysqli_connect("localhost","root","","erp");
$sql="select * from student_info where Email='$email'";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_assoc($result);
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
    <style type="text/css">

.col-251 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
.row1:after {
    content: "";
    display: table;
    clear: both;
}

.col-751 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
.row
{
    margin-top:2px; 
}
input[type=text] {
    width: 70%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 8px 5px 5px 0px;
    display: inline-block;
}
.bt{
     background-color:#0080ff;
     margin-left:180px;
    color: white;
    width: 100px;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer; 
}
.col-md-8
{
    margin-top: 50px;
}
.bt:hover{
    background-color:#0066cc;
}
h2
{
    margin-bottom : 20px;
    color:black;
}
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
                    <li class="selected">
                        <a href=""><i class="fa fa-dashboard fa-fw"></i>Attendence</a>
                    </li>
                     <li>
                        <a href="result.php"><i class="fa fa-bar-chart-o fa-fw"></i>Results</a>
                    </li>
                
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Documents<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="timetable.html">Timetable</a>
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
<div class="col-md-8"> 
    <h2>User Profile</h2>
    <hr>
  <form>
    <div class="row1">
      <div class="col-251">
        <label>ID Number</label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['id'] ?>>
      </div>
    </div>

        <div class="row1">
      <div class="col-251">
        <label>Name </label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['name'] ?>>
      </div>
    </div>

        <div class="row1">
      <div class="col-251">
        <label>Class</label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['class'] ?>>
      </div>
    </div>

        <div class="row1">
      <div class="col-251">
        <label>BirthDate</label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['birthdate'] ?>>
      </div>
    </div>

           <div class="row1">
      <div class="col-251">
        <label>Mobile No.</label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['mobile'] ?>>
      </div>
    </div>

           <div class="row1">
      <div class="col-251">
        <label>Email</label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['Email'] ?>>
      </div>
    </div>

           <div class="row1">
      <div class="col-251">
        <label>Address</label>
      </div>
      <div class="col-751">
        <input type="text" disabled value=<?php echo $res['address'] ?>>
      </div>
    </div>

  </form>
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

