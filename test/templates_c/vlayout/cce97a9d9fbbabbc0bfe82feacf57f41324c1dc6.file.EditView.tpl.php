<?php /* Smarty version Smarty-3.1.7, created on 2016-09-04 14:37:04
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2845357cc3190921815-59639414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce97a9d9fbbabbc0bfe82feacf57f41324c1dc6' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\EditView.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2845357cc3190921815-59639414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57cc31909acf6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cc31909acf6')) {function content_57cc31909acf6($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>