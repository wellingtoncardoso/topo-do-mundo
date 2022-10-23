<form role="search" medthod="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) )?>">
  <div>
    <label class="screen-reader-text" for="s"></label>
    <input type="text" value="<?php echo get_search_query();?>" name="s" id="s" placeholder="O que busca?">
    <span><i class="fa fa-search"></i></span>
  </div>
</form>