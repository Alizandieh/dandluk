<div id="sta-wrapper">		
	
	<div id="sta-menu-wide" class="theMenuLeft noselect" >							
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#header-options" >
			<div class="sta-m-btn-iconc">
				<i class="flaticon-header"></i>
			</div>
			<span>Header</span>
		</div>
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#intro-options" >
			<div class="sta-m-btn-iconc">
				<i class="fa  fa-paper-plane"></i>
			</div>
			<span>Page Intro</span>
		</div>
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#stickyheader-options" >
			<div class="sta-m-btn-iconc">
				<i class="fa fa-flash"></i>
			</div>
			<span>Sticky Header</span>
		</div>
		<?php if(get_post_type( get_the_ID() ) == "product"){ ?>
			<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#woocommerce-options" >
				<div class="sta-m-btn-iconc">
					<i class="fa fa-shopping-cart"></i>
				</div>
				<span>WooCommerce</span>
			</div>
		<?php } ?>
		<?php if(get_post_type( get_the_ID() ) == "portfolio"){ ?>
			<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#portfolio-options" >
				<div class="sta-m-btn-iconc">
					<i class="fa fa-newspaper-o"></i>
				</div>
				<span>Portfolio</span>
			</div>
		<?php } ?>
		<?php if(get_post_type( get_the_ID() ) == "post"){ ?>
			<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#post-options" >
				<div class="sta-m-btn-iconc">
					<i class="fa fa-newspaper-o"></i>
				</div>
				<span>Post</span>
			</div>
		<?php } ?>
		
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#layout-options" >
			<div class="sta-m-btn-iconc">
				<i class="flaticon-three101"></i>
			</div>
			<span>Layout</span>
		</div>
				
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#titlebar-options" >
			<div class="sta-m-btn-iconc">
				<i class="flaticon-right75"></i>
			</div>
			<span>Page Title Bar</span>
		</div>
		
		<?php if(in_array(get_post_type( get_the_ID()), $post_types_np )){ ?>
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#nextprevious-options" >
			<div class="sta-m-btn-iconc">
				<i class="fa fa-arrows-h icon-large"></i>
			</div>
			<span>Next / Previous</span>
		</div>
		<?php } ?>
		
		<div onclick="switch_optionDv(this);" class="sta-menu-button" data-id="#sidebar-options" >
			<div class="sta-m-btn-iconc">
				<i class="flaticon-layout26"></i>
			</div>
			<span>Sidebar</span>
		</div>

		<div onclick="switch_optionDv(this);" class="sta-menu-button sta-menu-button-active" data-id="#config-options" >
			<div class="sta-m-btn-iconc">
				<i class="fa fa-sliders"></i>
			</div>
			<span>Configuration</span>
		</div>						
		
		<hr>		
	</div>
		
	<div id="sta-container">