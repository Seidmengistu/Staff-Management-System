<?php
 $UserName=$_POST['username'];
 $Password=md5($_POST['password']);
 
 $sql ="SELECT *  FROM admin WHERE UserName=:UserName and Password=:Password";
 $query= $dbh -> prepare($sql);
 $query-> bindParam(':UserName', $UserName, PDO::PARAM_STR);
 $query-> bindParam(':Password', $Password, PDO::PARAM_STR);
 $query-> execute();
 $results = $query->fetchAll(PDO::FETCH_ASSOC);

?>