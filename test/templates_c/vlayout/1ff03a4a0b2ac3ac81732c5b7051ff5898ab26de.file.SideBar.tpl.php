<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:53:27
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1795457caf1f7979b90-98161764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ff03a4a0b2ac3ac81732c5b7051ff5898ab26de' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\SideBar.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795457caf1f7979b90-98161764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf1f7a3847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf1f7a3847')) {function content_57caf1f7a3847($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>