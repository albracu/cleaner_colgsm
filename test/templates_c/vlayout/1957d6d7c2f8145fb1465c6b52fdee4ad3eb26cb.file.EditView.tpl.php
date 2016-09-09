<?php /* Smarty version Smarty-3.1.7, created on 2016-09-04 15:37:21
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Inventory\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774557cc3fb1a6f7d6-93186675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1957d6d7c2f8145fb1465c6b52fdee4ad3eb26cb' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Inventory\\EditView.tpl',
      1 => 1472761303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774557cc3fb1a6f7d6-93186675',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57cc3fb1bc4ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cc3fb1bc4ae')) {function content_57cc3fb1bc4ae($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LineItemsEdit.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>