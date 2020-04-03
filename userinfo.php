<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}
else{
	echo "No connection";
}

mysqli_select_db($con, 'prafulladeori09');

$Name=$_POST['Name'];
$Father_Name=$_POST['Father_Name'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Address=$_POST['Address'];
$Age=$_POST['Age'];
$Class_10=$_POST['Class_10'];
$Class_12=$_POST['Class_12'];
$Comment=$_POST['Comment'];

$query="insert into prafulladeori1234(Name, Father_Name, Email, Mobile, Address, Age, Class_10, Class_12, Comment) values('$Name','$Father_Name','$Email','$Mobile','$Address','$Age','$Class_10','$Class_12','$Comment') ";



echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>
