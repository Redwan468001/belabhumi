<form role="search" method="get" class="example" id="searchform"  style="margin:auto;" action="<?php echo home_url( '/' ); ?>">
    <div>
		<label class="screen-reader-text" for="s"></label>
        <input type="text" value="" name="s" id="s" placeholder="অনুসন্ধান..." placeholder="<?php the_search_query(); ?>" />
    </div>
</form>

