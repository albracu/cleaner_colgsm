<?php /* Smarty version Smarty-3.1.7, created on 2016-09-03 15:55:53
         compiled from "C:\wamp\www\vtigercolombia\cleaner_colgsm\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\SettingsMenuStart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1438357caf2897db4c3-49147191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2680b31cd9266f036b27dd0362a5f83d1cb896' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\cleaner_colgsm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\SettingsMenuStart.tpl',
      1 => 1472761306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438357caf2897db4c3-49147191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LOAD_OLD' => 0,
    'UI5_URL' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57caf289afab4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caf289afab4')) {function content_57caf289afab4($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['LOAD_OLD']->value){?><div class="bodyContents"><div class="mainContainer row-fluid"><div class="span12"><iframe id="ui5frame" src="<?php echo $_smarty_tpl->tpl_vars['UI5_URL']->value;?>
" width="100%" height="650px" style="border:0;"></iframe></div><?php }else{ ?><div class="bodyContents"><div class="mainContainer row-fluid"><div class="span2 row-fluid"><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Sidebar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="contentsDiv span10 marginLeftZero"><?php }?><?php }} ?>