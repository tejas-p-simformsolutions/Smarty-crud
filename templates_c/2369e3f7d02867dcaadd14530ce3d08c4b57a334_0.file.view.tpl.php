<?php
/* Smarty version 4.2.0, created on 2022-08-05 17:01:59
  from '/var/www/html/smarty-crud-operation/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62ecffafb9c5f8_16290235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2369e3f7d02867dcaadd14530ce3d08c4b57a334' => 
    array (
      0 => '/var/www/html/smarty-crud-operation/templates/view.tpl',
      1 => 1659699117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ecffafb9c5f8_16290235 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
  <tr>
    <th>ID</th>
    <th>EMAIL</th>
    <th>COUNTRY</th>
  </tr>
  { $smarty.section name=i loop=$users}
  <tr>
    <td>$users[i].id</td>
    <td>$users[i].city</td>
    <td>$users[i].email</td>
  </tr>
  { /$smarty.section }
</table>
<?php }
}
