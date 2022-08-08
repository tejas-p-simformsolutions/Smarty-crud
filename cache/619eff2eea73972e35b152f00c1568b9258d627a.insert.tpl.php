<?php
/* Smarty version 4.2.0, created on 2022-08-08 10:18:59
  from '/var/www/html/smarty-crud-operation_final/templates/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62f095bbb5e434_56804703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '596f8acb977380cfbe994ae5829f050db4167a28' => 
    array (
      0 => '/var/www/html/smarty-crud-operation_final/templates/insert.tpl',
      1 => 1659934137,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_62f095bbb5e434_56804703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="insert.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="anme" placeholder="Enter name" name="name">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
      </div>
    </div>
    
    <div class="form-group">
        <label> <input type="radio" class="form-control" id="gender"  name="gender" value="1"> 
        Male</label>
     <label> <input type="radio" class="form-control" id="gender"  name="gender" value="0"> 
        Female</label>
     
      </div>
      
     </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="submit" value ="submit">
      </div>
    </div>
  
  </form>
</div>

</body>
</html>
<?php }
}
