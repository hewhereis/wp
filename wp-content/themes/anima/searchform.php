<?php
/**
 * The template for displaying the searchform
 *
 * @package Anima
 */
?>

<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _e( 'Search for:', 'anima' ); ?></span>
		<input type="search" class="s" placeholder="<?php echo esc_attr_e( 'Search', 'anima' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="searchsubmit"><span class="screen-reader-text"><?php echo _e( 'Search', 'anima' ); ?></span><i class="icon-search"></i></button>
</form>
