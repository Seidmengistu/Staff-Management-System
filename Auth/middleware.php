<?php
function isAdmin()
{
    if(isset($_SESSION['Role'])){
        $role = $_SESSION['Role'];
        if($role != 'Admin'){
            header('Location:../../503.php');
        }
    }
}
function isStore()
{
    if(isset($_SESSION['Role'])){
        $role = $_SESSION['Role'];
        if($role != 'Store'){
            header('Location:../../503.php');
        }
    }
    
}
function isStaff()
{
    if(isset($_SESSION['Role'])){
        $role = $_SESSION['Role'];
        if($role != 'Staff'){
            header('Location:../../503.php');
        }
    }
}
?>