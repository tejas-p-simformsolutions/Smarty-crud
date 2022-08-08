<?php
/* Smarty version 4.2.0, created on 2022-08-08 12:20:43
  from '/var/www/html/smarty-crud-operation_final/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62f0b243384274_06060567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481169de3cc5be09ae161b6018a57d6d3ecd3be6' => 
    array (
      0 => '/var/www/html/smarty-crud-operation_final/templates/view.tpl',
      1 => 1659941441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f0b243384274_06060567 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
<nav <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white inactive" href="#">Smarty crud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="insert.php">Insert</a>
        </li>
   
    </div>
  </div>
</nav>
<div class="container">

  <table class="table">
    <thead >
      <tr >
        <th>NAME</th>
        <th>EMAIL</th>
        <th>CITY</th>
        <th>GENDER</th>
        <th>EDIT</th>
        <th>DELETE</th>
      
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'con', false, 'cid');
$_smarty_tpl->tpl_vars['con']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value => $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->do_else = false;
?>
    <tr class="active">
    <td><?php echo $_smarty_tpl->tpl_vars['con']->value['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['con']->value['email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['con']->value['city'];?>
</td>
    
<?php ob_start();
echo $_smarty_tpl->tpl_vars['con']->value['gender'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '1') {?>
    <td>Male</td>

<?php } else { ?>
 <td>Female</td>
   
<?php }?>
    
    
    <td><button class="btn btn-success"><a class="text-decoration-none text-white" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
">Edit</a></button></td>
    <td><button class="btn btn-danger"><a  class="text-decoration-none text-white" href="index.php?del=<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
">Delete</a></button></td>
    </tr>
<?php
}
if ($_smarty_tpl->tpl_vars['con']->do_else) {
?>
    No items were found in the search
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
</div>

</body>
</html><?php }
}
