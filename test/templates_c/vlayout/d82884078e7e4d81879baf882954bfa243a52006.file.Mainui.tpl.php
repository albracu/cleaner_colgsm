<?php /* Smarty version Smarty-3.1.7, created on 2016-08-24 21:01:40
         compiled from "/var/www/html/cleanercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76487507757be0b34ec0774-40296320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82884078e7e4d81879baf882954bfa243a52006' => 
    array (
      0 => '/var/www/html/cleanercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1472069723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76487507757be0b34ec0774-40296320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57be0b34ec9d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57be0b34ec9d6')) {function content_57be0b34ec9d6($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>