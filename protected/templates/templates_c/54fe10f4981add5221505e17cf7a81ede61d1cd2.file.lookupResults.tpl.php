<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-25 05:22:02
         compiled from "/home/protected/templates/lookupResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155526668254e90e9b9cfa11-37511231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fe10f4981add5221505e17cf7a81ede61d1cd2' => 
    array (
      0 => '/home/protected/templates/lookupResults.tpl',
      1 => 1424839998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155526668254e90e9b9cfa11-37511231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e90e9bc4ef01_14191718',
  'variables' => 
  array (
    'results' => 0,
    'book' => 0,
    'authorName' => 0,
    'language' => 0,
    'post' => 0,
    'totalPages' => 0,
    'count' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e90e9bc4ef01_14191718')) {function content_54e90e9bc4ef01_14191718($_smarty_tpl) {?><div id="searchTop"></div>
<h1>Search results:</h1>
<?php  $_smarty_tpl->tpl_vars['book'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['book']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['book']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['book']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['book']->key => $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->_loop = true;
 $_smarty_tpl->tpl_vars['book']->iteration++;
 $_smarty_tpl->tpl_vars['book']->last = $_smarty_tpl->tpl_vars['book']->iteration === $_smarty_tpl->tpl_vars['book']->total;
?>
        <?php $_smarty_tpl->tpl_vars["author"] = new Smarty_variable('', null, 0);?>
        <div id="bookResult<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
" class="bookResult<?php if ($_smarty_tpl->tpl_vars['book']->iteration%2==0) {?> odd<?php }
if ($_smarty_tpl->tpl_vars['book']->last) {?> last<?php }?> row">
            <div class="col-md-1 col-xs-3">
                <img src="<?php if (isset($_smarty_tpl->tpl_vars['book']->value->SmallImage->URL)) {
echo $_smarty_tpl->tpl_vars['book']->value->SmallImage->URL;
} else { ?>/assets/images/book_small.png<?php }?>" />
            </div>

            <div class="details col-md-9 col-xs-9">
                <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                    <div class="author"><b>Author<?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)&&is_array($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>s<?php }?>:</b>
                        <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)&&is_array($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                            <?php $_smarty_tpl->tpl_vars["authorName"] = new Smarty_variable(implode(", ",$_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author), null, 0);?>
                            <?php echo implode(", ",$_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["authorName"] = new Smarty_variable($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author, null, 0);?>
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author;?>

                        <?php }?>
                    </div>
                <?php }?>
                <div class="title"><b>Title:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
</div>
                <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate)) {?>
                    <div class="title"><b>Publication date:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate;?>
</div>
                <?php }?>
            </div>
            <div class="actions col-md-2 col-xs-12">
                <div class="button showDetails" data-item="<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
">Details</a></div>
                <div class="text">- or -</div>
                <div class="button findPrices" data-item="<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
" data-asin="<?php echo $_smarty_tpl->tpl_vars['book']->value->ASIN;?>
" data-isbn="<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN;?>
" data-author="<?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
"><i class="fa fa-book searchButton"></i> Find prices</div>
            </div>
            <div class="prices col-md-12 col-xs-12"></div>

            <div style="display:none;" class="col-xs-12">
                <div class="fullDetails" id="details_<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
">
                    <div class='image col-md-2'>
                        <img src="<?php if (isset($_smarty_tpl->tpl_vars['book']->value->MediumImage->URL)) {
