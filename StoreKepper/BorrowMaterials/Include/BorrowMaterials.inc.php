<?php
session_start();
include "../../../includes/config.php";


	
	if(!ISSET($_POST['borrower'])){	
		                 $_SESSION['status']="Please Select Borrower!";
						  $_SESSION['status_code']="warning";
						   header('Location:../BorrowMaterials.php');
	}
		if(isset($_POST['save_borrow']))
		{
			$borrower=$_POST['borrower'];
			$quantity=$_POST['quantity'];
			$date=$_POST['date'];
			$Mname=trim($_POST['MaterialName']);
			$department=$_POST['department'];
			$materialsserialnumber=$_POST['materialsserialnumber'];
			$condition=$_POST['condition'];
			$storenumber=$_POST['storenumber'];
			$status="Borrowed";
			$sql="INSERT INTO  borrowedmaterials(UserName,Department,MaterialName,SerialNumber,Cond,StoreNumber,Quantity,Date,Status)
                  VALUES(:borrower,:department,:Mname,:materialsserialnumber,:condition,:storenumber,:quantity,:date,:status)";
						$query = $dbh->prepare($sql);
						$query->bindParam(':borrower',$borrower,PDO::PARAM_STR);
						$query->bindParam(':Mname',$Mname,PDO::PARAM_STR);
						$query->bindParam(':department',$department,PDO::PARAM_STR);
						$query->bindParam(':materialsserialnumber',$materialsserialnumber,PDO::PARAM_STR);
						$query->bindParam(':condition',$condition,PDO::PARAM_STR);
						$query->bindParam(':storenumber',$storenumber,PDO::PARAM_INT);
						$query->bindParam(':quantity',$quantity,PDO::PARAM_INT);
						$query->bindParam(':date',$date,PDO::PARAM_STR);
						$query->bindParam(':status',$status,PDO::PARAM_STR);
						$query->execute();

						$lastInsertId = $dbh->lastInsertId();

						if($lastInsertId)
						{
						  $_SESSION['status']="User borrowed Successfully";
						  $_SESSION['status_code']="success";
						   header('Location:../BorrowMaterials.php');
						
						}
						else 
						{
						  $_SESSION['status']="Some Problem";
						  $_SESSION['status_code']="error";
						   header('Location:../BorrowMaterials.php');
						}

		}	

?>