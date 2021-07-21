<?php
session_start();
include('../../../includes/config.php');   

if(isset($_POST['update']))
  {   
$id=$_POST['id'];
$sdate=trim($_POST['sdate']);
$edate=trim($_POST['edate']);
$activity=trim($_POST['activity']);
$admission=trim($_POST['admission']);
// print_r($sdate);
// print_r($edate);
// print_r($activity);
// print_r($admission);
// die();
$step=$dbh->prepare("UPDATE id,Sdate,Edate,Activity,Admission calander SET Sdate=:sdate,Edate=:edate,Activity=:activity,Admission=:admission,id=:id WHERE id=:id");
$step->bindParam(':sname',$sname,PDO::PARAM_STR);
$step->bindParam(':edate',$edate,PDO::PARAM_STR);
$step->bindParam(':activity',$activity,PDO::PARAM_STR);
$step->bindParam(':admission',$admission,PDO::PARAM_STR);

if($step->execute())
{

  $_SESSION['status']="Upcoming Event Updated";
  $_SESSION['status_code']="success";
   header('Location:EditMaterials.php');

}
else 
{
  $_SESSION['status']="Upcoming Event Not Updated";
  $_SESSION['status_code']="error";
   header('Location:EditMaterials.php');

}
}

if(isset($_REQUEST['del']))
	{


$did=intval($_GET['del']);
$sql = "delete from calander WHERE  id=:did";
$query = $dbh->prepare($sql);
$query-> bindParam(':did',$did, PDO::PARAM_STR);
$count=$query -> execute();

if($count==1)
{
    $_SESSION['status']="Upcoming Event Deleted";
    $_SESSION['status_code']="success";
     header('Location:../EditAcadamicCalander.php');
}

}