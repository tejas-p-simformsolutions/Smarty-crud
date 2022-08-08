<?php
/* Smarty version 4.2.0, created on 2022-08-05 16:45:49
  from '/var/www/html/smarty-crud-operation/templates/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62ecfbe50405c5_81774282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb546127142616ae81e435cab021d70a9b6cc0c' => 
    array (
      0 => '/var/www/html/smarty-crud-operation/templates/insert.tpl',
      1 => 1659698134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ecfbe50405c5_81774282 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Storing Form data in Database</h1>
    <form action="insert.php" method="post">
            <p>
               <label for="Address">City:</label>
               <input type="text" required name="city" id="city">
            </p>
  
            <p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" required name="email" id="email">
            </p>
 
            <input type="submit" name ="submit" value="Submit">
    </form>
<?php }
}
