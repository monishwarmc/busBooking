<?php
$server="127.0.0.1";
$username="root";
$password="";
$database="booking";
$conn=new mysql($server,$username,$password,$database);
if(conn->connect_error){
    die("Connection failed : ",$conn->connect_error);
}
$name=$_POST['fname'];
$number=$_POST['phone'];
$ddate=date('Y-m-d',strtotime($_POST['ddate']));
$sperson=$_POST['person'];
$lname=$_POST['lname'];
$eid=$_POST['email'];
$adtae=date('Y-m-d',strtotime($_POST['adate']));
$sbus=$_POST['bus'];

$sql="insert into data values('$fname','$number''$ddate','$guest','$lname',''$eid','$adate','$sbus')";

if(mysql_query($conn,$sql)){
    echo "<script>alert("Booking Successfully");</script>";
}
else
{
    echo "<script>alert("Try again");</script>";
}
?>