<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 00:21:41
         compiled from "/www/cheapbooksearch/protected/templates/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83306376654ea713626ce75-10279990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995522618496fa4f33e04c226162fa6027e834b8' => 
    array (
      0 => '/www/cheapbooksearch/protected/templates/scripts.tpl',
      1 => 1426465297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83306376654ea713626ce75-10279990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ea713626f818_14594183',
  'variables' => 
  array (
    'vendors' => 0,
    'vendor' => 0,
    'country' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea713626f818_14594183')) {function content_54ea713626f818_14594183($_smarty_tpl) {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/modernizr.custom.85895.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/respond.js"><?php echo '</script'; ?>
>
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
 type="text/javascript" src="/assets/js/search.js"><?php echo '</script'; ?>
>
        

        <?php echo '<script'; ?>
>
            var vendors = [<?php  $_smarty_tpl->tpl_vars['vendor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vendor']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['vendor']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->key => $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->_loop = true;
 $_smarty_tpl->tpl_vars['vendor']->iteration++;
 $_smarty_tpl->tpl_vars['vendor']->last = $_smarty_tpl->tpl_vars['vendor']->iteration === $_smarty_tpl->tpl_vars['vendor']->total;
?>"<?php echo $_smarty_tpl->tpl_vars['vendor']->value->name;?>
"<?php if (!$_smarty_tpl->tpl_vars['vendor']->last) {?>,<?php }
} ?>];
            var country = '<?php echo $_smarty_tpl->tpl_vars['country']->value->code_3;?>
';
            
            
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-57013083-1', 'auto');
            ga('send', 'pageview'); 
            
            function scrollToID(id, speed){
                if($("#searchTop").length){
                    var offSet = 60;
                    var targetOffset = $(id).offset().top - offSet;
                    $('html,body').animate({scrollTop:targetOffset}, speed);
                }
            }
            
            // responsive
            (function ($, window, document, undefined){
                'use strict';$(function (){
                    $("#mobileMenu").hide();
                    $(".toggleMobile").click(function(){
                        $(this).toggleClass("active");
                        $("#mobileMenu").slideToggle(500);
                    });
                });
                $(window).on("resize", function(){
                    if($(this).width() > 500){
                        $("#mobileMenu").hide();
                        $(".toggleMobile").removeClass("active");
                    }});
            })(jQuery, window, document);
            
        <?php echo '</script'; ?>
>
        
       <?php }} ?>
