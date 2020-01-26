<div id="search-big-container">
	<div id="search-content" class="center-content">
		<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
			<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>">
		</form>	
		<div id="close-search" onclick="hideSearchField('#search-big-container');">
			<i class="fa fa-times"></i>
		</div>			
	</div>
</div>