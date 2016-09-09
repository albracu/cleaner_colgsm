<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:52:45
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Home\dashboards\DashBoardPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090957caf1cd145ed7-35054103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64d8f014bcf386fdb875f5a6865f34f5cbf7f896' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Home\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1472761303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090957caf1cd145ed7-35054103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf1cd471eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf1cd471eb')) {function content_57caf1cd471eb($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="contentsDiv span12 marginLeftZero dashboardContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('DASHBOARDHEADER_TITLE'=>vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0);?>
<?php }} ?>