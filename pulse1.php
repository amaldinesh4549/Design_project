<?php
$id=$_GET["id"];
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
$myfile=fopen("open.txt","w") or die ("unable to open");
fwrite($myfile,"run");
fclose($myfile);

$query1="select * from patient where id=$id";
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);
?>
<html>
  <head>
        <meta charset="utf-8">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/pulse_style.css">
    </head>
    <body>

      <form action="pulse.php" method="get">
        <fieldset>
          
          <legend><span class="number"><?php echo "$row[1]"?></span></legend>
          <table id="tables">
			  <tr id="boxtr"><td align="center"><font color="#008EA4" size="+2"><b>PULSE:</b></font></td><td id="boxtd" ><input type="text" id="box" name="pulse"></td></tr>
			  <tr id="boxtr"><td align="center"><font color="#008EA4" size="+2"><b>TEMPERATURE:</b></font></td><td id="boxtd"> <input type="text" id="box" name="temperature" ></td></tr>
          </table>
          
        </fieldset>
        
        <button type="submit">VIEW</button>
      </form>
      
    </body>
</html>

