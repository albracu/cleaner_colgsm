<?php /* Smarty version Smarty-3.1.7, created on 2016-09-08 22:55:13
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Import\Import_Saved_Maps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333957d1ec51a7f206-84062747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a64ee7685f62260edccc51a3e8099cc37af649' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Import\\Import_Saved_Maps.tpl',
      1 => 1472761303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333957d1ec51a7f206-84062747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SAVED_MAPS' => 0,
    '_MAP_ID' => 0,
    '_MAP' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d1ec51cd7a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d1ec51cd7a1')) {function content_57d1ec51cd7a1($_smarty_tpl) {?>

<select name="saved_maps" id="saved_maps" class="font-x-small chzn-select" onchange="ImportJs.loadSavedMap();">
	<option id="-1" value="" selected>--<?php echo vtranslate('LBL_SELECT_SAVED_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
--</option>
	<?php  $_smarty_tpl->tpl_vars['_MAP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_MAP']->_loop = false;
 $_smarty_tpl->tpl_vars['_MAP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SAVED_MAPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_MAP']->key => $_smarty_tpl->tpl_vars['_MAP']->value){
$_smarty_tpl->tpl_vars['_MAP']->_loop = true;
 $_smarty_tpl->tpl_vars['_MAP_ID']->value = $_smarty_tpl->tpl_vars['_MAP']->key;
?>
	<option id="<?php echo $_smarty_tpl->tpl_vars['_MAP_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getStringifiedContent();?>
"><?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getValue('name');?>
</option>
	<?php } ?>
</select>
<span id="delete_map_container" style="display:none;">
	<i class="icon-trash cursorPointer" onclick="ImportJs.deleteMap('<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
');" alt="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
"></i>
</span><?php }} ?>