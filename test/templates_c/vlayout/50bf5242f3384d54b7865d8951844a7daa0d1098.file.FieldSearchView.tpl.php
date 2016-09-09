<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:53:31
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\FieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2498857caf1fb08d837-31885502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50bf5242f3384d54b7865d8951844a7daa0d1098' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\FieldSearchView.tpl',
      1 => 1472761325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2498857caf1fb08d837-31885502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf1fb1f6e9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf1fb1f6e9')) {function content_57caf1fb1f6e9($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><div class="row-fluid"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="span9 listSearchContributor" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div><?php }} ?>