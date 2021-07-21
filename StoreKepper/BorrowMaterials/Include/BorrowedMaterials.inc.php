<?php 
session_start();
include "../../../includes/config.php";

if(isset($_GET['Borrowed']))
	{
            $eid=$_GET['Borrowed'];
            
            $status="Returned";
            $sql = $dbh->prepare("UPDATE BorrowedMaterials SET Status=:status WHERE  id=:eid");
            $sql -> bindParam(':status',$status, PDO::PARAM_STR);
            $sql-> bindParam(':eid',$eid, PDO::PARAM_STR);
            if($sql->execute())
            {
                $_SESSION['status']="Materials Returned Successfully";
                $_SESSION['status_code']="success";
                header('Location:../BorrowedMaterials.php');
                
            }
    }

if(isset($_GET['Returned']))
	{
                $aeid=intval($_GET['Returned']);
                $status="Borrowed";
                $sql =$dbh->prepare("UPDATE BorrowedMaterials SET Status=:status WHERE  id=:aeid");
                $sql -> bindParam(':status',$status, PDO::PARAM_STR);
                $sql-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
                if($sql->execute()){
                    $_SESSION['status']="User Put In Borrowed State Successfully";
                    $_SESSION['status_code']="success";
                    header('Location:../BorrowedMaterials.php');
                    
                }
    }
if(isset($_REQUEST['del']))
	{
                $did=intval($_GET['del']);
                $sql = $dbh->prepare("delete from BorrowedMaterials WHERE  id=:did");
                $sql-> bindParam(':did',$did, PDO::PARAM_STR);
                if($sql->execute())
                {
                    $_SESSION['status']="Material Deleted";
                    $_SESSION['status_code']="success";
                    header('Location:../BorrowedMaterials.php');

                }
    }
    ?>