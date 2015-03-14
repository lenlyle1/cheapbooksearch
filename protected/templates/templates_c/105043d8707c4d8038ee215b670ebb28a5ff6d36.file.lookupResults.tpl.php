<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 17:54:30
         compiled from "/www/cheapbooksearch/protected/templates/lookupResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179089089454cee65c50b228-11803487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105043d8707c4d8038ee215b670ebb28a5ff6d36' => 
    array (
      0 => '/www/cheapbooksearch/protected/templates/lookupResults.tpl',
      1 => 1426355652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179089089454cee65c50b228-11803487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cee65c590e80_62430696',
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
<?php if ($_valid && !is_callable('content_54cee65c590e80_62430696')) {function content_54cee65c590e80_62430696($_smarty_tpl) {?><div id="searchTop"></div>
<h1 class="headerBar">Search results</h1>
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
            <div class="book-img-small left">
                <img src="<?php if (isset($_smarty_tpl->tpl_vars['book']->value->SmallImage->URL)) {
echo $_smarty_tpl->tpl_vars['book']->value->SmallImage->URL;
} else { ?>/assets/images/book_small.png<?php }?>" />
            </div>

            <div class="details right">
                <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                    <div class="title bold"><span>Author<?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)&&is_array($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>s<?php }?>:</span>
                        <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)&&is_array($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                            <?php $_smarty_tpl->tpl_vars["authorName"] = new Smarty_variable(implode(", ",$_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author), null, 0);?>
                            <?php echo implode(", ",$_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["authorName"] = new Smarty_variable($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author, null, 0);?>
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author;?>

                        <?php }?>
                    </div>
                <?php }?>
                <div class="title bold"><span>Title:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
</div>
                <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate)) {?>
                    <div class="title bold"><span>Publication date:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate;?>
</div>
                <?php }?>
            </div>
            <div class="actions cleared">
                <div class="btn showDetails" data-item="<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
">Details</a></div>
                <div class="text">- or -</div>
                <div class="btn findPrices" data-item="<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
" data-asin="<?php echo $_smarty_tpl->tpl_vars['book']->value->ASIN;?>
" data-isbn="<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN;?>
" data-author="<?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
"><i class="fa fa-book searchButton"></i> Find prices</div>
            </div>
            <div class="prices"></div>

            <div style="display:none;" class="">
                <div class="fullDetails" id="details_<?php echo $_smarty_tpl->tpl_vars['book']->iteration;?>
">
                    <div class='image'>
                        <img src="<?php if (isset($_smarty_tpl->tpl_vars['book']->value->MediumImage->URL)) {
echo $_smarty_tpl->tpl_vars['book']->value->MediumImage->URL;
} else { ?>/assets/images/book.png<?php }?>" />
                    </div>
                    <div class="details col-md-7">
                        <?php if (!empty($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                            <span>Author:</span> 
                            <?php if (is_array($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author)) {?>
                                <?php echo implode(", ",$_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author);?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Author;?>

                            <?php }?><br />
                        <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title)) {?>
                        <span>Title:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Title;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Binding)) {?>
                        <span>Binding:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Binding;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Height)) {?>
                        <span>Dimensions:</span> 
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Height->_;?>
 x 
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Length->_;?>
 x 
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Width->_;?>

                            (<?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Height->Units;?>
)<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Weight)) {?>
                        <span>Weight:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ItemDimensions->Weight->_;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Manufacturer)) {?>
                        <span>Manufacturer:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Manufacturer;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Manufacturer)) {?>
                        <span>EAN:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->EAN;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN)) {?>
                        <span>ISBN:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->ISBN;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Edition)) {?>
                        <span>Edition:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Edition;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->Language)) {?>
                        <span>Languages:</span> 
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
                        <span>Num pages::</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->NumberOfPages;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->EditorialReviews->EditorialReview->Content)) {?>
                        <span>Description:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->EditorialReviews->EditorialReview->Content;?>
<br />
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate)) {?>
                        <span>Publication date:</span> <?php echo $_smarty_tpl->tpl_vars['book']->value->ItemAttributes->PublicationDate;?>

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


<div id="footerLoader" class="loadingBar col-md-12 col-xs-12 hidden"><i class="fa fa-refresh fa-spin"></i> Searching</div>
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
