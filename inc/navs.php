<?php
	
	function bs_menu($is_responsive = TRUE, $theme_location = 'primary', $menu_side = 'left', $brand = NULL, $rightNav = NULL) {
    	ob_start();
    	?>
<nav
    class="navbar navbar-sherpa  navbar-expand-lg  navbar-dark  <?php if(!is_front_page()) : ?>navbar-expand-lg<?php endif; ?>">
    <?php
		if($is_responsive == TRUE) {
			$collapse_id = rand(1,99);
			?>
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-<?=$collapse_id?>" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-<?=$collapse_id?>">
        <?php
		}

		$menu_classes = "nav navbar-nav";
		if($menu_side == 'right'):
		    $menu_classes .= ' navbar-right';
        endif;

		$args = array(
			'theme_location'	=> $theme_location,
			'depth'				=> 2,
			'menu_class'		=> $menu_classes,
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker()
		);
		wp_nav_menu($args);



		
		if($is_responsive == TRUE) {
			?>
    </div><!-- /.navbar-collapse -->
    <?php
		}
		
		?>
</nav>
<?php
		
		return ob_get_clean();
	}
	
	function responsive_bs_menu($theme_location = 'primary', $menu_side = 'left', $brand = NULL) {
		return bs_menu(TRUE, $theme_location, $menu_side, $brand);
	}
	
	function non_responsive_bs_menu($theme_location = 'primary', $menu_side = 'left', $brand = NULL) {
		return bs_menu(FALSE, $theme_location, $menu_side, $brand);
	}