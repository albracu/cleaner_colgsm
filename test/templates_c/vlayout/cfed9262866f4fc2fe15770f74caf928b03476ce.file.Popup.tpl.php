<?php /* Smarty version Smarty-3.1.7, created on 2016-09-04 15:39:20
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2652057cc4028bbf757-40125510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfed9262866f4fc2fe15770f74caf928b03476ce' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\Popup.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2652057cc4028bbf757-40125510',
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
  'unifunc' => 'content_57cc4028d9260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cc4028d9260')) {function content_57cc4028d9260($_smarty_tpl) {?>
<div id="popupPageContainer" class="contentsDiv"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="popupContents" class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><input type="hidden" class="triggerEventName" value="<?php echo getPurifiedSmartyParameters('triggerEventName');?>
"/></div></div><?php }} ?>