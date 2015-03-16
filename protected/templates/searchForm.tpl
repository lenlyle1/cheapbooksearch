
<div class="search-form" >
    <form id="form"  role="form">
        <input type="hidden" name="itemPage" value="1" />

        <div class="form-group">
              <input type="text" name="author" placeholder="{translate key="author" default="Author"}" value="" class="form-control" id="author"/>
        </div>
        <div class="form-group">
            <input  type="text" name="title" placeholder="{translate key="title" default="Title"}" class="form-control" id="title" />
        </div>
        <div class="form-group">
            <input type="text" name="isbn" placeholder="{translate key="isbn" default="ISBN"}" value="" class="form-control" />
        </div>
        <div class="form-group">
            <input type="text" name="keywords" placeholder="{translate key="keywords" default="Keywords"}" class="form-control" />
        </div>
        <div class="form-group">
            <div type="button" value="Search" class="btn" onclick="Search.run('form')"><i class="fa fa-book" id="searchButton"></i> Search</div>
        </div>
    </form>
</div>

<div style="clear: both;"></div>