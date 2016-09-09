<?php /* Smarty version Smarty-3.1.7, created on 2016-09-08 12:45:20
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Inventory\PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353957d15d607b0d36-30333455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31a1b950787bdac2edc7584cf0a89ef5568ec77' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Inventory\\PopupContents.tpl',
      1 => 1472761303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353957d15d607b0d36-30333455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d15d6091d2c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d15d6091d2c')) {function content_57d15d6091d2c($_smarty_tpl) {?>
<div id='popupContentsDiv'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>