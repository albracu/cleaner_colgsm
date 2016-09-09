<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:55:42
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1841757caf27eb144b4-07568064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d103e5d836000afaec9782ed9a1512ff01c49b0' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\DetailViewFullContents.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841757caf27eb144b4-07568064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf27ec339e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf27ec339e')) {function content_57caf27ec339e($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php }} ?>