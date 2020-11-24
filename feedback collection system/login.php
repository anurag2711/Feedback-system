
<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$selected_radio = $_POST['usr'];
session_start();
$_SESSION['user_id']=$username;
echo $_SESSION['user_id'];
if($selected_radio=='admin')
{
if($username=='admin' && $password=='anurag')
{
echo "<b><center>Login Succesful</b></center><br>";
echo "<br><center><b><u>Welcome Admin</u></b></center><br>";
echo "<br><center><a href=\"http://localhost/feedback/add.html\">Add new student<a></center><br><br>";
echo "<center><a href=\"http://localhost/feedback/result.html\">Check results</a></center><br>";
}
}
else if($selected_radio=='stud')
{
$dbDatabase = "feed";
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");

$query="select * from student where username='$username' && password='$password'";

$data=mysql_query($query,$sConn);

if($data)
{
echo "<br><b><center>Login successful</b></center><br>";
echo "<br><center><b>Welcome $username</b></center><br>";
echo "<br><center><b><u>Student Information</u></b></center><br><br>";

$info = mysql_fetch_array( $data ); 

Print "<tr>";
 
Print "<center><th>Name:</th> <td>".$info['name'] . "</td></center> "; 
Print "<center><th>Usn:</th> <td>".$info['usn'] . "</td></center> "; 
Print "<center><th>Batch:</th> <td>".$info['batch'] . "</td></center> "; 
Print "<center><th>Sem:</th> <td>".$info['sem'] . " </td></tr></center>"; 
echo "<br><br><center><b><a href=\"http://localhost/feedback/feeder.html\">Enter Feedback now</a></b></center><br>";
}
else
{
echo "Invalid username and Password combination<br>";
}
}

?>