<html>
<title>STUDENT PORTAL</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
<link href="globe.png" rel="shortcut icon">
<?php
date_default_timezone_set("Asia/Calcutta");
//echo date_default_timezone_get();
?>


<?php
$conn=new PDO('mysql:host=localhost; dbname=cscd418', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  
  move_uploaded_file($temp,"files/".$name);

$query=$conn->query("INSERT INTO course_outline (name,date) VALUES ('$name','$date')");
if($query){
header("location:upload_coutline.php");
}
else{
die(mysql_error());
}
}
?>


<html>
<body>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<?php include('dbcon.php'); ?>
<style>
.table tr th{
	
	border:#eee 1px solid;
	
	position:relative;
	#font-family:"Times New Roman", Times, serif;
	font-size:12px;
	text-transform:uppercase;
	}
	table tr td{
	
	border:#eee 1px solid;
	color:#000;
	position:relative;
	#font-family:"Times New Roman", Times, serif;
	font-size:12px;
	
	text-transform:uppercase;
	}
	
#wb_Form1
{
   background-color: #00BFFF;
   border: 0px #000 solid;
  
}
#photo
{
   border: 1px #A9A9A9 solid;
   background-color: #00BFFF;
   color: #fff;
   font-family:Arial;
   font-size: 20px;
}
	</style>
	
	<div class="alert alert-info">
                              
                               
						
                            </div>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
		
			<tr><td><form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
				
					<input type="file" name="photo" id="photo"  required="required"></td>
					<td><input type="submit" class="btn btn-danger" value="SUBMIT" name="submit">
			</form> <strong></strong></tr></td></table>
							 <div class="col-md-18">
	<div class="container-fluid" style="margin-top:0px;">
   <div class = "row">
   		 <div>
     	<br />
      <p>
     
         <a href="../../lecturer_view.php" class="btn btn-info btn-lg">Go back</a>
      </p>
    </div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">


							<form method="post" action="delete.php" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
                            
                            <thead>
						
                                <tr>
                                    
                                    <th>ID</th>
                                    <th>FILE NAME</th>
                                   <th>Date</th>
				<th>Download</th>
				<th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($conn,"select * from course_outline ORDER BY id DESC");
							while($row=mysqli_fetch_array($query)){
							$id=$row['id'];
							$name=$row['name'];
							$date=$row['date'];
							?>
                              
										<tr>
										
                                         <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['name'] ?></td>
                                         <td><?php echo $row['date'] ?></td>
										<td>
				<a href="download.php?filename=<?php echo $name;?>" title="click to download"><span class="glyphicon glyphicon-paperclip" style="font-size:20px; color:blue"></span></a>
				</td>
				<td>
				<a href="delete.php?del=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
				</td>
                                </tr>
                         
						          <?php } ?>
                            </tbody>
                        </table>
						
                              
                               
								
                            </div>
          
</form>

        </div>
        </div>
        </div>
    </div>



</body>
</html>


