<?php 
//Getting All the Demos 
//$demos_url = file_get_contents('https://raw.githubusercontent.com/SayenThemes/kameleon-demo-files/master/demos-list.json');
//$demos_list = json_decode($demos_url,true);	

include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/top.php'); ?>		
		<div class="sy-mmaker-white" style="margin-top: 30px;">
			<div class="sy-mmaker-overlay importation">
				<div class="sy-mmaker-center sy-mmaker-top">
					<div class="spinner6"></div>
					<span><?php echo esc_html__('Stand up and stretch a little while importing the demo data.','kameleon'); ?></span>
				</div>
			</div>
			<div class="sy-mmaker-overlay retrieve">
				<div class="sy-mmaker-center sy-mmaker-top">
					<div class="spinner6"></div>
					<span><?php echo esc_html__('Retrieving demos from the server.','kameleon'); ?></span>
				</div>
			</div>
			<div class="sy-mmaker-sec-title" style="color: #666;">
				<div class="sy-mmaker-icon" style="margin-top: 7px;">
					<i class="fa fa-cloud-download"></i>
				</div>
				<span class="sy-mmaker-t" style="margin-top: 7px;">
					<?php echo esc_html__('Kameleon Demo Importer','kameleon'); ?>
					<span class="sy-mmaker-done">Operation Done  <span class="sy-mmaker-done-char">&#10003;</span></span>
				</span>
				
				<div class="sy-import-actions">
					<div class="sy-import-bs" data-situation="active" onclick="km_get_demo_list(this,'home');">home templates</div>
					<div class="sy-import-bs" data-situation="noactive" onclick="km_get_demo_list(this,'page');">page templates</div>
					<div class="sy-import-bs" data-situation="noactive" onclick="km_get_demo_list(this,'post');">post types</div>
				</div>

			</div>
			<div class="sy-demo-list" data-situation="loading">
				
			</div>
		</div>
	
<span class="sy-mmaker-msg"><?php echo esc_html__('','kameleon'); ?></span>
<script type="text/javascript">
	var demoHomeUrl = 'https://raw.githubusercontent.com/SayenThemes/kameleon-v-1-3/master/demos/home/home-demos.json';
	var demoPageUrl = 'https://raw.githubusercontent.com/SayenThemes/kameleon-v-1-3/master/demos/page/page-demos.json';
	var demoPostUrl = 'https://raw.githubusercontent.com/SayenThemes/kameleon-v-1-3/master/demos/post/post-demos.json';
	jQuery(function($){
		$(document).ready(function() {
			km_ajax_demos(demoHomeUrl);
		})
	});
	//Get The Demo List
	function km_get_demo_list(btn,type){
		var demoUrl = demoHomeUrl;
		if(type == 'home')	demoUrl = demoHomeUrl;
		if(type == 'page')	demoUrl = demoPageUrl;
		if(type == 'post')	demoUrl = demoPostUrl;
		km_ajax_demos(demoUrl);
		jQuery('.sy-import-bs').attr({'data-situation':'noactive'});
		jQuery(btn).attr({'data-situation':'active'});
	}

	//Ajax Function to Get Demos
	function km_ajax_demos(url){
		jQuery('.sy-mmaker-overlay.retrieve').fadeIn(100);
		jQuery.ajax({
			type :"GET",
			url:url,
			success:function(data){
				jQuery('.sy-demo-list').html('');
				data = JSON.parse(data);
				data.forEach(function(demo){
					var revSliders = '';
					if( Object.prototype.toString.call(demo.revolutionSliderFiles) === '[object Array]' && demo.revolutionSliderFiles.length > 0  ){
						demo.revolutionSliderFiles.forEach(function(singleSlider) {
							revSliders += singleSlider.slider+',';
						});
					}
					//Print demos to the page 
					jQuery('.sy-demo-list').append('<div class="km-demo-item" data-widgetsUrl="'+demo.widgetsUrl+'" data-optionsUrl="'+demo.optionsUrl+'" data-contentUrl="'+demo.contentUrl+'" data-revolutionSliderFiles="'+revSliders+'"><img src="'+demo.thumbnail+'"><div class="km-demo-item-version">'+demo.version+'</div><div class="km-demo-item-name">'+demo.name+'</div><div class="km-demo-item-actions"><a class="km-demo-item-preview" href="'+demo.previewUrl+'" target="_blank">Preview</a><a class="km-demo-item-button" onclick="kameleon_demo_importer(this);">Import Demo</a></div></div>');					
				});
				jQuery('.sy-mmaker-overlay').fadeOut(100); 
			}
		});
	}

</script>