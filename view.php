<?php
require ('smarty-4.2.0/libs/Smarty.class.php');
include ('config.php');
include('headers.php');


$sql= mysqli_query($conn , 'select * from users');
$data = [];
while( $row = mysqli_fetch_array($sql)){
    $data[] = $row;
}
if(isset($_GET['del']))
{
    $query = "delete from users where id=".$_GET['del'];
    if (!mysqli_query($conn , $query)) {
        echo("Error description: " . mysqli_error($conn));
      }
     header('location:index.php');
}

$smarty->assign('users' ,$data);
$smarty->display('view.tpl');

?>
