<?php
/* Smarty version 4.2.0, created on 2022-08-08 10:02:55
  from '/var/www/html/smarty-crud-operation_final/smarty-crud-operation/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62f091f79c54b9_34725501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f94e7201bbab96b96760464d50b044319620f1' => 
    array (
      0 => '/var/www/html/smarty-crud-operation_final/smarty-crud-operation/templates/view.tpl',
      1 => 1659704204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f091f79c54b9_34725501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12806546962f091f799a552_71411047';
?>
<table border=1>
  <tr>
    <th>EMAIL</th>
    <th>COUNTRY</th>
    <th>EDIT</th>
    <th>DELETE</th>
    
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'con', false, 'cid');
$_smarty_tpl->tpl_vars['con']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value => $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->do_else = false;
?>
   <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['con']->value['email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['con']->value['city'];?>
</td>
    <td><a href="contact.php?id=<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
">Edit</a><br /></td>
    <td><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
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
</table>
<?php }
}
