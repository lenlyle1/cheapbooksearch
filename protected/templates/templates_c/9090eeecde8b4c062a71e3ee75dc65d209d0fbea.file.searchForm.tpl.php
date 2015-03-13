<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-25 06:23:31
         compiled from "/home/protected/templates/searchForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17963421154e90e327d4dc7-12929876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9090eeecde8b4c062a71e3ee75dc65d209d0fbea' => 
    array (
      0 => '/home/protected/templates/searchForm.tpl',
      1 => 1424844895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17963421154e90e327d4dc7-12929876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e90e32810a64_24005029',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e90e32810a64_24005029')) {function content_54e90e32810a64_24005029($_smarty_tpl) {?>
<div class="search-form col-md-4 col-md-offset-4" >
    <form id="form"  role="form">
        <input type="hidden" name="itemPage" value="1" />

        <div class="form-group">
              <input type="text" name="author" placeholder="Author" class="form-control" />
        </div>
        <div class="form-group">
            <input  type="text" name="title" placeholder="Title" class="form-control" />
        </div>
        <div class="form-group">
            <input type="text" name="isbn" placeholder="ISBN" value="" class="form-control" />
        </div>
        <div class="form-group">
            <input type="text" name="keywords" placeholder="Keywords" class="form-control" />
        </div>
        <div class="form-group">
            <div type="button" value="Search" class="button" onclick="Search.run('form')"><i class="fa fa-book" id="searchButton"></i> Search</div>
        </div>
    </form>
</div>

<div style="clear: both;"></div><?php }} ?>
