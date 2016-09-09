<?php /* Smarty version Smarty-3.1.7, created on 2016-09-04 14:39:54
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Users\PreferenceDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3209357cc323a497448-96963461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2436486a1b6d3b03c59ffbfe87a46b5c2ccd6f8' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\PreferenceDetailViewPreProcess.tpl',
      1 => 1472761313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3209357cc323a497448-96963461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57cc323a6cd8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cc323a6cd8d')) {function content_57cc323a6cd8d($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PreferenceDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>