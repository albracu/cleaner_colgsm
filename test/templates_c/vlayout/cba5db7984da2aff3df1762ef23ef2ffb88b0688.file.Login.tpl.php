<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:30:31
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Users\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297957caec971467c4-37103060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba5db7984da2aff3df1762ef23ef2ffb88b0688' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\Login.tpl',
      1 => 1472761313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297957caec971467c4-37103060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_CustomLoginTemplateFullPath' => 0,
    '_CustomLoginTemplate' => 0,
    '_DefaultLoginTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caec973490a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caec973490a')) {function content_57caec973490a($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["_DefaultLoginTemplate"] = new Smarty_variable(vtemplate_path('Login.Default.tpl','Users'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_CustomLoginTemplate"] = new Smarty_variable(vtemplate_path('Login.Custom.tpl','Users'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_CustomLoginTemplateFullPath"] = new Smarty_variable("layouts/vlayout/".($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value), null, 0);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>