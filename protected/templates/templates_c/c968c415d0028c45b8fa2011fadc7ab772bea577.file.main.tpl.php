<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 04:17:12
         compiled from "/www/cheapbooksearch/protected/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73694573654ced0d6223a80-33011413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c968c415d0028c45b8fa2011fadc7ab772bea577' => 
    array (
      0 => '/www/cheapbooksearch/protected/templates/main.tpl',
      1 => 1426479427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73694573654ced0d6223a80-33011413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ced0d62396e6_22788024',
  'variables' => 
  array (
    'pagetitle' => 0,
    'country' => 0,
    'countries' => 0,
    'ctry' => 0,
    'bestsellers' => 0,
    'book' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ced0d62396e6_22788024')) {function content_54ced0d62396e6_22788024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_translate')) include '/www/cheapbooksearch/protected/classes/Smarty/plugins/function.translate.php';
?><!DOCTYPE HTML>
<html lang="en">
    <head>        
        <link rel="icon" href="/favicon.ico">
        <title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

        <?php echo $_smarty_tpl->getSubTemplate ('metaTags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        
        <link rel="stylesheet" type="text/css" href="/assets/css/reset.css" />
        
        <link rel="stylesheet" type="text/css" href="/assets/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/nyt.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/searchform.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/results.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/footer.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" />
        
        <link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        
        <?php echo $_smarty_tpl->getSubTemplate ('scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <link rel="stylesheet" href="/assets/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />   
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['country']->value->code_3;?>
/">
                        <span class="cheap">Cheap</span>
                        <span class="text">Book Search</span>
                    </a>  
                </div>
                <div class="toggleMobile">
                    <span class="menu1"></span>
                    <span class="menu2"></span>
                    <span class="menu3"></span>
                </div>
                <div id="mobileMenu">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['ctry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ctry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ctry']->key => $_smarty_tpl->tpl_vars['ctry']->value) {
$_smarty_tpl->tpl_vars['ctry']->_loop = true;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['ctry']->value->code_3==$_smarty_tpl->tpl_vars['country']->value->code_3) {?>class="active"<?php }?>>
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['ctry']->value->code_3;?>
/">
                                <img src="/assets/images/flags/32/<?php echo $_smarty_tpl->tpl_vars['ctry']->value->code_2;?>
.png" />
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <nav>                   
                    <ul >
                        <?php  $_smarty_tpl->tpl_vars['ctry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ctry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ctry']->key => $_smarty_tpl->tpl_vars['ctry']->value) {
$_smarty_tpl->tpl_vars['ctry']->_loop = true;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['ctry']->value->code_3==$_smarty_tpl->tpl_vars['country']->value->code_3) {?>class="active"<?php }?>>
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['ctry']->value->code_3;?>
/">
                                <img src="/assets/images/flags/32/<?php echo $_smarty_tpl->tpl_vars['ctry']->value->code_2;?>
.png" />
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </header> 
        <section class="body">
           
            <div class="container" role="main">
                <div class="nyt-holder">
                    <?php  $_smarty_tpl->tpl_vars['book'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['book']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bestsellers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['book']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['book']->key => $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->_loop = true;
 $_smarty_tpl->tpl_vars['book']->iteration++;
?>
                        <?php if ($_smarty_tpl->tpl_vars['book']->iteration<=6) {?>
                            <div class="nyt-item" data-name="nyt">
                                <div class="nyt-wrapper" >
                                    <form class="nyt">
                                        <input type="hidden" name="author" value="<?php echo ucwords($_smarty_tpl->tpl_vars['book']->value->book_details[0]->author);?>
" />
                                        <input type="hidden" name="title" value="<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['book']->value->book_details[0]->title));?>
" />
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->book_details[0]->book_image;?>
" class="nyt-img"/>
                                    </form>
                                </div>
                            </div>
                        <?php }?>
                    <?php } ?>
                </div>
                    
                <div class="cleared"></div>
                
                <div id="headerLoader" class="loadingBar hidden"><i class="fa fa-refresh fa-spin"></i> Searching</div>

                <h2><?php echo smarty_function_translate(array('key'=>"find_lowest",'default'=>"Find the Lowest Prices On Millions of Books Instantly"),$_smarty_tpl);?>
</h2>
                <?php echo smarty_function_translate(array('key'=>"free_search",'default'=>"CheapBookSearch.com is a <b>free book search engine</b> where you’ll find the lowest prices on millions of books so you can read more and pay less."),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->getSubTemplate ('searchForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <div id="results">
                    <h4><?php echo smarty_function_translate(array('key'=>"how_it_works",'default'=>"How It Works"),$_smarty_tpl);?>
:</h4>
                    <ul>
                        <li><?php echo smarty_function_translate(array('key'=>"type_title",'default'=>"Type in a title or author to instantly search millions of books and find the cheapest price - <b>now you’ll always get the best deal on every book you buy</b>"),$_smarty_tpl);?>

                        </li>
                        <li><?php echo smarty_function_translate(array('key'=>"see_reviews",'default'=>"See reviews, summaries, and deals all in one place so you don’t waste hours of time searching hundreds of other book sites"),$_smarty_tpl);?>
</li>
                        <li><?php echo smarty_function_translate(array('key'=>"buy_direct",'default'=>"Buy direct from 100’s of vendors  and get your books fast - we are a 100% FREE SERVICE and always will be"),$_smarty_tpl);?>
</li>
                    </ul>
                </div>
            </div>
        </section>  
        <footer  class="container footer cleared">
            &copy; <a href="/">Cheap Book Search <?php echo date('Y');?>
</a>
        </footer>  
    </body>
    
</html>

<?php }} ?>
