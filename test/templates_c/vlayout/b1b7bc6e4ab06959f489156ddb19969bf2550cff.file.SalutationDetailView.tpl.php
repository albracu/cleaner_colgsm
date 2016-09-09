<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:55:26
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\SalutationDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:602257caf26e41d2a4-38007374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1b7bc6e4ab06959f489156ddb19969bf2550cff' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\SalutationDetailView.tpl',
      1 => 1472761325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '602257caf26e41d2a4-38007374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf26e54ef3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf26e54ef3')) {function content_57caf26e54ef3($_smarty_tpl) {?>


<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>