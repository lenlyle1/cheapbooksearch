<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 12:41:49
         compiled from "/www/cheapbooksearch/protected/templates/searchForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143197400654ced1ac2013f9-04563894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd58808af3c82529ef546a2f807cc197ac53ccf20' => 
    array (
      0 => '/www/cheapbooksearch/protected/templates/searchForm.tpl',
      1 => 1426164106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143197400654ced1ac2013f9-04563894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ced1ac21ba53_40649469',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ced1ac21ba53_40649469')) {function content_54ced1ac21ba53_40649469($_smarty_tpl) {?>
<div class="search-form" >
    <form id="form"  role="form">
        <input type="hidden" name="itemPage" value="1" />

        <div class="form-group">
              <input type="text" name="author" placeholder="Author" value="" class="form-control" id="author"/>
        </div>
        <div class="form-group">
            <input  type="text" name="title" placeholder="Title" class="form-control" id="title" />
        </div>
        <div class="form-group">
            <input type="text" name="isbn" placeholder="ISBN" value="" class="form-control" />
        </div>
        <div class="form-group">
            <input type="text" name="keywords" placeholder="Keywords" class="form-control" />
        </div>
        <div class="form-group">
            <div type="button" value="Search" class="btn" onclick="Search.run('form')"><i class="fa fa-book" id="searchButton"></i> Search</div>
        </div>
    </form>
</div>

<div style="clear: both;"></div><?php }} ?>
