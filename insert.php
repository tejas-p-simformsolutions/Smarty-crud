<?php
require ('smarty-4.2.0/libs/Smarty.class.php');
include ('config.php');
include('headers.php');

if(isset($_POST['submit']))
{
    $sql = mysqli_query($conn,"insert into users(name,email,city,gender) values('".$_POST['name']."','".$_POST['email']."','".$_POST['city']."','".$_POST['gender']."')");
    header('location:index.php');
}

$smarty->display('templates/insert.tpl');

?>
