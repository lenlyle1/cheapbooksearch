<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:35:58
         compiled from "/home/protected/templates/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13522525254e90e3279bf65-30020872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29566405641c90a454739a7c8e4a8046000ada72' => 
    array (
      0 => '/home/protected/templates/content.tpl',
      1 => 1424626539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13522525254e90e3279bf65-30020872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e90e327ae061_73518718',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e90e327ae061_73518718')) {function content_54e90e327ae061_73518718($_smarty_tpl) {?>            
                <div class="row"> 
                    <?php echo $_smarty_tpl->getSubTemplate ('searchForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>

                <div class="row"> 
                    <div id="results">
                        <p>Welcome to Cheap Book Search, the new search engine to find to best prices for books on the web.</p>

                        <p>Search for new books, used books and hard to find books. We are adding more vendors daily, 
                            to provide you with the most comprehensive results.</p>

                        <p>We will soon be adding more countries for our international users.</p>
                    </div>
                </div>
<?php echo '<script'; ?>
>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57013083-1', 'auto');
  ga('send', 'pageview');

<?php echo '</script'; ?>
><?php }} ?>
