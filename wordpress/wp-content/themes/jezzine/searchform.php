<form role="search" method="get" action="<?php echo home_url(); ?>" class="form-row px-3 pb-3">
    <div class="col">
        <input class="form-control mr-sm-2" type="search" placeholder="البحث" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search">
    </div>
    <div class="col-2">
        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>