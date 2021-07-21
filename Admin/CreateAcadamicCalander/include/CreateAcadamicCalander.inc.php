<?php
session_start();
include "../../../includes/Config.php";

if(isset($_POST['announce']))
{
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $activity=$_POST['activity'];
    $admission=$_POST['admission'];
    
// $query->bindParam(':username',$username,PDO::PARAM_STR);
// $step->bindParam(':date',$date,PDO::PARAM_STR);
    $sql=$dbh->prepare("INSERT INTO calander(Sdate,Edate,Activity,Admission) VALUES(:sdate,:edate,:activity,:admission) ");
    
    $sql->bindParam(':sdate',$sdate,PDO::PARAM_STR);
    $sql->bindParam(':edate',$edate,PDO::PARAM_STR);
    $sql->bindParam(':activity',$activity,PDO::PARAM_STR);
    $sql->bindParam(':admission',$admission,PDO::PARAM_STR);
      if($sql->execute())
    {
        $_SESSION['status']="Calander Created";
        $_SESSION['status_code']='success';
        header("location:../CreateAcadamicCalander.php");
    }
    else{
        $_SESSION['status']="Some Error Occur Please Try Again";
        $_SESSION['status_code']='info';
        header("location:../CreateAcadamicCalander.inc.php");
        
    }

}



?>