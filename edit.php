<?php
require ('smarty-4.2.0/libs/Smarty.class.php');
include ('config.php');
include('headers.php');

if(isset($_GET['id']))
{
    $sql= mysqli_query($conn , 'select * from users where id='.$_GET['id']);
    $data = mysqli_fetch_array($sql);
    // while( $row = mysqli_fetch_array($sql)){
    //     $data[] = $row;
    // }
    
    $smarty->assign('users' ,$data);
    $smarty->display('templates/edit.tpl');
    
}
if(isset($_POST['submit'])){
    $sql = $sql = "UPDATE users SET name='".$_POST['name']."',email='".$_POST['email']."',city='".$_POST['city']."',gender='".$_POST['gender']."'WHERE id=".$_POST['id'];
    if (!mysqli_query($conn , $sql)) {
        echo("Error description: " . mysqli_error($conn));
      }
header('location:index.php');
   
}

?>
