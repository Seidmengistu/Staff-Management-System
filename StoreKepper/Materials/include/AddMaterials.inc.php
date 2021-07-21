<?php
session_start();
include('../../../includes/config.php');


     
if(isset($_POST['Add']))
  {
$department=$_POST['department'];
$Mname=trim($_POST['Mname']);
$Mserial=trim($_POST['Mserial']);
$Quantity=$_POST['Quantity'];
$Condition=trim($_POST['Condition']);
$Storenumber=$_POST['Storenumber'];
$Shelfnumber=$_POST['Shelfnumber'];
$date=$_POST['date'];
$status=1;
// var_dump($Mserial);
//   die();
if(is_numeric($Mname)){
    $_SESSION['status']="Material Name Must Be Alphabet";
  $_SESSION['status_code']="warning";
   header('Location:../AddMaterials.php');
}
$sql ="SELECT Mserial FROM materials";
$query= $dbh -> prepare($sql);
$query-> bindParam(':Mserial', $Mserial, PDO::PARAM_STR);
$query-> execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $result) 
{
  $serial=$result['Mserial'];
  if($serial==$Mserial)
  {
    $_SESSION['status']="Material With This Serial Number Is Already Added!";
    $_SESSION['status_code']="warning";
    header('Location:../AddMaterials.php');
    exist();
  }
}
// var_dump($serial);
//   die();

// if($serial==$Mserial)
// {
  
//   $_SESSION['status']="Material With This Serial Number Is Already Added!";
//   $_SESSION['status_code']="warning";
//   header('Location:../AddMaterials.php');
//   exist();
// }
// else{
 
$sql="INSERT INTO materials(department,Mname,Mserial,Quantity,Cond,Shelfnumber,Storenumber,Date,status)
                       VALUES(:department,:Mname,:Mserial,:Quantity,:Condition,:Shelfnumber,:Storenumber,:date,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':Mname',$Mname,PDO::PARAM_STR);
$query->bindParam(':Mserial',$Mserial,PDO::PARAM_STR);
$query->bindParam(':Quantity',$Quantity,PDO::PARAM_STR);
$query->bindParam(':Condition',$Condition,PDO::PARAM_STR);
$query->bindParam(':Shelfnumber',$Shelfnumber,PDO::PARAM_STR);
$query->bindParam(':Storenumber',$Storenumber,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();

if($lastInsertId)
{
  $_SESSION['status']="Material Added";
  $_SESSION['status_code']="success";
   header('Location:../Addmaterials.php');

}
else 
{
  
  $_SESSION['status']="Material NOt Added";
  $_SESSION['status_code']="error";
   header('Location:../Addmaterials.php');
}
}
// }
?>