<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-23 03:49:13
         compiled from "/home/protected/templates/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170168419854ea1b655d0089-51800232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9cfb29472400c99ce70faa94e514832dcd90cea' => 
    array (
      0 => '/home/protected/templates/scripts.tpl',
      1 => 1424663302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170168419854ea1b655d0089-51800232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ea1b655ee7e6_53052836',
  'variables' => 
  array (
    'vendors' => 0,
    'vendor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea1b655ee7e6_53052836')) {function content_54ea1b655ee7e6_53052836($_smarty_tpl) {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/jquery-ui-1.8.18.custom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/search.js"><?php echo '</script'; ?>
>
        

        <?php echo '<script'; ?>
>
            var vendors = [
                <?php  $_smarty_tpl->tpl_vars['vendor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->key => $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->_loop = true;
?>"<?php echo $_smarty_tpl->tpl_vars['vendor']->value['name'];?>
",<?php } ?>
            ];
            
            
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-57013083-1', 'auto');
            ga('send', 'pageview'); 
            
            function scrollToID(id, speed){
                var offSet = 70;
                var targetOffset = $(id).offset().top - offSet;
                $('html,body').animate({scrollTop:targetOffset}, speed);
            }
            
        <?php echo '</script'; ?>
>
        
       <?php }} ?>
