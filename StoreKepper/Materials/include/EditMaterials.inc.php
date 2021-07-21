<?php
session_start();
include('../../../includes/config.php');   

if(isset($_REQUEST['del']))
	{


$did=intval($_GET['del']);
$sql = "delete from materials WHERE  id=:did";
$query = $dbh->prepare($sql);
$query-> bindParam(':did',$did, PDO::PARAM_STR);
$count=$query -> execute();

if($count==1)
{
    $_SESSION['status']="Material Deleted";
    $_SESSION['status_code']="success";
     header('Location:../ShowMaterials.php');
}

}
try
{


  if(isset($_POST['update']))
    {
                $conn=mysqli_connect('localhost','root','','sms');
                $idt=$_POST['id'];
                $department=$_POST['department'];
                $Mname=trim($_POST['MaterialName']);
                $Mserial=trim($_POST['SerialNumber']);
                $Quantity=trim($_POST['Quantity']);
                $Cond=trim($_POST['Condition']);
                $ShelfNumber=trim($_POST['ShelfNumber']);
                $StoreNumber=trim($_POST['StoreNumber']);
                $Date=$_POST['Date'];
                $status=1;
                
    //           $query="UPDATE student SET fullname='$fullname',id='$id',mark='$mark',serial='$serial' WHERE id='$id'";
    // // 
    // $query_run= mysqli_query($conn,$query);
              $sql="UPDATE  materials SET department='$department', Mname='$Mname',Mserial='$Mserial',Quantity='$Quantity',Cond='$Cond',
                                      ShelfNumber='$ShelfNumber',StoreNumber='$StoreNumber',Date='$Date',status='$status' WHERE id='$idt' ";
              // $step=$dbh->prepare($sql);
              // $step->bindParam(':department',$department,);                        
              // $step->bindParam(':Mname',$Mname,);
              // $step->bindParam(':Mserial',$Mserial,);
              // $step->bindParam(':Quantity',$Quantity,);
              // $step->bindParam(':Cond',$Cond,);
              // $step->bindParam(':ShelfNumber',$ShelfNumber,);
              // $step->bindParam(':StoreNumber',$StoreNumber,);
              // $step->bindParam(':Date',$Date,);
              // $step->bindParam(':status',$status,);
              
              // print_r($_REQUEST);
              // var_dump($query_run);
              // die();


              if(mysqli_query($conn,$sql))
              {

                $_SESSION['status']="Material Information Updated!";
                $_SESSION['status_code']="success";
                header('Location:../ShowMaterials.php');

              }
              else 
              {
                $_SESSION['status']="Material Not Updated";
                $_SESSION['status_code']="error";
                header('Location:../ShowMaterials.php');

              }
            }

}
catch(Exception $e) {
  echo $e->getMessage();
}

?>