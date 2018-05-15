<html>
<head><title>Welcome</title>
</head>
<body>
<?php
$form_username=$_POST['username'];
$form_password=$_POST['password'];
$dbc=mysqli_connect('localhost','root','Aishj','IT')or die('error connecting to mysql server');
$query="Select * from log where username='$form_username' and password='$form_password'";
$result=mysqli_query($dbc,$query)or die('error querying database');


$row=mysqli_fetch_array($result);
if($row['password']==$form_Password)
{
header("Location:main.html");
echo "Welcome,".$form_username."<br>";
echo "thanks for sharing transport pooling"; 
}
else{
echo "Not registered";

echo "<br/>";
}

mysqli_close($dbc);
?>
mysqli_close($dbc);
?>
</body>
</html>
