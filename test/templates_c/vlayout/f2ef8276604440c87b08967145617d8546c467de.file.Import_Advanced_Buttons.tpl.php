<?php /* Smarty version Smarty-3.1.7, created on 2016-09-08 22:55:14
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Import\Import_Advanced_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1320157d1ec5277ba58-70127226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ef8276604440c87b08967145617d8546c467de' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Import\\Import_Advanced_Buttons.tpl',
      1 => 1472761303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320157d1ec5277ba58-70127226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d1ec5285cf4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d1ec5285cf4')) {function content_57d1ec5285cf4($_smarty_tpl) {?>

<button type="submit" name="import" id="importButton" class="crmButton big edit btn btn-success"
		><strong><?php echo vtranslate('LBL_IMPORT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
&nbsp;&nbsp;
<a type="button" name="cancel" value="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="cursorPointer cancelLink" onclick="window.history.back()">
	<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</a><?php }} ?>