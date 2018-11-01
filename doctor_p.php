<?php
$myfile=fopen("test.txt","r") or die ("unable to open");
$id=fread($myfile,filesize("test.txt"));
fclose($myfile);

$diag=$_POST["diagnosis"];

$con=mysqli_connect("localhost","root","123");
if($con)
{
}
else
{
}
$dbstatus=mysqli_select_db($con,"hospital");
if($dbstatus)
{
}
else
{
}
$query1="select * from patient where id=$id";
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);
$query2="update patient set diagnosis='$diag' where id='$id'";
$result2=mysqli_query($con,$query2);

?>
<html>
<head>
<title>Here is your Patient</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Emergency Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">

<!-- Custom Theme files -->
<link href="css/style_dp.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> PATIENT DETAILS</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Medical Information</h2>
			<form action="#" method="post">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>Name</p>
						<input type="text" name="name" placeholder="" required="" value="<?php echo $row[1]?>"/>
					</div>	
		
					<div class="gaps">
						<p>Gender</p>	
							<input type="text" name="gender" placeholder="" required="" value="<?php echo $row[3]?>"/>	
					</div>
					<div class="gaps">
						<p>Age</p>
						<input type="text" name="age" placeholder="" required="" value="<?php echo $row[2]?>"/>
					</div>	
					<div class="gaps">
						<p>Blood Group</p>
						<input type="text" name="blood" placeholder="" required="" value="<?php echo $row[4]?>"/>
					</div>			
				</div>
				<div class="right-agileinfo same">
					<div class="gaps">
						<p>Pulse</p>
						<input type="text" name="pulse" placeholder="" required="" value="<?php echo $row[10]?>"/>
					</div>
					<div class="gaps">
						<p>Temperature</p>
						<input type="text" name="temperature" placeholder="" required="" value="<?php echo $row[11]?>"/>
					</div>
					<div class="gaps">	
						<p>height</p>
						<input type="text" name="height" placeholder="" required="" value="<?php echo $row[8]?>"/>
					</div>
					<div class="gaps">
						<p>weight</p>
						<input type="text" name="weight" placeholder="" required="" value="<?php echo $row[9]?>"/>
					</div>
					</div>
					<div class="clear">
						<p id="diag">Diagnosis</p>
						<center>
						<textarea id="message" name="diagonoist" placeholder="" title="Please enter Your Comments"><?php echo($diag)?></textarea></center>
						</div>
				
				<div class="clear"></div>
				
				<input type="button" value="Print" onclick="window.print();">
			</form>
		</div>
   </div>

			<div class="copy w3ls">
		       <p></p>
	        </div>
		
				<link rel="stylesheet" href="css/jquery-ui_d.css" />
				

</body>
</html>
