<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-25 02:48:59
         compiled from "/home/protected/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21356270854e90e326b5cc9-10903633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '267ea1513962ea7ea5bdd1ebd4573795bf6ebfc0' => 
    array (
      0 => '/home/protected/templates/main.tpl',
      1 => 1424830913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21356270854e90e326b5cc9-10903633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e90e3271f0c5_89315311',
  'variables' => 
  array (
    'pagetitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e90e3271f0c5_89315311')) {function content_54e90e3271f0c5_89315311($_smarty_tpl) {?><html lang="en">
    <head>        
        <link rel="icon" href="/favicon.ico">
        <title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

        <?php echo $_smarty_tpl->getSubTemplate ('metaTags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <link rel="stylesheet" href="/assets/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />   
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
        
        <link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        
        <?php echo $_smarty_tpl->getSubTemplate ('scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </head>
    
    <body role="document">
        <nav class="navbar navbar-fixed-top">
            <div class="container ">
                <div class="navbar-header">
                    <div class="logo navbar-brand">
                        <a href="/" class="">
                            <span class="cheap">Cheap</span>
                            <span class="text">Book Search</span>
                        </a>
                    </div>  
                </div>
            </div>
        </nav>
       
        
        <div class="container" role="main">
                <?php echo $_smarty_tpl->getSubTemplate ('searchForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <div id="results">
                    <p>Welcome to Cheap Book Search, the new search engine to find to best prices for books on the web.</p>

                    <p>Search for new books, used books and hard to find books. We are adding more vendors daily, 
                        to provide you with the most comprehensive results.</p>

                    <p>We will soon be adding more countries for our international users.</p>
                </div>
        </div>
            
    </body>
    
</html>

<?php }} ?>
