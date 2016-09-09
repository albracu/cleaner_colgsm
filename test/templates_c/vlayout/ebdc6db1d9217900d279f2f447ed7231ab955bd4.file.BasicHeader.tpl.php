<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:52:45
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149057caf1cd4f0402-87274730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdc6db1d9217900d279f2f447ed7231ab955bd4' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\BasicHeader.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149057caf1cd4f0402-87274730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf1cd62cfb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf1cd62cfb')) {function content_57caf1cd62cfb($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>