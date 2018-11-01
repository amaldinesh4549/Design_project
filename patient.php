<?php
$name=$_POST["name"];

$age=$_POST["age"];

$gender=$_POST["gender"];

$address=$_POST["address"];

$email=$_POST["email"];

$phone=$_POST["phone"];

$id=$phone;

$blood=$_POST["blood"];

$height=$_POST["height"];

$weight=$_POST["weight"];
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
$query1="insert into patient(id,name,age,gender,BG,email,phone,address,height,weight)
         values($id,'$name',$age,'$gender','$blood','$email',$phone,'$address',$height,$weight)
           ";
$result1=mysqli_query($con,$query1);

$myfile=fopen("test.txt","w") or die ("unable to open");
fwrite($myfile,$id);
fclose($myfile);

?>

<html>
<head>
<style>
body {
    background:url('images/patientbg.png') no-repeat 0%87% fixed;
    background-size: cover;
}
input[type="submit"] {
    color: white;
    background: #008EA4;
    border: none;
    padding: 10px 40px;
    font-size: 30px;
    border-radius: 14px;
    margin: 400px;
	font-family: 'Lato', sans-serif;
	cursor:pointer;
	text-transform:uppercase;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
input[type="submit"]:hover {
    background: #FFFFFF;
    color: #008EA4;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
input[type="text"]  {
    outline: none;
    font-size: 1em;
    margin: 2px 0px 12px 1px;
    color: black;
    padding: 8px 34px;
    border: none;
    border-radius: 2px;
    width: 68%;
    font-family: 'Lato', sans-serif;
	visibility: hidden;
}
</style>	
</head>
<body>
<form action="pulse1.php" method="get">
	<input type="text" name="id" value="<?php echo $phone; ?>">
	<center>
	<input type="submit" name="ok" value="OK">
	</center>
</form>
</body>	
</html>
