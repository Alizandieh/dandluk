<?php include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/top.php'); ?>
<div class="sy-admin-info">
	<div class="sy-admin-info-row">
		<div class="sy-admin-info-element">
			<h4><span>I.</span><?php echo esc_html__('What to expect ?','kameleon'); ?></h4>
			<div class="sy-admin-info-element-text">
				<?php echo esc_html__('Kameleon theme will change your WordPress experience! With our solid Kameleon Core solid Framework and with the help of some of the best WordPress Premium Plugins out there you can now create unique websites with just few clicks.','kameleon'); ?><br/><br/>
				<strong><?php echo esc_html__('Demo Importer : ','kameleon'); ?></strong><?php echo esc_html__('Unlike most of themes outhere. With kameleon you will not need an update to get new demo websites that will help you getting started. New demos are pushed directly from our servers','kameleon'); ?> 
			</div>
		</div>	

		<div class="sy-admin-info-element">
			<h4><span>II.</span><?php echo esc_html__('Kameleon Core Framework','kameleon'); ?></h4>
			<div class="sy-admin-info-element-text">
				<?php echo esc_html__('We have built Kameleon theme with every aspect in mind. Kameleon Core FrameWork provides you with a full control of your website. You can use our Theme option to built the wonderfull website you have ever wanted. In addition to this we have added Option anel for every page so you will have more control in every page! ','kameleon'); ?><br/><br/><br/><br/>
			</div>
		</div>					
	</div>
	<div class="sy-admin-info-row">
		<div class="sy-admin-info-element">
			<h4><span>III.</span><?php echo esc_html__('How Kameleon updates work ?','kameleon'); ?></h4>
			<div class="sy-admin-info-element-text">
				<?php echo esc_html__('Kameleon team work hard to push updates and provide better experience for it\'s great clients :','kameleon'); ?><br/>
				<strong><?php echo esc_html__('Minor Updates : ','kameleon'); ?></strong><?php echo esc_html__('Will contain small added features - Bug fixes - Improve code quality - Plugin updates...','kameleon'); ?><br/>
				<strong><?php echo esc_html__('Najor Updates : ','kameleon'); ?></strong><?php echo esc_html__('Wonderful new features and more, Stay tunned !','kameleon'); ?><br/>
			</div>
		</div>	

		<div class="sy-admin-info-element">
			<h4><span>IV.</span><?php echo esc_html__('Documention & Support','kameleon'); ?></h4>
			<div class="sy-admin-info-element-text">
				<?php echo esc_html__('We provide a full extensive offline and online documentation that will help you getting started with the Kameleon Theme. If you can\'t find the information in the docs you can look for a solution in our Support center. We realy encourage you to search on the previous forums threads before opening a new one. ','kameleon'); ?>
			</div>
		</div>	

	</div>
</div>
<div class="sy-admin-options-buttons">
	
	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #279eca;">
			<i class="fa fa-sliders"></i>
		</div>
		<div class="syeb-btn-name">Theme Options</div>
		<a href="<?php echo admin_url('admin.php?page=kameleon_theme_options'); ?>"></a>
	</div>

	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #e74c3c;">
			<i class="fa fa-cloud-download"></i>
		</div>
		<div class="syeb-btn-name">Demo Importer</div>
		<a href="<?php echo admin_url('admin.php?page=kameleon-demo-importer'); ?>"></a>
	</div>

<?php if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){ ?>
	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #069a8c;">
			<i class="fa fa-paint-brush"></i>
		</div>
		<div class="syeb-btn-name">CF7 Designer</div>
		<a href="<?php echo admin_url('admin.php?page=kameleon-cf7-designer'); ?>"></a>
	</div>
<?php } ?>
	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #A57164;">
			<i class="fa fa-wrench"></i>
		</div>
		<div class="syeb-btn-name">Custom Settings</div>
		<a href="<?php echo admin_url('admin.php?page=kameleon-custom-settings'); ?>"></a>
	</div>

	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #536872;">
			<i class="fa fa-file-text"></i>
		</div>
		<div class="syeb-btn-name">Documention</div>
		<a href="http://sayenthemes.com/work/docv1.3/" target="_blank"></a>
	</div>

	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #cc181e;">
			<i class="fa fa-youtube"></i>
		</div>
		<div class="syeb-btn-name">Video Tutorials</div>
		<a href="https://www.youtube.com/channel/UCWmna_vqWRlNP7nfIjR12eg" target="_blank"></a>
	</div>

	<div class="sy-admin-options-element-btn">
		<div class="syeb-btn-icon" style="background: #2F847C;">
			<i class="fa fa-life-ring"></i>
		</div>
		<div class="syeb-btn-name">Support</div>
		<a href="https://sayenthemes.ticksy.com/" target="_blank"></a>
	</div>


</div>