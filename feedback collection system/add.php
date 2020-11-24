<?php
$usn=$_POST['usn'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$age=$_POST['age'];
$batch=$_POST['batch'];
$sem=$_POST['sem'];
$username=$_POST['username'];
$password=$_POST['password'];

$dbDatabase = "feed";

$dbServer = "localhost";



$dbUser = "root";

$dbPass = "";

$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");

$query="insert into student values('{$usn}','{$name}','{$branch}','{$age}','{$batch}', '{$sem}','{$username}','{$password}')";

if(mysql_query($query,$sConn))
{
echo "<br>Student details added to the database<br>";
echo"<br><a href=\"http://localhost/feedback/add.html\">Add more student<a>";
}
else
{
echo "<br><b>Student already exist<b><br>";
echo "<a href=\"http://localhost/feedback/add.html\">Back</a><br>";
}
?>