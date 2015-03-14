<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 18:15:40
         compiled from "/www/cheapbooksearch/protected/templates/priceRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69327996854cee9617ac779-39898951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916cf379f875bc1fbb9061fe147d0d191f7862e9' => 
    array (
      0 => '/www/cheapbooksearch/protected/templates/priceRow.tpl',
      1 => 1426356931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69327996854cee9617ac779-39898951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cee9617c70a4_10416994',
  'variables' => 
  array (
    'link' => 0,
    'country' => 0,
    'vendor' => 0,
    'stock' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cee9617c70a4_10416994')) {function content_54cee9617c70a4_10416994($_smarty_tpl) {?><div data-url="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" data-country="<?php echo $_smarty_tpl->tpl_vars['country']->value->code_3;?>
" class="priceRow buyLink">
    <span><?php echo $_smarty_tpl->tpl_vars['vendor']->value;?>
:</span>
    has <span><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</span> items
    <?php if (isset($_smarty_tpl->tpl_vars['price']->value)&&$_smarty_tpl->tpl_vars['link']->value) {?>
        , with prices starting at <span><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</span>    
    <?php }?>
</div><?php }} ?>
