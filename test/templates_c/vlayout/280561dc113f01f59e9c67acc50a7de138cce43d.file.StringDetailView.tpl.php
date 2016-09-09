<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:55:26
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2264457caf26eae9337-12160802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280561dc113f01f59e9c67acc50a7de138cce43d' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\StringDetailView.tpl',
      1 => 1472761325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2264457caf26eae9337-12160802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf26eca7a7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf26eca7a7')) {function content_57caf26eca7a7($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

<?php }} ?>