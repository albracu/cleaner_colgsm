<?php /* Smarty version Smarty-3.1.7, created on 2016-09-04 14:37:08
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2268957cc31944c5b65-33824368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2d52ef7b4a81d85aa253298c8ef5691fd2097d' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\EditViewActions.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2268957cc31944c5b65-33824368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57cc319457dbf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cc319457dbf')) {function content_57cc319457dbf($_smarty_tpl) {?>

<div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div><br></form></div><?php }} ?>