<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="search" class="search-field" placeholder="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/GUP-NEW-logo-2019.1.png" value="<?php echo get_search_query() ?>" name="s" />
	</label>
</form>