<?php
session_start();
include('../includes/config.php');
 
if(isset($_POST['login']))
{
                            $UserName=$_POST['username'];
                            $Password=md5($_POST['password']);
                            
                            $sql ="SELECT *  FROM admin WHERE UserName=:UserName and Password=:Password";
                            $query= $dbh -> prepare($sql);
                            $query-> bindParam(':UserName', $UserName, PDO::PARAM_STR);
                            $query-> bindParam(':Password', $Password, PDO::PARAM_STR);
                            $query-> execute();
                            $results = $query->fetchAll(PDO::FETCH_ASSOC);
                           $cc=$query->rowCount() > 0;
                     foreach ($results as $res) 
                     {
                                             $Role= $res['Role'];
                                             $username=$res['UserName'];
                                             $Password=$res["Password"];
                                             $status= $res['status'];                    
                     }

                     
                 if($cc>0)
                  { 
                      
                     if($status==FALSE)
                     {
                                 $_SESSION['status']="Not Approved!Contact Your Department Head";
                                 $_SESSION['status_code']="warning";
                                 header('Location:../login.php');
                                 exist();        
                     } 
                     
                  switch ($Role) 
                  {
                        
                        
                     case 'Admin':       
                           $_SESSION['logged_in'] = true;
                           header('location:../Admin/AdminDashboard.php');
                           $_SESSION['Role'] = 'Admin';
                           $username=$_SESSION['username'];
                        break;
                        case "Staff":
                              $_SESSION['logged_in'] = true;
                              header('Location:../StaffMembers/home1.php');
                              $_SESSION['Role'] = 'Staff';   
                              break;
                        case "Store":
                                 $_SESSION['logged_in'] = true;
                                 header('Location:../StoreKepper/home1.php');
                                 $_SESSION['Role'] = 'Store';
                        break;
                  }
            }
         else{
               $_SESSION['status']="Incorrect Username or Password";
               $_SESSION['status_code']="warning";
               header('Location:../login.php');
            }
 }
?>