echo $_smarty_tpl->tpl_vars['book']->value->MediumImage->URL;
} else { ?>/assets/images/book.png<?php }?>" />
                    </div>
                    <div class="details col-md-7">
                        <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                            <b>Author:</b> 
                            <?php if (is_array($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                                <?php echo implode(", ",$_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author);?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author;?>

                            <?php }?><br />
                        <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title)) {?>
                        <b>Title:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Binding)) {?>
                        <b>Binding:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Binding;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Height)) {?>
                        <b>Dimensions:</b> 
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Height->_;?>
 x 
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Length->_;?>
 x 
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Width->_;?>

                            (<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Height->Units;?>
)<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Weight)) {?>
                        <b>Weight:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Weight->_;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Manufacturer)) {?>
                        <b>Manufacturer:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Manufacturer;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Manufacturer)) {?>
                        <b>EAN:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->EAN;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN)) {?>
                        <b>ISBN:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Edition)) {?>
                        <b>Edition:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Edition;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Language)) {?>
                        <b>Languages:</b> 
                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Languages->Language; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['language']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['language']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['language']->iteration++;
 $_smarty_tpl->tpl_vars['language']->last = $_smarty_tpl->tpl_vars['language']->iteration === $_smarty_tpl->tpl_vars['language']->total;
?>
                                <?php echo $_smarty_tpl->tpl_vars['language']->value->Name;?>
-<?php echo $_smarty_tpl->tpl_vars['language']->value->Type;?>
 <?php if (!$_smarty_tpl->tpl_vars['language']->last) {?>|<?php }?>
                        <?php } ?>
                        <br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->NumberOfPages)) {?>
                        <b>Num pages::</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->NumberOfPages;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->EditorialReviews->EditorialReview->Content)) {?>
                        <b>Description:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->EditorialReviews->EditorialReview->Content;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate)) {?>
                        <b>Publication date:</b> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate;?>

                    <?php }?>
                    </div>
                    <div class="links col-md-3">                
                        <div class="button buyAmazon col-xs-12" data-url="<?php echo $_smarty_tpl->tpl_vars['book']->value->DetailPageURL;?>
">Buy on Amazon</div>
                        - OR -
                        <div class="inFancybox button findPrices" data-item="<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
" data-asin="<?php echo $_smarty_tpl->tpl_vars['book']->value->ASIN;?>
" data-isbn="<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN;?>
" data-author="<?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
"><i class="fa fa-book searchButton"></i> Find prices</div>
                    </div>
                </div>
            </div>    
        </div>
<?php } ?>
<br />

<form id="loadMore">
    <input type="hidden" name="author" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['author'];?>
" />
    <input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" />
    <input type="hidden" name="isbn" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['isbn'];?>
" />
    <input type="hidden" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keywords'];?>
" />
</form>
<?php if (isset($_smarty_tpl->tpl_vars['results']->value['totalPages'])) {?>
<?php $_smarty_tpl->tpl_vars["totalPages"] = new Smarty_variable($_smarty_tpl->tpl_vars['results']->value['totalPages'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['totalPages']->value>10) {?>
    <?php $_smarty_tpl->tpl_vars["totalPages"] = new Smarty_variable(10, null, 0);?>
<?php }?>
<div id="nextButtons">
    Page:
<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['count']->step = 1;$_smarty_tpl->tpl_vars['count']->total = (int) ceil(($_smarty_tpl->tpl_vars['count']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['count']->step));
if ($_smarty_tpl->tpl_vars['count']->total > 0) {
for ($_smarty_tpl->tpl_vars['count']->value = 1, $_smarty_tpl->tpl_vars['count']->iteration = 1;$_smarty_tpl->tpl_vars['count']->iteration <= $_smarty_tpl->tpl_vars['count']->total;$_smarty_tpl->tpl_vars['count']->value += $_smarty_tpl->tpl_vars['count']->step, $_smarty_tpl->tpl_vars['count']->iteration++) {
$_smarty_tpl->tpl_vars['count']->first = $_smarty_tpl->tpl_vars['count']->iteration == 1;$_smarty_tpl->tpl_vars['count']->last = $_smarty_tpl->tpl_vars['count']->iteration == $_smarty_tpl->tpl_vars['count']->total;?>
    <button <?php if ($_smarty_tpl->tpl_vars['count']->value==$_smarty_tpl->tpl_vars['page']->value) {?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</button>
<?php }} ?>
</div>
<?php }?><?php }} ?>
