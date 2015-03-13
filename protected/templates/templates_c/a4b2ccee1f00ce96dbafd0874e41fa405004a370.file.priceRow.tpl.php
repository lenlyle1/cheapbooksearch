<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-24 05:33:40
         compiled from "/home/protected/templates/priceRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1937384754ea0322794045-25732486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b2ccee1f00ce96dbafd0874e41fa405004a370' => 
    array (
      0 => '/home/protected/templates/priceRow.tpl',
      1 => 1424753866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1937384754ea0322794045-25732486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ea032281e803_15939594',
  'variables' => 
  array (
    'link' => 0,
    'vendor' => 0,
    'stock' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea032281e803_15939594')) {function content_54ea032281e803_15939594($_smarty_tpl) {?><div data-url="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="priceRow buyLink">
    <b><?php echo $_smarty_tpl->tpl_vars['vendor']->value;?>
:</b>
    has <b><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</b> items, with prices starting at 
    <?php if ($_smarty_tpl->tpl_vars['price']->value) {?>
        <b><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</b>
    <?php } else { ?>
        Not found
    <?php }?>
</div><?php }} ?>
