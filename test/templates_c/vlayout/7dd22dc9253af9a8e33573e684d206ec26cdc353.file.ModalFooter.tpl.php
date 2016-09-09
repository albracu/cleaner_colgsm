<?php /* Smarty version Smarty-3.1.7, created on 2016-09-04 15:37:04
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Vtiger\ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2668957cc3fa0809bd4-20732350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dd22dc9253af9a8e33573e684d206ec26cdc353' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\ModalFooter.tpl',
      1 => 1472761317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2668957cc3fa0809bd4-20732350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57cc3fa09912f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cc3fa09912f')) {function content_57cc3fa09912f($_smarty_tpl) {?>
<div class="modal-footer"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }} ?>