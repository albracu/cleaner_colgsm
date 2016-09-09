<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:55:55
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\SettingsShortCut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2588257caf28b410cc9-85641054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575078105cf186875c516907fe104fc8582a6204' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\SettingsShortCut.tpl',
      1 => 1472761306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2588257caf28b410cc9-85641054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS_SHORTCUT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf28b74d75',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf28b74d75')) {function content_57caf28b74d75($_smarty_tpl) {?>
<span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="span3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="margin-right: -2%;margin-top: -5%;" title="Close" type="button" class="unpin close hide">x</button><h5 class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')));?>
</h5><div><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')));?>
</div></span>	<?php }} ?>