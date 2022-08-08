<?php
/* Smarty version 4.2.0, created on 2022-08-05 18:26:25
  from '/var/www/html/smarty-crud-operation/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62ed1379862531_94343289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2369e3f7d02867dcaadd14530ce3d08c4b57a334' => 
    array (
      0 => '/var/www/html/smarty-crud-operation/templates/view.tpl',
      1 => 1659704184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ed1379862531_94343289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '28458185862ed137985fa14_31435597';
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
