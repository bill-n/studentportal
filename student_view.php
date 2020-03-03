<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style>
           /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    *{
      font-size: 14.5pt;

    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 500px;
      width: 430px;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
.btn-lg {
    padding: 10px 20px;
    font-size: 20px;
    border-radius: 10px;
    width:350px;
}


</style>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ae6e256227d3d7edc24d62b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">STUDENT PORTAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CSIT 408
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="slides/course_materials.php">Lecture slides</a></li>
          <li><a href="assignment/assignment_view.php">Assignment</a></li>
          <li><a href="c_materials/course_materials_view.php">Course materials</a></li>
          <li><a href="course_outline/courseoutline_view.php">Course outline</a></li>
        </ul>
      </li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CSCD 418
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cscd418/cscd418_slides/course_materials.php">Lecture slides</a></li>
          <li><a href="cscd418/assignment/assignment_view.php">Assignment</a></li>
          <li><a href="cscd418/c_materials/course_materials_view.php">Course materials</a></li>
          <li><a href="cscd418/course_outline/courseoutline_view.php">Course outline</a></li>
        </ul>
      </li>
      
        
        
        <li><a href="assignment/assignment_view.php"></a></li>
        <!--<li><a href="student_view.php">TIME TABLE</a></li>-->
        <li><a href="#"></a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Lecturer_login.php?logout='1'" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      
          <div><a href="#" class="btn btn-default btn-lg" role="button">CSIT 408</a></div><br />
       <div>
      <p>
        <a href="slides/course_materials.php" class="btn btn-info btn-lg">LECTURE SLIDES</a>
      </p>
    </div>
      <br />
          

      <div>
      <p>
         <a href="assignment/assignment_view.php" class="btn btn-success btn-lg" role="button">ASSIGNMENT</a>
       </p>
     </div>
    <br />

     <div>
      <p>
         <a href="c_materials/course_materials_view.php" class="btn btn-warning btn-lg "  role="button">COURSE MATERIALS</a>
       </p>
     </div>
     <br />
     
     
    
      <p>
         <a href="course_outline/courseoutline_view.php" class="btn btn-primary btn-lg" role="button">COURSE OUTLINE</a>
       </p>
       
     </div>

<div class="col-sm-3 sidenav" id="calender" style="float:right">
<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=auuf6n9328lm64bmv63vq9vpc0%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=Africa%2FAccra" style="border-width:0" width="430" height="480" frameborder="0" scrolling="no" style="padding-right:2px"></iframe>
  </div>

 
      
      
      
     <div class="col-sm-5 text-left">
          <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
  <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome  <strong><?php echo $_SESSION['username']; ?></strong>
      Click on the link you require in the left hand menu panel to view the available files.</p>
      <p> Go the main university of Ghana webpage - <a href="http://ug.edu.gh/">http://ug.edu.gh</a></p>
      <p>Main Library Website -  <a href="http://balme.ug.edu.gh">http://balme.ug.edu.gh </a></p>

      <p>Library Online Catalogue - <a href="http://library.ug.edu.gh">http://library.ug.edu.gh</a></p>

      <p>Off-Campus Access to Online Journal Databases <a href="http://ezproxy.ug.edu.gh/">http://ezproxy.ug.edu.gh/</a></p>

      <p>Past Questions - <a href="http://balme.ug.edu.gh/exam.papers/index.php">http://balme.ug.edu.gh/exam.papers/index.php</a></p>  

      
    <hr>
    <?php endif ?>
  </div>

    </div>


</div>
</div>





<?php


	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		
		header("location: index.html");
	}

?>
</body>
</html>