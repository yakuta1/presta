<?php /* Smarty version Smarty-3.1.19, created on 2015-01-22 16:45:27
         compiled from "C:\xampp\htdocs\presta\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254354c11b17dd5156-80940401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5537f7cb02a392083f52307f2cf3c5ae9da66d60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1420643154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254354c11b17dd5156-80940401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c11b17ebf757_81637033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c11b17ebf757_81637033')) {function content_54c11b17ebf757_81637033($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
