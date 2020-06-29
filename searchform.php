<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<div class="search-button">
			<input type="search" class="search-field" placeholder="" value="<?php echo get_search_query() ?>" name="s" />
			<input type="image" src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/06/search.png" alt="Submit" width="10" height="10" />
		</div>
	</label>
</form>