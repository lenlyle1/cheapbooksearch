<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-02 01:26:57
         compiled from "/www/cheapbooksearch/protected/templates/debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39179434054ced261e02b95-86467147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5b862989ddae592215cf224e831b56c19da5a5' => 
    array (
      0 => '/www/cheapbooksearch/protected/templates/debug.tpl',
      1 => 1422840416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39179434054ced261e02b95-86467147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debugItems' => 0,
    'debug' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ced261e24761_38655593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ced261e24761_38655593')) {function content_54ced261e24761_38655593($_smarty_tpl) {?><div id="debug">
    <h1>Debugging:</h1>
    <?php  $_smarty_tpl->tpl_vars['debug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['debug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debugItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['debug']->key => $_smarty_tpl->tpl_vars['debug']->value) {
$_smarty_tpl->tpl_vars['debug']->_loop = true;
?>
    <div class="item">
        <div class="title">
        <?php echo $_smarty_tpl->tpl_vars['debug']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['debug']->value['file'];?>
:<?php echo $_smarty_tpl->tpl_vars['debug']->value['line'];?>

        </div>
        <div class="content">
            <div class="value">
<pre><?php echo $_smarty_tpl->tpl_vars['debug']->value['data'];?>

<?php if ($_smarty_tpl->tpl_vars['debug']->value['backtrace']!='') {?>
<b>Backtrace: </b>
<?php echo $_smarty_tpl->tpl_vars['debug']->value['backtrace'];?>
</pre>
<?php }?>
             </div>
        </div>
    </div>
    <?php } ?>
</div><?php }} ?>
