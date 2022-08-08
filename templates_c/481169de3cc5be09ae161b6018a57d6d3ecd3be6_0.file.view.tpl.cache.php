<?php
/* Smarty version 4.2.0, created on 2022-08-08 10:29:32
  from '/var/www/html/smarty-crud-operation_final/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62f09834ebfd02_39643677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481169de3cc5be09ae161b6018a57d6d3ecd3be6' => 
    array (
      0 => '/var/www/html/smarty-crud-operation_final/templates/view.tpl',
      1 => 1659934755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f09834ebfd02_39643677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '132179327962f09834e994a9_88706820';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="container">
  <table class="table">
    <thead>
      <tr>
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
    <td>MAle</td>

<?php } else { ?>
 <td>FeMale</td>
   
<?php }?>
    
    
    <td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
">Edit</a><br /></td>
    <td><a href="view.php?del=<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
">Delete</a><br /></td>
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
