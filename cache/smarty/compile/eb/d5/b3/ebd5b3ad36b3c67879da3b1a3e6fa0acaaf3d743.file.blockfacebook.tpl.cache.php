<?php /* Smarty version Smarty-3.1.19, created on 2015-01-22 10:53:51
         compiled from "C:\xampp\htdocs\presta\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973154c11d0f66ef06-26946628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd5b3ad36b3c67879da3b1a3e6fa0acaaf3d743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1420643200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '973154c11d0f66ef06-26946628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c11d0f6c4e12_52497957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c11d0f6c4e12_52497957')) {function content_54c11d0f6c4e12_52497957($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
