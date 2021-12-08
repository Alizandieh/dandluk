<?php 

//Styling Functions 

//Background Styling For Theme Options
function kameleon_get_background_style($option){
	$sy_options = kameleon_get_options_name();
	$result  = ! empty( $sy_options[$option]['background-color'] ) ? ' background-color:'.$sy_options[$option]['background-color'].'; ' : '';
	$result  .= ! empty( $sy_options[$option]['background-image'] ) ? ' background-image:url('.$sy_options[$option]['background-image'].'); ' : '';
	$result  .= ! empty( $sy_options[$option]['background-repeat'] ) ? ' background-repeat:'.$sy_options[$option]['background-repeat'].'; ' : '';
	$result  .= ! empty( $sy_options[$option]['background-position'] ) ? ' background-position:'.$sy_options[$option]['background-position'].'; ' : '';
	$result  .= ! empty( $sy_options[$option]['background-size'] ) ? ' background-size:'.$sy_options[$option]['background-size'].'; ' : '';
	$result  .= ! empty( $sy_options[$option]['background-attachment'] ) ? ' background-attachment:'.$sy_options[$option]['background-attachment'].'; ' : '';
	return $result;
}


//Background Styling For  Post Meta
function kameleon_get_background_style_meta($option){
	$result   = (isset(get_post_meta(get_the_ID(),$option,true)['background-color']) && ! empty( get_post_meta(get_the_ID(),$option,true)['background-color'] )) ? ' background-color:'.get_post_meta(get_the_ID(),$option,true)['background-color'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['background-image']) && ! empty( get_post_meta(get_the_ID(),$option,true)['background-image'] )) ? ' background-image:url('.get_post_meta(get_the_ID(),$option,true)['background-image'].'); ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['background-repeat']) && ! empty( get_post_meta(get_the_ID(),$option,true)['background-repeat'] )) ? ' background-repeat:'.get_post_meta(get_the_ID(),$option,true)['background-repeat'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['background-position']) && ! empty( get_post_meta(get_the_ID(),$option,true)['background-position'] )) ? ' background-position:'.get_post_meta(get_the_ID(),$option,true)['background-position'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['background-size']) && ! empty( get_post_meta(get_the_ID(),$option,true)['background-size'] )) ? ' background-size:'.get_post_meta(get_the_ID(),$option,true)['background-size'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['background-attachment']) && ! empty( get_post_meta(get_the_ID(),$option,true)['background-attachment'] )) ? ' background-attachment:'.get_post_meta(get_the_ID(),$option,true)['background-attachment'].'; ' : '';
	return $result;
}


//Background For Ether Post Meta Or Theme Options 
function kameleon_get_background_element($element){
	$sy_options = kameleon_get_options_name();
	$result  = ! empty( $element['background-color'] ) ? ' background-color:'.$element['background-color'].'; ' : '';
	$result  .= ! empty( $element['background-image'] ) ? ' background-image:url('.$element['background-image'].'); ' : '';
	$result  .= ! empty( $element['background-repeat'] ) ? ' background-repeat:'.$element['background-repeat'].'; ' : '';
	$result  .= ! empty( $element['background-position'] ) ? ' background-position:'.$element['background-position'].'; ' : '';
	$result  .= ! empty( $element['background-size'] ) ? ' background-size:'.$element['background-size'].'; ' : '';
	$result  .= ! empty( $element['background-attachment'] ) ? ' background-attachment:'.$element['background-attachment'].'; ' : '';
	return $result;
}

//Styling The Sidebar
function kameleon_sidebar_style(){
	$sy_options = kameleon_get_options_name();
	$sidebar_style = '';

	$sb_background = $sy_options['sidebar_background'];
	$sb_border = $sy_options['sidebar_border'];
	$sb_margin = $sy_options['sidebar_margin'];
	$sb_padding = $sy_options['sidebar_padding'];
	$sb_fontsize = $sy_options['sidebar_fontsize'];
	$sb_color = $sy_options['sidebar_color'];
	$sb_title_fontsize = $sy_options['sidebar_title_fontsize'];
	$sb_title_color = $sy_options['sidebar_title_color'];
	$sidebar_style = '';
	if( (is_page() || is_single()) & get_post_meta(get_the_ID(), "sidebar_unique", true) == 1 ){	
		$sb_background = get_post_meta(get_the_ID(),'sidebar_background',true);
		$sb_border = get_post_meta(get_the_ID(),'sidebar_border',true);
		$sb_margin = get_post_meta(get_the_ID(),'sidebar_margin',true);
		$sb_padding = get_post_meta(get_the_ID(),'sidebar_padding',true);
		$sb_color = get_post_meta(get_the_ID(),'sidebar_color',true);
		$sb_title_color = get_post_meta(get_the_ID(),'sidebar_title_color',true);		
		$sidebar_fullheight = get_post_meta(get_the_ID(),'sidebar_fullheight',true);
		if($sidebar_fullheight == 1){
			$sidebar_style .= ' #km-checker[data-sidebar-position="left"] #kameleon-sidebar{float: left; left: 0; position:absolute;} 
			#km-checker[data-sidebar-position="right"] #kameleon-sidebar{float: right;right: 0;  position:absolute;} #kameleon-sidebar #kameleon-sidebar-content{width:76%;}';				
		}
	}

	$sidebar_style .='#kameleon-sidebar{';
	$sidebar_style .= 'border-color: '.$sb_border['border-color'] .'; border-style:'.$sb_border['border-style'].';';
	$sidebar_style .= 'border-top-width: '.$sb_border['border-top'] .'; border-bottom-width:'.$sb_border['border-bottom'].';';
	$sidebar_style .= 'border-left-width: '.$sb_border['border-left'] .'; border-right-width:'.$sb_border['border-right'].';';
	$sidebar_style .= 'background: '.$sb_background.'; color:'.$sb_color.'; font-size: '.$sb_fontsize.'px;';
	$sidebar_style .= 'margin-top: '.$sb_margin['margin-top'] .'; margin-bottom:'.$sb_margin['margin-bottom'].';';
	$sidebar_style .= 'padding-top: '.$sb_padding['padding-top'] .'; padding-bottom:'.$sb_padding['padding-bottom'].';';
	$sidebar_style .= 'padding-right: '.$sb_padding['padding-right'] .'; padding-left:'.$sb_padding['padding-left'].';';
	$sidebar_style .= '}';
	$sidebar_style .= '#kameleon-sidebar h3{ color:'.$sb_title_color.'; font-size:'.$sb_title_fontsize.'px;}';
	$con_pad = str_replace('px','',$sb_margin['margin-top'])+str_replace('px','',$sb_padding['padding-top']);
	$con_pad_port = (is_page() && get_post_meta(get_the_ID(),'sidebar_active',true) == 1) ? str_replace('px','',$sb_margin['margin-top'])+str_replace('px','',$sb_padding['padding-top']) : '0';
	$sidebar_style .= ' .single-post-data, .km-post-loop,.single-portfolio-data,#bbpress-forums,#km-data .woocommerce,.woocommerce #km-data{padding-top:'.$con_pad.'px!important;}';
	$sidebar_style .=' .km-pf-container-simple{padding-top:'.$con_pad_port.'px!important;}';
	return $sidebar_style;

}


//Style for The Mobile Header and The Menu
function kameleon_mobile_header_style(){
	$sy_options = kameleon_get_options_name();
	$mobile_h_style = '';
	$mobile_h_style .= ' #km-mheader{color:'.$sy_options['mheader_color'].'; background-color:'.$sy_options['mheader_background'].';}';

	$mobile_h_style .= '#km-mheader-container{min-height:'.$sy_options['mheader_height'].'px; border-bottom-color:'.$sy_options['mheader_border_color'].';}';						

	$mobile_h_style .= ' #km-mheader-logo{height:'.$sy_options['mheader_logo_height'].'px; width:'.$sy_options['mheader_logo_width'].'px;}';
					
	$mobile_h_style .= ' #km-mheader-top{border-bottom-color:'.$sy_options['mheader_border_color'].'}';	
	$mobile_h_style .= ' #responsive-menu{background-color:'.$sy_options['mheader_menu_background'].'; color:'.$sy_options['mheader_menu_color'].';}';
	$mobile_h_style .= ' #responsive-menu div a,#responsive-menu-closer #responsive-menu-closer-icon{border-color:'.$sy_options['mheader_menu_border_color'].';}';
	$mobile_h_style .= ' #km-mheader-icon span{background:'.$sy_options['mheader_icon_color'].';}';
	return $mobile_h_style;					
}

//Style for The Side Header Version 1 Show/Hide
function kameleon_side_header_sh_style(){
	$sy_options = kameleon_get_options_name();
	$hv5_button_background = (isset($sy_options['hv5_button_background']['rgba'])) ? $sy_options['hv5_button_background']['rgba'] : '#000';	

	$side_h_style = '';
	$side_h_style .= ' #km-header-side{'.kameleon_get_background_element($sy_options['hv5_background']).'color:'.$sy_options['hv5_color'].';width:'.$sy_options['hv5_width'].'px;
						padding-top:'.$sy_options['hv5_padding']['padding-top'].'; padding-bottom:'.$sy_options['hv5_padding']['padding-bottom'].';
						padding-right:'.$sy_options['hv5_padding']['padding-right'].'; padding-left:'.$sy_options['hv5_padding']['padding-left'].';'.$sy_options['hv5_position'].': -'.$sy_options['hv5_width'].'px;}';
	$side_h_style .= ' #km-header-side .main-logo-side{height:'.$sy_options['hv5_logo_height'].'px; width:'.$sy_options['hv5_logo_width'].'px; margin-top:'.$sy_options['hv5_logo_marginTop'].'px;}';					
	$side_h_style .= ' #km-hv5-ic-container{background:'.$hv5_button_background.'; border-radius:'.$sy_options['hv5_button_radius'].'px; 
					   border:'.$sy_options['hv5_button_border_thickness'].'px solid '.$sy_options['hv5_button_border_color'].';}';
	$side_h_style .= ' #km-hv5-ic-container span{background:'.$sy_options['hv5_button_color'].';}'; 
	$side_h_style .=  ' #km-header-side #side-menu-container a{height:'.$sy_options['hv5_link_height'].'px; line-height:'.$sy_options['hv5_link_height'].'px; font-size:'.$sy_options['hv5_fontsize'].'px;
						border-color:'.$sy_options['hv5_border_color'].';}';
	$side_h_style .= ' #hv5-closer-icon,#km-hv5-search input{border-color:'.$sy_options['hv5_border_color'].';}';					
	$side_h_style .= ' #km-header-side #side-menu-container ul li ul{background:'.$sy_options['hv5_background_drop'].';}';
	$side_h_style .= ' #km-header-side #side-menu-container a:hover{background:'.$sy_options['hv5_hover_background'].';}';						
	return $side_h_style;
}

//Style for The Side Header Version 2 Always Shown
function kameleon_side_header_fixed_style(){
	$sy_options = kameleon_get_options_name();
	$side_h_style = '';
	$container_position = 'right';	
	if($sy_options['hv6_position'] == "right"){
		$container_position = 'left';
	}

	$side_h_style .= ' #km-header-side-shown{'.kameleon_get_background_element($sy_options['hv6_background']).'color:'.$sy_options['hv6_color'].';width:'.$sy_options['hv6_width'].'px;
						padding-top:'.$sy_options['hv6_padding']['padding-top'].'; padding-bottom:'.$sy_options['hv6_padding']['padding-bottom'].';
						padding-right:'.$sy_options['hv6_padding']['padding-right'].'; padding-left:'.$sy_options['hv6_padding']['padding-left'].';}';
	$side_h_style .= ' #km-header-side-shown .main-logo-side{height:'.$sy_options['hv6_logo_height'].'px; width:'.$sy_options['hv6_logo_width'].'px; margin-top:'.$sy_options['hv6_logo_marginTop'].'px;}';					
	$side_h_style .=  ' #km-header-side-shown #side-menu-container > ul > li > a{height:'.$sy_options['hv6_link_height'].'px; line-height:'.$sy_options['hv6_link_height'].'px; font-size:'.$sy_options['hv6_fontsize'].'px;
						border-color:'.$sy_options['hv6_border_color'].';}';
	$side_h_style .= ' #km-hv6-search input{border-color:'.$sy_options['hv6_border_color'].';}';					
	$side_h_style .= ' #km-header-side-shown #side-menu-container ul li ul{background:'.$sy_options['hv6_background_drop'].';}';
	$side_h_style .= ' #km-header-side-shown #side-menu-container > ul > li > a:hover{background:'.$sy_options['hv6_hover_background'].';}';
	$side_h_style .= ' body[data-header="header_v6"] #km-container,
					  body[data-layout="full_width"][data-fullwidth="1"][data-header="header_v6"] #km-container{float:'.$container_position.'; }';

	return $side_h_style;
}


//Hamburger Show Hide Icon
function kameleon_hamburger_icon($type,$id,$action,$class = ''){
 	$data = (isset($id) && $id!="") ? ' id="'.$id.'" ' : '';
 	$data_class = (isset($class) && $class!="") ? $class : '';
 	$data .= (isset($action) && $action!="") ? 'onclick="'.$action.'"' : ''; 
 	$hamburgerOutput ='';
 	switch ($type) {
 		case '1':
			$hamburgerOutput = '<div '.$data.' class="hamburger_1 '.$data_class.'">
				  <span></span>
				  <span></span>
				  <span></span>
			</div>'; 							
 		break;
 		case '2':
			$hamburgerOutput = '<div '.$data.' class="hamburger_2 '.$data_class.'">
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
			</div>'; 							
 		break;
 		case '3':
			$hamburgerOutput = '<div '.$data.' class="hamburger_3 '.$data_class.'">
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
			</div>'; 							
 		break;
 		case '4':
			$hamburgerOutput = '<div '.$data.' class="hamburger_4 '.$data_class.'">
				  <span></span>
				  <span></span>
				  <span></span>				  
			</div>'; 							
 		break; 		 		
 	}

 	return $hamburgerOutput;
 } 

//Loader Spinner Style
function kameleon_loader_spinner($style_spinner){
	$output = '';
	switch (trim($style_spinner)) {
		case 'style1':
			$output = '<div class="spinner spinner1">
						  <div class="rect1 bg-spinner"></div>
						  <div class="rect2 bg-spinner"></div>
						  <div class="rect3 bg-spinner"></div>
						  <div class="rect4 bg-spinner"></div>
						  <div class="rect5 bg-spinner"></div>
						</div>';
			break;	
		case 'style2':
			$output = '<div class="spinner spinner2"></div>';
			break;
		case 'style3':
			$output = '<div class="spinner spinner3">
						  <div class="double-bounce1"></div>
						  <div class="double-bounce2"></div>
						</div>';
			break;	
		case 'style4':
			$output = '<div class="spinner spinner4">
						  <div class="dot1"></div>
						  <div class="dot2"></div>
						</div>';
			break;	

		case 'style5':
			$output = '<div class="spinner spinner5">
						   <div class="bounce1"></div>
						  <div class="bounce2"></div>
						  <div class="bounce3"></div>
						</div>';
			break;	
		case 'style6':
			$output = '<div class="spinner spinner6"></div>';
			break;							
		case 'style7':
			$output = '<div class="spinner spinner7"></div>';
			break;	

		case 'style8':
			$output = '<div class="spinner spinner8">
						  <div class="sk-cube1 sk-cube"></div>
						  <div class="sk-cube2 sk-cube"></div>
						  <div class="sk-cube4 sk-cube"></div>
						  <div class="sk-cube3 sk-cube"></div>
					  </div>';
			break;		
	}
	return $output;
}

// Function to Set a Font for elements
function kameleon_font_setter($elements, $font){
	$sy_options = kameleon_get_options_name();
	$result = '{ ';
	$result .= 	(isset($sy_options[$font]['line-height']) && $sy_options[$font]['line-height']!="") ? ' line-height: '.$sy_options[$font]['line-height'].';' : '';
	$result .=	(isset($sy_options[$font]['color']) && $sy_options[$font]['color'] !="") ? ' color: '.$sy_options[$font]['color'].';' : '';
	$result .= (isset($sy_options[$font]['font-family']) && $sy_options[$font]['font-family']!="") ? ' font-family: '.$sy_options[$font]['font-family'].';' : '';
	$result .= (isset($sy_options[$font]['font-backup']) && $sy_options[$font]['font-backup']!="") ? ' font-family: '.$sy_options[$font]['font-family'].' , '.$sy_options[$font]['font-backup'].';' : '';
	$result .= (isset($sy_options[$font]['font-size']) && $sy_options[$font]['font-size']!="") ? ' font-size: '.$sy_options[$font]['font-size'].';' : '';
	$result .= (isset($sy_options[$font]['font-style']) && $sy_options[$font]['font-style']!="") ? ' font-style: '.$sy_options[$font]['font-style'].';' : '';
	$result .= (isset($sy_options[$font]['font-weight']) && $sy_options[$font]['font-weight']!="") ? ' font-weight: '.$sy_options[$font]['font-weight'].';' : '';
	$result .= (isset($sy_options[$font]['text-align']) && $sy_options[$font]['text-align']!="") ? ' text-align: '.$sy_options[$font]['text-align'].';' : '';
	$result .= (isset($sy_options[$font]['letter-spacing']) && $sy_options[$font]['letter-spacing']!="") ? ' letter-spacing: '.$sy_options[$font]['letter-spacing'].';' : '';
	$result .= (isset($sy_options[$font]['text-decoration']) && $sy_options[$font]['text-decoration']!="") ? ' text-decoration: '.$sy_options[$font]['text-decoration'].';' : '';
	$result .= (isset($sy_options[$font]['text-transform']) && $sy_options[$font]['text-transform']!="") ? ' text-transform: '.$sy_options[$font]['text-transform'].';' : '';
	$result .= '}';
	return $elements.''.$result;	
}


//functtion to set the Font For Metabox OR Sy Options
function kameleon_font_creator_options($font){
	$sy_options = kameleon_get_options_name();	
	$result ='';
	$result .= 	(isset($sy_options[$font]['line-height']) && $sy_options[$font]['line-height']!="") ? ' line-height: '.$sy_options[$font]['line-height'].';' : '';
	$result .=	(isset($sy_options[$font]['color']) && $sy_options[$font]['color'] !="") ? ' color: '.$sy_options[$font]['color'].';' : '';
	$result .= (isset($sy_options[$font]['font-family']) && $sy_options[$font]['font-family']!="") ? ' font-family: '.$sy_options[$font]['font-family'].';' : '';
	$result .= (isset($sy_options[$font]['font-backup']) && $sy_options[$font]['font-backup']!="") ? ' font-family: '.$sy_options[$font]['font-family'].' , '.$sy_options[$font]['font-backup'].';' : '';
	$result .= (isset($sy_options[$font]['font-size']) && $sy_options[$font]['font-size']!="") ? ' font-size: '.$sy_options[$font]['font-size'].';' : '';
	$result .= (isset($sy_options[$font]['font-style']) && $sy_options[$font]['font-style']!="") ? ' font-style: '.$sy_options[$font]['font-style'].';' : '';
	$result .= (isset($sy_options[$font]['font-weight']) && $sy_options[$font]['font-weight']!="") ? ' font-weight: '.$sy_options[$font]['font-weight'].';' : '';
	$result .= (isset($sy_options[$font]['text-align']) && $sy_options[$font]['text-align']!="") ? ' text-align: '.$sy_options[$font]['text-align'].';' : '';
	$result .= (isset($sy_options[$font]['letter-spacing']) && $sy_options[$font]['letter-spacing']!="") ? ' letter-spacing: '.$sy_options[$font]['letter-spacing'].';' : '';
	$result .= (isset($sy_options[$font]['text-decoration']) && $sy_options[$font]['text-decoration']!="") ? ' text-decoration: '.$sy_options[$font]['text-decoration'].';' : '';
	$result .= (isset($sy_options[$font]['text-transform']) && $sy_options[$font]['text-transform']!="") ? ' text-transform: '.$sy_options[$font]['text-transform'].';' : '';	
	return $result;
}

//functtion to set the Font For Metabox OR Sy Options
function kameleon_font_creator_metabox($option){
	$sy_options = kameleon_get_options_name();	
	$result ='';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['font-color']) && ! empty( get_post_meta(get_the_ID(),$option,true)['font-color'] )) ? ' color:'.get_post_meta(get_the_ID(),$option,true)['font-color'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['font-size']) && ! empty( get_post_meta(get_the_ID(),$option,true)['font-size'] )) ? ' font-size:'.get_post_meta(get_the_ID(),$option,true)['font-size'].'px; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['font-weight']) && ! empty( get_post_meta(get_the_ID(),$option,true)['font-weight'] )) ? ' font-weight:'.get_post_meta(get_the_ID(),$option,true)['font-weight'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['font-style']) && ! empty( get_post_meta(get_the_ID(),$option,true)['font-style'] )) ? ' font-style:'.get_post_meta(get_the_ID(),$option,true)['font-style'].'; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['font-spacing']) && ! empty( get_post_meta(get_the_ID(),$option,true)['font-spacing'] )) ? ' letter-spacing:'.get_post_meta(get_the_ID(),$option,true)['font-spacing'].'px; ' : '';
	$result  .= (isset(get_post_meta(get_the_ID(),$option,true)['font-transform']) && ! empty( get_post_meta(get_the_ID(),$option,true)['font-transform'] )) ? ' text-transform:'.get_post_meta(get_the_ID(),$option,true)['font-transform'].'; ' : '';
	return $result;
}






//Function for Pagination Styling
function kameleon_pagination_styling($type='normal'){
	$sy_options = kameleon_get_options_name();
	$prefix = (isset($type) && $type=='woocommerce' && class_exists('woocommerce') ) ? 'w_' : 's_';	
	$data_attributes = '[data-pagination-type="'.$type.'"]';
	$pagination_style = '';
	$pagination_style =  '.km-pagination-container'.$data_attributes.' .km-pagination a{color: '.$sy_options[$prefix."pagination_deactivated_color"].'!important;}';
	$pagination_style .= '.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_circle"] .km-pagination a,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_square"] .km-pagination a,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_rhombus"] .km-pagination a{border-width: '.$sy_options[$prefix."pagination_border_width"].'px!important;border-color: '.$sy_options[$prefix."pagination_border_color"].'!important;background-color: '.$sy_options[$prefix."pagination_deactivated_bg_color"].'!important;}';

	$pagination_style .= '.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_rhombus"] .km-pagination a{background-color: '.$sy_options[$prefix."pagination_deactivated_bg_color"].'important;}';					

	$pagination_style .= '.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_circle"] .km-pagination a.current,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_circle"] .km-pagination a:hover,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_square"] .km-pagination a.current,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_square"] .km-pagination a:hover,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_rhombus"] .km-pagination a.current,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_rhombus"] .km-pagination a:hover{background-color: '.$sy_options["color_scheme"].'!important; border-color: '.$sy_options["color_scheme"].'!important;	color: '.$sy_options[$prefix."pagination_activated_color"].'!important;}' ;

	$pagination_style .= '.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_top"] .km-pagination,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_bottom"] .km-pagination{	border-color: '.$sy_options[$prefix."pagination_border_color"].'!important;border-width: '.$sy_options[$prefix."pagination_border_width"].'px!important;}';

	$pagination_style .= '.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_top"] .km-pagination a.current:after,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_top"] .km-pagination a:hover:after,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_bottom"] .km-pagination a.current:after,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_bottom"] .km-pagination a:hover:after,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_center"] .km-pagination a.current:after,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_center"] .km-pagination a:hover:after{background-color: '.$sy_options['color_scheme'].'!important;height: '.$sy_options[$prefix."pagination_border_width"].'px!important; z-index: 1;}';

	$pagination_style .= '.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_top"] .km-pagination a.current:after,.km-pagination-container'.$data_attributes.'[data-pagination-style="pagination_line_top"] .km-pagination a:hover:after{top: -'.$sy_options[$prefix."pagination_border_width"].'!important;}';	

	$pagination_style .='.km-pagination a{line-height: '.$sy_options[$prefix."pagination_link_size"].'px;height: '.$sy_options[$prefix."pagination_link_size"].'px;width: '.$sy_options[$prefix."pagination_link_size"].'px;  margin: 0 '.$sy_options[$prefix."pagination_link_margin"].'px; font-size: '.$sy_options[$prefix."pagination_font_size"].'px;}';	

	return $pagination_style;
}


//Function For Styling The WooCommerce Cart

function kameleon_woocommerce_style(){
	$sy_options = kameleon_get_options_name();
	//Card WooCommerce Styling
	$woocommerce_style = '.km-global-card,.km-global-card .icon-card,.km-woo-hover{background:'.$sy_options['w_cart_background_color'].'; color:'.$sy_options['w_cart_pname_color'].';}';
	$woocommerce_style .= '.item-info .item-name{color:'.$sy_options['w_cart_pname_color'].';}.item-info .item-price{color:'.$sy_options['w_cart_pprice_color'].';}';
	$woocommerce_style .='.km-woo-cart-action-item,.km-global-total{color:'.$sy_options['w_cart_pname_color'].';}';
	$woocommerce_style .= '.km-woo-cart-item{border-color:'.$sy_options['w_cart_border_color'].';}.km-global-total{background:'.$sy_options['w_cart_total_background'].';}';
	$woocommerce_style .= '.woocommerce ul.products li.product .km-woo-title{color:'.$sy_options['w_loop_pname_color'].'; font-size:'.$sy_options['w_loop_pname_size'].'px;}';
	$woocommerce_style .= '.woocommerce ul.products li.product .km-product-subtile{color:'.$sy_options['w_loop_psubname_color'].'; font-size:'.$sy_options['w_loop_psubname_size'].'px;}';
	$woocommerce_style .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{border-color:'.$sy_options['w_loop_pborder_color'].';}';
	$woocommerce_style .= '.km-woo-action-area .km-p-add-tocart, .km-woo-action-area .km-woo-add-wishlist{background:'.$sy_options['w_loop_pbutton_background'].';}';
	$woocommerce_style .= '.km-woo-action-area{color:'.$sy_options['w_loop_pbutton_color'].';} .km-woo-action-area .km-p-add-tocart{border-color:'.$sy_options['w_loop_pbutton_border_color'].';}';	

	//Hover Card Header
	$woocommerce_style .= '#km-header .item-info .item-name{color:'.$sy_options['w_cart_pname_color_header'].';}#km-header .item-info .item-price{color:'.$sy_options['w_cart_pprice_color_header'].';}';	
	$woocommerce_style .= '#km-header .km-global-card,#km-header .km-global-card .icon-card,#km-header .km-woo-hover{background:'.$sy_options['w_cart_background_color_header'].'; border:1px solid '.$sy_options['w_cart_border_color_header'].'; color:'.$sy_options['w_cart_pname_color_header'].';}';
	$woocommerce_style .='#km-header  .km-woo-cart-action-item,#km-header  .km-global-total{color:'.$sy_options['w_cart_pname_color_header'].';}';
	$woocommerce_style .= '#km-header .km-woo-cart-item{border-color:'.$sy_options['w_cart_border_color_header'].';}#km-header .km-global-total{background:'.$sy_options['w_cart_total_background_header'].';}';


	//Single Product WooCommerce Styling
	$w_single_pname_color = $sy_options['w_single_pname_color'];
	$w_single_psubname_color = $sy_options['w_single_psubname_color'];
	$w_single_pprice_color = $sy_options['w_single_pprice_color'];
	$w_single_pshortdescription_color = $sy_options['w_single_pshortdescription_color'];
	$w_single_pbutton_bgcolor = $sy_options['w_single_pbutton_bgcolor'];
	$w_single_pbutton_border_color = $sy_options['w_single_pbutton_border_color'];

	//Check fo WooCommerce Single Page Modern Look
	if(class_exists('woocommerce') && is_product()){
		$product_layout = (isset($sy_options['w_psingleproduct_layout']) ) ? $sy_options['w_psingleproduct_layout'] : 'normal';
		$product_id = get_the_ID();				
		$product_layout = (null !== get_post_meta($product_id, 'w_psingleproduct_layout_unique',true) && get_post_meta($product_id, 'w_psingleproduct_layout_unique',true) == 1 ) 
		? get_post_meta($product_id , 'w_psingleproduct_layout' , true) 
		: $product_layout ;
		if($product_layout == 'modern' && get_post_meta($product_id, 'w_psingleproduct_layout_unique',true) == 1){
			$woo_imagebackground = (get_post_meta($product_id, 'w_psingleproduct_layout_unique',true) == 1 ) ? get_post_meta($product_id, 'w_psingleproduct_modern_imagebg' , true) : $sy_options['w_psingleproduct_modern_imagebg'] ;
			$woo_infobackground = (get_post_meta($product_id, 'w_psingleproduct_layout_unique',true) == 1 ) ? get_post_meta($product_id, 'w_psingleproduct_modern_infobg' , true) :  $sy_options['w_psingleproduct_modern_infobg'];
		
			$woocommerce_style .= '#km-content[data-product-layout="modern"] div.product div.summary{background:'.$woo_infobackground.';} #km-content[data-product-layout="modern"] div.product div.images{background:'.$woo_imagebackground.';}';
		
			// Single Product Modern Backgrounds and Text Color
			$w_single_pname_color = get_post_meta($product_id,'w_single_pname_color',true);
			$w_single_psubname_color = get_post_meta($product_id,'w_single_psubname_color',true);
			$w_single_pprice_color = get_post_meta($product_id,'w_single_pprice_color',true);
			$w_single_pshortdescription_color = get_post_meta($product_id,'w_single_pshortdescription_color',true);
			$w_single_pbutton_bgcolor = get_post_meta($product_id,'w_single_pbutton_bgcolor',true);
			$w_single_pbutton_border_color = get_post_meta($product_id,'w_single_pbutton_border_color',true);

		}
	}

	$woocommerce_style .= '.woocommerce div.product .product_title{color:'.$w_single_pname_color.'; font-size:'.$sy_options['w_single_pname_size'].'px; '.kameleon_dimensions_options('w_single_pname_margins').'} .woocommerce div.product .km-single-product-subtile{color:'.$w_single_psubname_color.'; font-size:'.$sy_options['w_single_psubname_size'].'px; '.kameleon_dimensions_options('w_single_psubtitle_margins').'}.woocommerce-page div.product div.summary .price{color:'.$w_single_pprice_color.'!important; font-size:'.$sy_options['w_single_pprice_size'].'px!important;'.kameleon_dimensions_options('w_single_pprice_margins').'}.woocommerce div.product div.summary p{color:'.$w_single_pshortdescription_color.'; font-size:'.$sy_options['w_single_pshortdescription_size'].'px; '.kameleon_dimensions_options('w_single_pshortdescription_margins').'}.woocommerce div.product .woocommerce-tabs #tab-description p{color:'.$sy_options['w_single_pfulldescription_color'].'; font-size:'.$sy_options['w_single_pfulldescription_size'].'px;} .woocommerce div.product p.price del span{color:'.$w_single_pprice_color.'!important;}.woocommerce div.product form.cart{'.kameleon_dimensions_options('w_single_paction_margins').'}';	
	$woocommerce_style .='.woocommerce button.button.single_add_to_cart_button,#km-content[data-product-layout="modern"] .entry-summary .km-woo-add-wishlist{height:'.$sy_options['w_single_pheightbutton_size'].'px!important; line-height:'.(intval($sy_options['w_single_pheightbutton_size']) - 1).'px!important; color:'.$sy_options['w_single_pbutton_textcolor'].'!important; background:'.$w_single_pbutton_bgcolor.'!important; font-size:'.$sy_options['w_single_pbutton_fontsize'].'px!important; border:'.$sy_options['w_single_pbutton_border_thickness'].'px solid '.$w_single_pbutton_border_color.' !important; border-radius:'.$sy_options['w_single_pbutton_border_radius'].'px!important;}';

	$woocommerce_style .='#km-content[data-product-layout="normal"] .entry-summary .km-woo-add-wishlist{height:'.$sy_options['w_single_pheightbutton_size'].'px!important; width:'.$sy_options['w_single_pheightbutton_size'].'px!important;  line-height:'.$sy_options['w_single_pheightbutton_size'].'px!important; color:'.$sy_options['w_single_pbutton_textcolor'].'!important; background:'.$w_single_pbutton_bgcolor.'!important;}';

	$woocommerce_style .='#km-content[data-product-layout="normal"]  .entry-summary .km-woo-add-wishlist,#km-content[data-product-layout="normal"] div.product form.cart .button:before{height:'.$sy_options['w_single_pheightbutton_size'].'px!important; line-height:'.$sy_options['w_single_pheightbutton_size'].'px!important; color:'.$w_single_pshortdescription_color.';}';
	$woocommerce_style .= '.woocommerce-page div.product div.summary .price,.woocommerce div.product .woocommerce-tabs ul.tabs{border-color:'.$sy_options['w_single_pelements_border'].'!important;}';


	return $woocommerce_style;
}

function kameleon_dimensions_options($elem){
	$sy_options = kameleon_get_options_name();
	$dimension_options = '';
	$dimension_options .= (isset($sy_options[$elem]['margin-top']) &&  null !== $sy_options[$elem]['margin-top']) ? 'margin-top:'.$sy_options[$elem]['margin-top'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['margin-bottom']) &&  null !== $sy_options[$elem]['margin-bottom']) ? 'margin-bottom:'.$sy_options[$elem]['margin-bottom'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['margin-left']) &&  null !== $sy_options[$elem]['margin-left']) ? 'margin-left:'.$sy_options[$elem]['margin-left'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['margin-right']) &&  null !== $sy_options[$elem]['margin-right']) ? 'margin-right:'.$sy_options[$elem]['margin-right'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['padding-top']) &&  null !== $sy_options[$elem]['padding-top']) ? 'padding-top:'.$sy_options[$elem]['padding-top'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['padding-bottom']) &&  null !== $sy_options[$elem]['padding-bottom']) ? 'padding-bottom:'.$sy_options[$elem]['padding-bottom'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['padding-left']) &&  null !== $sy_options[$elem]['padding-left']) ? 'padding-left:'.$sy_options[$elem]['padding-left'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['padding-right']) &&  null !== $sy_options[$elem]['padding-right']) ? 'padding-right:'.$sy_options[$elem]['padding-right'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['border-top']) &&  null !== $sy_options[$elem]['border-top']) ? 'border-top-width:'.$sy_options[$elem]['border-top'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['border-bottom']) &&  null !== $sy_options[$elem]['border-bottom']) ? 'border-bottom-width:'.$sy_options[$elem]['border-bottom'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['border-left']) &&  null !== $sy_options[$elem]['border-left']) ? 'border-left-width:'.$sy_options[$elem]['border-left'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['border-right']) &&  null !== $sy_options[$elem]['border-right']) ? 'border-right-width:'.$sy_options[$elem]['border-right'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['border-style']) &&  null !== $sy_options[$elem]['border-style']) ? 'border-style:'.$sy_options[$elem]['border-style'].'!important;' : '';
	$dimension_options .= (isset($sy_options[$elem]['border-color']) &&  null !== $sy_options[$elem]['border-color']) ? 'border-color:'.$sy_options[$elem]['border-color'].'!important;' : '';
	return $dimension_options;
}

function kameleon_dimensions_options_element($elem){
	$sy_options = kameleon_get_options_name();
	$dimension_options = '';
	$dimension_options .= (isset($elem['margin-top']) &&  null !== $elem['margin-top']) ? 'margin-top:'.intval($elem['margin-top']).'px!important;' : '';
	$dimension_options .= (isset($elem['margin-bottom']) &&  null !== $elem['margin-bottom']) ? 'margin-bottom:'.intval($elem['margin-bottom']).'px!important;' : '';
	$dimension_options .= (isset($elem['margin-left']) &&  null !== $elem['margin-left']) ? 'margin-left:'.intval($elem['margin-left']).'px!important;' : '';
	$dimension_options .= (isset($elem['margin-right']) &&  null !== $elem['margin-right']) ? 'margin-right:'.intval($elem['margin-right']).'px!important;' : '';
	$dimension_options .= (isset($elem['padding-top']) &&  null !== $elem['padding-top']) ? 'padding-top:'.intval($elem['padding-top']).'px!important;' : '';
	$dimension_options .= (isset($elem['padding-bottom']) &&  null !== $elem['padding-bottom']) ? 'padding-bottom:'.intval($elem['padding-bottom']).'px!important;' : '';
	$dimension_options .= (isset($elem['padding-left']) &&  null !== $elem['padding-left']) ? 'padding-left:'.intval($elem['padding-left']).'px!important;' : '';
	$dimension_options .= (isset($elem['padding-right']) &&  null !== $elem['padding-right']) ? 'padding-right:'.intval($elem['padding-right']).'px!important;' : '';
	$dimension_options .= (isset($elem['border-top']) &&  null !== $elem['border-top']) ? 'border-top-width:'.intval($elem['border-top']).'px!important;' : '';
	$dimension_options .= (isset($elem['border-bottom']) &&  null !== $elem['border-bottom']) ? 'border-bottom-width:'.intval($elem['border-bottom']).'px!important;' : '';
	$dimension_options .= (isset($elem['border-left']) &&  null !== $elem['border-left']) ? 'border-left-width:'.intval($elem['border-left']).'px!important;' : '';
	$dimension_options .= (isset($elem['border-right']) &&  null !== $elem['border-right']) ? 'border-right-width:'.intval($elem['border-right']).'px!important;' : '';
	$dimension_options .= (isset($elem['border-style']) &&  null !== $elem['border-style']) ? 'border-style:'.$elem['border-style'].'!important;' : '';
	$dimension_options .= (isset($elem['border-color']) &&  null !== $elem['border-color']) ? 'border-color:'.$elem['border-color'].'!important;' : '';
	return $dimension_options;
}


//Kameleon Window Frame Styling
function kameleon_window_frame_style(){
	$sy_options = kameleon_get_options_name();	
	$frame_style = '';	
	$frame_enable  = ((is_page() || is_single() ) && null !==   get_post_meta(get_the_ID(), "frame_enable", true)) ? get_post_meta(get_the_ID(), "frame_enable", true) : $sy_options['frame_enable'];
	$frame_size  = ((is_page() || is_single() ) && null !==   get_post_meta(get_the_ID(), "frame_size", true)) ? get_post_meta(get_the_ID(), "frame_size", true) : $sy_options['frame_size'];
	$frame_color  = ((is_page() || is_single() ) && null !==   get_post_meta(get_the_ID(), "frame_color", true)) ? get_post_meta(get_the_ID(), "frame_color", true) : $sy_options['frame_color'];

	$frame_responsive = (isset($sy_options['frame_responsive'])) ? $sy_options['frame_responsive'] : 1150;

	
	if($frame_enable == 1){
		$frame_style = 'body{padding:'.$frame_size.'px!important; box-sizing:border-box;} .kameleon-frame-enabled.page .wc-row-parent[data-vc-full-width="true"][data-vc-stretch-content="true"][data-vc-full-width-init="true"]{padding-right:'.$frame_size.'px; padding-left:'.$frame_size.'px;} .frame-side{background:'.$frame_color.';} #km-header[data-width="full-header"] #km-header-content{padding: 0 '.$frame_size.'px; float:left;} .frame-side-left,.frame-side-right{width:'.$frame_size.'px;} .frame-side-bottom,.frame-side-top{height:'.$frame_size.'px;} .kameleon-frame-enabled .km-frame-width,#wpadminbar{width: calc(100% - '.(intval($frame_size) * 2).'px)!important;} .kameleon-frame-enabled .km-frame-height{height: calc(100% - '.(intval($frame_size) * 2).'px)!important;} .kameleon-frame-enabled .km-frame-left,#wpadminbar{left:'.$frame_size.'px!important;} .kameleon-frame-enabled .km-frame-right{right:'.$frame_size.'px!important;} .kameleon-frame-enabled .km-frame-top,#kameleon-search-container[data-type="topfixed"][data-situation="shown"],#wpadminbar{top:'.$frame_size.'px!important;} .kameleon-frame-enabled .km-frame-bottom{bottom:'.$frame_size.'px!important;}#km-header-side[data-bar-position="right"][data-situation="shown"]{right:'.$frame_size.'px!important;}#km-header-side[data-bar-position="left"][data-situation="shown"]{left:'.$frame_size.'px!important;}';

		$frame_style .='@media screen and (min-width: 300px) and (max-width:'.$frame_responsive.'px) {	
			#km-theboss{padding:0px; } .frame-side{display:none;} .kameleon-frame-enabled .km-frame-width,#wpadminbar{width:100%!important;} .kameleon-frame-enabled .km-frame-height{height: 100%!important;} .kameleon-frame-enabled .km-frame-left,#wpadminbar{left:0px!important;} .kameleon-frame-enabled .km-frame-right{right:0px!important;} .kameleon-frame-enabled .km-frame-top,#wpadminbar{top:0px!important;} .kameleon-frame-enabled .km-frame-bottom{bottom:0px!important;}
		}';
	}
	return $frame_style;
}

//Social Profile Array
function kameleon_social_list_config(){
	return array(
		'facebook'		=>	array('facebook'	,	'#3b5998' ,	'fa fa-facebook'	),
		'twitter'		=>	array('twitter'		, 	'#55acee' ,	'fa fa-twitter'		),
		'instagram'		=>	array('instagram'	, 	'#125688' ,	'fa fa-instagram'	),
		'youtube'		=>	array('youtube'		, 	'#bb0000' ,	'fa fa-youtube'		),
		'linkedin'		=>	array('linkedin'	, 	'#007bb5' ,	'fa fa-linkedin'	),
		'google'		=>	array('google'		,	'#dd4b39' ,	'Defaults-km-icon-google-plus'	),
		'behance'		=>	array('behance'		,	'#1769ff' ,	'fa fa-behance'		),
		'vimeo'			=>	array('vimeo'		,	'#aad450' ,	'fa fa-vimeo'		),
		'flickr'		=>	array('flickr'		,	'#ff0084' ,	'fa fa-flickr'		),
		'skype'			=>	array('skype'		,	'#00aff0' ,	'fa fa-skype'		),
		'pinterest'		=>	array('pinterest'	, 	'#cb2027' ,	'fa fa-pinterest-p'	),
		'dribbble'		=>	array('dribbble'	, 	'#ea4c89' ,	'fa fa-dribbble'	),
		'twitch'		=>	array('twitch'		,	'#6441a5' ,	'fa fa-twitch'		),
		'soundcloud'	=>	array('soundcloud'	, 	'#ff8800' ,	'fa fa-soundcloud'	),
		'github'		=>	array('github'		,	'#000000' ,	'fa fa-github-alt'	),
		'vine'			=>	array('vine'		,	'#00bf8f' ,	'fa fa-vine'		),
		'tumblr'		=>	array('tumblr'		,	'#32506d' ,	'fa fa-tumblr'		),
		'foursquare'	=>	array('foursquare'	, 	'#0072b1' ,	'fa fa-foursquare'	),
		'rss'			=>	array('rss'			,	'#ff6600' ,	'fa fa-rss'			),
	);
}


//Kameleon Social Links And Styling
function kameleon_social_links($socialArray, $iconSection){
	$sy_options = kameleon_get_options_name();
	$actualSocialLinks = array();
	$effectsWithBorder  = array('effect_1','effect_2','effect_3','effect_4','effect_5','effect_6','effect_7');

	foreach (kameleon_social_list_config() as $key => $value) {
		if( is_array($socialArray) && in_array($key, $socialArray) )
			array_push($actualSocialLinks,kameleon_social_list_config()[$key]);
	}
	if(!empty($actualSocialLinks)){
		$socialLinkStyle = 'width: '.$sy_options[$iconSection.'-icon_back_size'].'px; height:'.$sy_options[$iconSection.'-icon_back_size'].'px; line-height:'.$sy_options[$iconSection.'-icon_back_size'].'px; margin: 0px '.$sy_options[$iconSection.'-icon_margins'].'px; font-size:'.$sy_options[$iconSection.'-icon_size'].'px; border-radius:'.$sy_options[$iconSection.'-icon_radius'].'px; ';	
			$icon_normal_background = isset($sy_options[$iconSection.'-icon_normal_background']['rgba']) ? $sy_options[$iconSection.'-icon_normal_background']['rgba'] : '#000';
			$icon_normal_color = isset($sy_options[$iconSection.'-icon_normal_color']['rgba']) ? $sy_options[$iconSection.'-icon_normal_color']['rgba'] : '#777';
			$icon_hover_color = isset($sy_options[$iconSection.'-icon_hover_color']['rgba']) ? $sy_options[$iconSection.'-icon_hover_color']['rgba'] : '#fff';
		
		?>
		<div class="kameleon-modern-social-links" data-style="<?php echo esc_attr($sy_options[$iconSection.'-icon_style']); ?>" data-scheme="<?php echo esc_attr($sy_options[$iconSection.'-icon_scheme_enabled']); ?>">
			<?php foreach ($actualSocialLinks as $socialLink): ?>
				<div class="kameleon-modern-link <?php echo esc_attr($socialLink[0]); ?>-link" style="<?php echo esc_html($socialLinkStyle); ?>">					
					<div class="kameleon-modern-icon-bg kameleon-modern-link-background" style="background: <?php echo esc_attr($icon_normal_background); ?>;"></div>
					<div class="kameleon-modern-icon-bg kameleon-modern-link-overlay" style="background: <?php echo esc_attr($socialLink[1]); ?>;"></div>					
					<?php if (in_array($sy_options[$iconSection.'-icon_style'], $effectsWithBorder)): ?>
						<div class="kameleon-modern-link-borders" style="border-color:<?php echo esc_attr($socialLink[1]); ?>; "></div>							
					<?php endif; ?>	
					<?php if ($sy_options[$iconSection.'-icon_style'] == "effect_8"): ?>
						<div class="kameleon-eff-8-tada eff8-top"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-insider eff8-insider-one"></div></div>							
						<div class="kameleon-eff-8-tada eff8-top-left"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-insider eff8-insider-one"></div></div>							
						<div class="kameleon-eff-8-tada eff8-top-right"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-insider eff8-insider-one"></div></div>							
						<div class="kameleon-eff-8-tada eff8-bottom"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-insider eff8-insider-two"></div></div>							
						<div class="kameleon-eff-8-tada eff8-bottom-left"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-insider eff8-insider-two"></div></div>							
						<div class="kameleon-eff-8-tada eff8-bottom-right"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-insider eff8-insider-two"></div></div>							
						<div class="kameleon-eff-8-tada eff8-center-right"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-center-insider eff8-insider-three"></div></div>							
						<div class="kameleon-eff-8-tada eff8-center-left"><div style="background: <?php echo esc_attr($socialLink[1]); ?>;" class="eff8-center-insider eff8-insider-four"></div></div>							
					<?php endif; ?>	


					<i class="kameleon-modern-link-icon kameleon-modern-link-icon-shown <?php echo esc_attr($socialLink[2]) ?>"  style="color: <?php echo esc_attr($icon_normal_color); ?>;"></i>
					<i class="kameleon-modern-link-icon kameleon-modern-link-icon-hidden <?php echo esc_attr($socialLink[2]) ?>" style="color: <?php echo esc_attr($socialLink[1]); ?>;"></i>
					<i class="kameleon-modern-link-icon kameleon-modern-link-icon-hover <?php echo esc_attr($socialLink[2]) ?>" style="color: <?php echo esc_attr($icon_hover_color); ?>;"></i>
					
					<a href="<?php echo esc_url($sy_options[$socialLink[0].'_url']); ?>"></a>
				</div>
			<?php endforeach; ?>
		</div>
		<?php 
	}
}


/*
schemeenabled*/

function kameleon_social_share_modern($socialArray, $sa,$type,$socialArrayLinks = array(),$customClasses = ''){
	$outPut = '';
	$actualSocialLinks = $findUsKeys =  array();
	$iconStyle = 'width:'.$sa['backsize'].'px; height:'.$sa['backsize'].'px; line-height:'.$sa['backsize'].'px; font-size:'.$sa['size'].'px; border-radius:'.$sa['borderradius'].'px;';
	$shareLink = '';
	if($type == 'share')
		$shareLink = (trim($sa['link']) !="") ? $sa['link'] : get_the_permalink();
	foreach (kameleon_social_list_config() as $key => $value) {
		if( $type == 'share' && in_array($key, $socialArray) )
			array_push($actualSocialLinks,kameleon_social_list_config()[$key]);
		if( $type == 'findus' && array_key_exists($key, $socialArray) ){
			array_push($actualSocialLinks,kameleon_social_list_config()[$key]);			
		}
		
	}
	$trans = floatval(0.2);
	if(!empty($actualSocialLinks)){
		$outPut .= '<div class="km-socials-share-modern" data-style="'.esc_attr($sa['style']).'" data-align="'.esc_attr($sa['align']).'" style="--icon-margins: '.esc_attr($sa['margins']).'px;" >';	
			foreach ($actualSocialLinks as $socialLink):
				$transitiontime = '';
				if($type == 'findus'){
					$trans = floatval($trans)+ floatval(0.1);
					$transitiontime = '--icon-transition-time:'.$trans.'s;';
				}
				
				$outPut .= '<div class="km-socials-share-modern-item '.$customClasses.'" style="'.$iconStyle.' '.$transitiontime.'">
				<div class="km-socials-m-back km-socials-m-back-color" style="background:'.esc_attr($sa['backColor']).'; border-radius:'.$sa['borderradius'].'px;"></div>
				<div class="km-socials-m-back km-socials-m-back-colorscheme" style="background:'.esc_attr($socialLink[1]).'; border-radius:'.$sa['borderradius'].'px;"></div>
				<i class="km-socials-m-icon km-socials-m-icon-color '.esc_attr($socialLink[2]).'"  style="color:'.esc_attr($sa['iconColor']).';"></i>
				<i class="km-socials-m-icon km-socials-m-icon-hovercolor '.esc_attr($socialLink[2]).'"  style="color:'.esc_attr($sa['iconHoverColor']).';"></i>
				<i class="km-socials-m-icon km-socials-m-icon-colorscheme '.esc_attr($socialLink[2]).'"  style="color:'.esc_attr($socialLink[1]).';"></i>';
				if ($sa['style'] == "hoverShowTada"):
					$outPut .= '<div class="kameleon-eff-8-tada eff8-top"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-insider eff8-insider-one"></div></div>							
						<div class="kameleon-eff-8-tada eff8-top-left"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-insider eff8-insider-one"></div></div>							
						<div class="kameleon-eff-8-tada eff8-top-right"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-insider eff8-insider-one"></div></div>							
						<div class="kameleon-eff-8-tada eff8-bottom"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-insider eff8-insider-two"></div></div>							
						<div class="kameleon-eff-8-tada eff8-bottom-left"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-insider eff8-insider-two"></div></div>							
						<div class="kameleon-eff-8-tada eff8-bottom-right"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-insider eff8-insider-two"></div></div>							
						<div class="kameleon-eff-8-tada eff8-center-right"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-center-insider eff8-insider-three"></div></div>							
						<div class="kameleon-eff-8-tada eff8-center-left"><div style="background: '.esc_attr($socialLink[1]).';" class="eff8-center-insider eff8-insider-four"></div></div>';
				endif; 
				if($type == 'share')
					$outPut .= 	'<a href="'.kameleon_social_share_link($socialLink[0]).''.esc_url($shareLink).'"></a></div>';	
				if($type == 'findus')
					$outPut .= 	'<a href="'.$socialArray[$socialLink[0]].'"></a></div>';	

			 endforeach;					
		 $outPut .= '</div>' ; 
	}			
	return $outPut;
}

function kameleon_social_share_box_p($post_type){
	$sy_options = kameleon_get_options_name();
	$sa = array(
 		'backsize'			=>	$sy_options[$post_type.'-ss_backsize'],
		'size'				=>	$sy_options[$post_type.'-ss_size'],
		'borderradius'		=>	$sy_options[$post_type.'-ss_borderradius'],
		'style'				=>	$sy_options[$post_type.'-ss_style'],
		'backColor'			=>	$sy_options[$post_type.'-ss_backcolor'],
		'iconColor'			=>	$sy_options[$post_type.'-ss_iconcolor'],
		'iconHoverColor'	=>	$sy_options[$post_type.'-ss_iconhovercolor'],
		'link'				=>	'',
		'align'				=>  $sy_options[$post_type.'-ss_align'],
		'margins'			=>  $sy_options[$post_type.'-ss_margins'],
 	);
	return kameleon_social_share_modern($sy_options[$post_type.'-ss_socialarray'], $sa,'share');
}



function kameleon_social_share_link($socialLink){
	$slar = array(
		'facebook' 	=> 'http://www.facebook.com/sharer.php?m2w&s=100&u=',
		'twitter'	=> 'https://twitter.com/share?url=',
		'google'	=> 'https://plus.google.com/share?url=',	
		'linkedin'  => 'http://www.linkedin.com/shareArticle?mini=true&url=',
		'pinterest'	=> 'http://pinterest.com/pin/create/button/?url=',
		'reddit'	=> 'http://reddit.com/submit?url='
	);
	return $slar[$socialLink];
}



//Kameleon Next / Previous For Post Types (Post , Portfolio, WooCommerce Product)
function kameleon_next_previous_wrapper($postType, $style){
	$next = get_next_post();
	$previous = get_previous_post();
	switch ($style) {
		case 'type_1':	
			kameleon_pn_edge($postType,$next, $previous);	
		break;	
		case 'type_2':
			kameleon_pn_basic($postType,$next, $previous);			
		break;					
	}
}

//Next / Previous Edge
function kameleon_pn_edge($postType, $next, $previous){
	$sy_options = kameleon_get_options_name();
	
	$isSingleUnique = ((is_page() || is_single()) && null !==  get_post_meta(get_the_ID(), "nextprevious_unique", true) && get_post_meta(get_the_ID(), "nextprevious_unique", true) == 1) ? true : false;		

	
	$pn_type1_background  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_background", true) : $sy_options[$postType.'-pn_type1_background'];
	$pn_type1_height  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_height", true) : $sy_options[$postType.'-pn_type1_height'];
	$pn_type1_width  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_width", true) : $sy_options[$postType.'-pn_type1_width'];
	$pn_type1_color  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_color", true) : $sy_options[$postType.'-pn_type1_color'];
	$pn_type1_fontsize  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_fontsize", true) : $sy_options[$postType.'-pn_type1_fontsize'];
	$pn_type1_arrowsize  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_arrowsize", true) : $sy_options[$postType.'-pn_type1_arrowsize'];
	$pn_type1_thumbnail_radius  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_thumbnail_radius", true) : $sy_options[$postType.'-pn_type1_thumbnail_radius'];
	$pn_type1_thumbnail_size  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_thumbnail_size", true) : $sy_options[$postType.'-pn_type1_thumbnail_size'];

	
	
	$pn_type1_thumbnail_enabled  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type1_thumbnail_enabled", true) : $sy_options[$postType.'-pn_type1_thumbnail_enabled'];
	
	
	//Styling the Elements
	$buttonStyle = 'background:'.$pn_type1_background.'; height:'.$pn_type1_height.'px; line-height:'.$pn_type1_height.'px; width:'.$pn_type1_width.'px; color:'.$pn_type1_color.'; font-size:'.$pn_type1_fontsize.'px; ';
	
	$arrowStyle = 'font-size:'.$pn_type1_arrowsize.'px;';
	$thumbStyle = 'border-radius:'.$pn_type1_thumbnail_radius.'px; width:'.$pn_type1_thumbnail_size.'px; height:'.$pn_type1_thumbnail_size.'px;';
	$infoStyle = 'line-height:'.$pn_type1_thumbnail_size.'px; height:'.$pn_type1_thumbnail_size.'px;';
	


?>
	<?php  if (isset($next) && $next != null):  ?>
		<div class="km-pn-edge-button km-pn-edge-button-right km-frame-right" style="<?php echo esc_attr($buttonStyle); ?>">
			<div class="km-pn-edge-arrow-wrapper">
				<span class="km-pn-arrow-sign km-pn-arrow-right Defaults-km-icon-angle-right" style="<?php echo esc_attr($arrowStyle); ?>"></span>				
			</div>
			<div class="km-pn-edge-info km-pn-edge-info-right">
				<?php if($pn_type1_thumbnail_enabled == 1 && get_the_post_thumbnail($next->ID,'kameleon-small-icon')): ?>
					<div class="km-pn-edge-img-wrapper" style="<?php echo esc_attr($thumbStyle); ?>">
						<?php echo get_the_post_thumbnail($next->ID,'kameleon-small-icon'); ?>
					</div>	
				<?php endif; ?>	
				<span class="km-pn-edge-title" style="<?php echo esc_attr($infoStyle); ?>"><?php echo esc_html(get_the_title($next->ID)); ?></span>
			</div>	
			<a href="<?php echo esc_url(get_the_permalink($next->ID)); ?>" class="km-pn-link"></a>
		</div>
	<?php endif; ?>	
	
	<?php  if (isset($previous) && $previous != null):  ?>
		<div class="km-pn-edge-button km-pn-edge-button-left km-frame-left" style="<?php echo esc_attr($buttonStyle); ?>">
			<div class="km-pn-edge-arrow-wrapper">
				<span class="km-pn-arrow-sign km-pn-arrow-left Defaults-km-icon-angle-left" style="<?php echo esc_attr($arrowStyle); ?>;"></span>	
			</div>
			<div class="km-pn-edge-info km-pn-edge-info-left">
				<?php if($pn_type1_thumbnail_enabled == 1 && get_the_post_thumbnail($previous->ID,'kameleon-small-icon')): ?>
					<div class="km-pn-edge-img-wrapper" style="<?php echo esc_attr($thumbStyle); ?>">
						<?php echo get_the_post_thumbnail($previous->ID,'kameleon-small-icon'); ?>
					</div>	
				<?php endif; ?>	
				<span class="km-pn-edge-title" style="<?php echo esc_attr($infoStyle); ?>"><?php echo esc_html(get_the_title($previous->ID)); ?></span>
			</div>	
			<a href="<?php echo esc_url(get_the_permalink($previous->ID)); ?>" class="km-pn-link"></a>
		</div>
	<?php endif; ?>	

<?php 
}



//Next / Previous Basic
function kameleon_pn_basic($postType, $next, $previous){
	$sy_options = kameleon_get_options_name();

	$isSingleUnique = ((is_page() || is_single()) && null !==  get_post_meta(get_the_ID(), "nextprevious_unique", true) && get_post_meta(get_the_ID(), "nextprevious_unique", true) == 1) ? true : false;		
	
	$pn_type2_arrowcolor  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_arrowcolor", true) : $sy_options[$postType.'-pn_type2_arrowcolor'];
	$pn_type2_fontsize  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_fontsize", true) : $sy_options[$postType.'-pn_type2_fontsize'];
	$pn_type2_fontcolor  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_fontcolor", true) : $sy_options[$postType.'-pn_type2_fontcolor'];
	$pn_type2_background  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_background", true) : $sy_options[$postType.'-pn_type2_background'];	
	$pn_type2_height  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_height", true) : $sy_options[$postType.'-pn_type2_height'];
	$pn_type2_margins  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_margins", true) : $sy_options[$postType.'-pn_type2_margins'];
	$pn_type2_borders  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_borders", true) : $sy_options[$postType.'-pn_type2_borders'];
	$pn_type2_paddings  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_paddings", true) : $sy_options[$postType.'-pn_type2_paddings'];
	$pn_type2_thumbnail_radius  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_thumbnail_radius", true) : $sy_options[$postType.'-pn_type2_thumbnail_radius'];
	$pn_type2_thumbnail_size  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_thumbnail_size", true) : $sy_options[$postType.'-pn_type2_thumbnail_size'];
	
	
	$pn_type2_thumbnail_enabled  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_thumbnail_enabled", true) : $sy_options[$postType.'-pn_type2_thumbnail_enabled'];
	$pn_type2_title_enabled  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_title_enabled", true) : $sy_options[$postType.'-pn_type2_title_enabled'];
	$pn_type2_np_name_enabled  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_np_name_enabled", true) : $sy_options[$postType.'-pn_type2_np_name_enabled'];
	$pn_type2_gohome  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_gohome", true) : $sy_options[$postType.'-pn_type2_gohome'];


	$pn_type2_full  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "pn_type2_full", true) : $sy_options[$postType.'-pn_type2_full'];
		
	

	$arrowStyle = 'color:'.$pn_type2_arrowcolor.';';
	$goHomeStyle = 'border-color:'.$pn_type2_arrowcolor.'; background:'.$pn_type2_arrowcolor.';';

	$wrapperStyle = 'font-size:'.$pn_type2_fontsize.'px; color:'.$pn_type2_fontcolor.'; '.kameleon_get_background_element($pn_type2_background).' min-height:'.$pn_type2_height.'px;'.kameleon_dimensions_options_element($pn_type2_margins).' '.kameleon_dimensions_options_element($pn_type2_borders).' '.kameleon_dimensions_options_element($pn_type2_paddings);

	$thumbStyle = 'border-radius:'.$pn_type2_thumbnail_radius.'px; width:'.$pn_type2_thumbnail_size.'px; height:'.$pn_type2_thumbnail_size.'px;';
	$sectionStyle = 'height:'.$pn_type2_height.'px; line-height:'.$pn_type2_height.'px;';

	$insiderClasses = ($pn_type2_full == 1) ? ' km-pn-basic-insider center-content' : ' km-pn-basic-insider '  ;

?>
	<div class="km-pn-basic-wrapper" style="<?php echo esc_html($wrapperStyle); ?>">
		<div class="<?php echo esc_attr($insiderClasses); ?>">
			<?php  if (isset($previous) && $previous != null):  ?>

				<a href="<?php echo esc_url(get_the_permalink($previous->ID)); ?>" class="km-pn-basic-section km-pn-basic-left" style="<?php echo esc_attr($sectionStyle); ?>">
					<div class="km-pn-basic-arrow km-pn-basic-arrow-left">
						<span class="km-pn-arrow-basic-icon clst-hover Defaults-km-icon-angle-left" style="<?php echo esc_attr($arrowStyle); ?>"></span>	
					</div>
					<div class="km-pn-basic-info">
						<?php 
							$thumbnailPrevious = wp_get_attachment_image_src( get_post_thumbnail_id($previous->ID), 'kameleon-small-icon', false, '' );							
							if($pn_type2_thumbnail_enabled == 1 && $thumbnailPrevious ): ?>
								<div class="km-pn-basic-img-wrapper" style="width:<?php echo $pn_type2_thumbnail_size; ?>px;">
									<img  style="<?php echo esc_attr($thumbStyle); ?>" src="<?php echo esc_url($thumbnailPrevious[0]); ?>" alt="<?php echo esc_attr(get_the_title($previous->ID)); ?>">	
								</div>	
						<?php endif; ?>	
						<?php if($pn_type2_title_enabled == 1 ):  ?>
							<?php if($pn_type2_np_name_enabled == 0): ?>
								<span class="km-pn-basic-title"><?php echo esc_html(get_the_title($previous->ID)); ?></span>
							<?php elseif($pn_type2_np_name_enabled == 1): ?>
								<span class="km-pn-basic-title"><?php echo esc_html("Previous ".ucfirst($postType),"kameleon"); ?></span>
							<?php endif; ?>					
						<?php endif; ?>					
					</div>
					
				</a>
			<?php endif; ?>
			<?php if($pn_type2_gohome == 1): ?>
				<div class="km-pn-basic-gohome">
					<span class="km-gohome-square km-pngh-1" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-2" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-3" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-4" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-5" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-6" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-7" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-8" style="<?php echo esc_attr($goHomeStyle); ?>"></span>
					<span class="km-gohome-square km-pngh-9" style="<?php echo esc_attr($goHomeStyle); ?>"></span>	
					<a href="<?php echo esc_url($sy_options[$postType.'_home_page']); ?>"></a>
				</div>
			<?php endif; ?>
			<?php  if (isset($next) && $next != null):  ?>
				<a href="<?php echo esc_url(get_the_permalink($next->ID)); ?>" class="km-pn-basic-section km-pn-basic-right" style="<?php echo esc_attr($sectionStyle); ?>">
					<div class="km-pn-basic-arrow km-pn-basic-arrow-right">
						<span class="km-pn-arrow-basic-icon clst-hover Defaults-km-icon-angle-right" style="<?php echo esc_attr($arrowStyle); ?>"></span>	
					</div>
					<div class="km-pn-basic-info">
						<?php 
							$thumbnailNext = wp_get_attachment_image_src( get_post_thumbnail_id($next->ID), 'kameleon-small-icon', false, '' );							
							if($pn_type2_thumbnail_enabled == 1 && $thumbnailNext ): ?>
								<div class="km-pn-basic-img-wrapper" style="width:<?php echo $pn_type2_thumbnail_size; ?>px;">
									<img  style="<?php echo esc_attr($thumbStyle); ?>" src="<?php echo esc_url($thumbnailNext[0]); ?>" alt="<?php echo esc_attr(get_the_title($next->ID)); ?>">	
								</div>	
						<?php endif; ?>	
						<?php if($pn_type2_title_enabled == 1 ):  ?>
							<?php if($pn_type2_np_name_enabled == 0): ?>
								<span class="km-pn-basic-title"><?php echo esc_html(get_the_title($next->ID)); ?></span>
							<?php elseif($pn_type2_np_name_enabled == 1): ?>
								<span class="km-pn-basic-title"><?php echo esc_html("Next ".ucfirst($postType),"kameleon"); ?></span>
							<?php endif; ?>					
						<?php endif; ?>	
					</div>
				</a>
					
			<?php endif; ?>
		</div>
	</div>
<?php 
}





//Page Title Bar Styling
function kameleon_titlebar($pageType, $actualPage, $title, $path, $info){
	$sy_options = kameleon_get_options_name();

	$titlebar_active  =( is_page() || is_single() &&  get_post_meta(get_the_ID(), "titlebar_active", true) !="") ? get_post_meta(get_the_ID(), "titlebar_active", true) : $sy_options[$actualPage.'-titlebar_active'];	
	$isSingleUnique = ((is_page() || is_single()) && null !==  get_post_meta(get_the_ID(), "titlebar_unique", true) && get_post_meta(get_the_ID(), "titlebar_unique", true) == 1) ? true : false;	
	
	//echo $actualPage;	
	$titlebar_style  = $sy_options['global-titlebar_style'];
	if( $actualPage != "global" && ($isSingleUnique == 1|| ( isset($sy_options[$actualPage.'-titlebar_unique']) && $sy_options[$actualPage.'-titlebar_unique'] == 1)) )
		$titlebar_style  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_style", true) : $sy_options[$actualPage.'-titlebar_style'];


	$path_active  = ($isSingleUnique) ? get_post_meta(get_the_ID(), "path_active", true) : $sy_options[$pageType.'-path_active'];		
	$titlebar_height  =($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_height", true) : $sy_options[$pageType.'-titlebar_height'];		
	
	$titlebar_background = ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_background", true) : $sy_options[$pageType.'-titlebar_background'];
	
	$titlebar_border_thickness = ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_border_thickness", true) : $sy_options[$pageType.'-titlebar_border_thickness'];
	$titlebar_border_color = ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_border_color", true) : $sy_options[$pageType.'-titlebar_border_color'];	
	


	$titleBarContainerStyle = 'min-height:'.$titlebar_height.'px; height:'.$titlebar_height.'px; line-height:'.$titlebar_height.'px; border-top:'.$titlebar_border_thickness.'px solid '.$titlebar_border_color.'; border-bottom:'.$titlebar_border_thickness.'px solid '.$titlebar_border_color.'; '.kameleon_get_background_element($titlebar_background);

	//Information Section
	$infoStyle = '';

	if(($actualPage == "post" || $actualPage =="portfolio") && $isSingleUnique){		
		$infoStyle = ($isSingleUnique) ? kameleon_font_creator_metabox('titlebar_info_font') : kameleon_font_creator_options($actualPage.'-titlebar_info_font');	
		$featured_enabled = ($isSingleUnique) ? get_post_meta(get_the_ID(), "featured_enabled", true) : $sy_options[$actualPage.'-featured_enabled'];
		if($featured_enabled == 1){
			$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '' );
			$featuredUrl = $featuredImage[0];
			$titleBarContainerStyle .= 'background-image:url('.$featuredUrl.');'; 
		}
	}
	$titlebar_attr = '';
	$titleStyle = ($isSingleUnique) ? kameleon_font_creator_metabox('titlebar_title_font') : kameleon_font_creator_options($pageType.'-titlebar_title_font');
	$pathStyle = ($isSingleUnique) ? kameleon_font_creator_metabox('titlebar_path_font') : kameleon_font_creator_options($pageType.'-titlebar_path_font');
	$titlebar_background_parallax =  ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_background_parallax", true) : '';
	if($titlebar_background_parallax != ''){
		$titlebar_attr = ' data-parallax-effect="'.$titlebar_background_parallax['parallax-active'].'" data-parallax-speed="'.$titlebar_background_parallax['parallax-speed'].'" ';
	}

	// Single Pages Post Types 
	// Checking for Pagination 
	$posTypes = array('post','portfolio','product');

	$titlebar_with_pn = array('style4','style5','style6');

	$custominfo_active = ($isSingleUnique) ? get_post_meta(get_the_ID(), "custom_info_active", true) : '';
	$custominfo_text = ($isSingleUnique) ? get_post_meta(get_the_ID(), "custom_info_text", true) : '';
	$custominfo_style = ($isSingleUnique) ? kameleon_font_creator_metabox('titlebar_custominfo_font') : '';


	if($titlebar_active == 1): 
?>
	<div id="km-titlebar" style="<?php echo esc_html($titleBarContainerStyle); ?>" <?php echo $titlebar_attr; ?> data-titlebar-style="<?php echo esc_attr($titlebar_style); ?>">
		<div id="km-titlebar-wrapper">
			<div id="km-titlebar-content" class="center-content" >
				<div id="titlebar-title" style="<?php echo esc_html($titleStyle); ?>">
					<?php echo wp_kses_data($title);  ?>
				</div>
				<?php if ($titlebar_style != "style7" && $path_active == 1 && isset($path) && $path !="" && !in_array($titlebar_style, $titlebar_with_pn)):  ?>
					<div id="titlebar-path" style="<?php echo esc_html($pathStyle); ?>">
						<?php echo wp_kses_data($path); ?>
					</div>
				<?php endif; ?>
				<?php if ($titlebar_style != "style7" && $path_active == 0 && $custominfo_active == 1 && !in_array($titlebar_style, $titlebar_with_pn)):  ?>
					<div id="titlebar-path" style="<?php echo esc_html($custominfo_style); ?>">
						<?php echo $custominfo_text; ?>					
					</div>
				<?php endif; ?>
				<?php if ($titlebar_style == "style7"):  ?>
					<div id="titlebar-info" style="<?php echo esc_html($infoStyle); ?>">
						<?php echo $info; ?>					
					</div>
				<?php endif; ?>
				<?php 
					if (in_array($titlebar_style, $titlebar_with_pn))
						kameleon_titlebar_next_previous($actualPage);
				?>
			</div>	
		</div>	
	</div>

<?php 
	endif;
}


//Function For Next/Previous On Titlebar (Post Types)
function kameleon_titlebar_next_previous($postType){
	$sy_options = kameleon_get_options_name();
	$next = get_next_post();
	$previous = get_previous_post();

	
	$isSingleUnique = ((is_page() || is_single()) &&  get_post_meta(get_the_ID(), "titlebar_unique", true) != "" && get_post_meta(get_the_ID(), "titlebar_unique", true) == 1) ? true : false;	


	$titlebar_arrowcolor 			= ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_arrowcolor", true) : $sy_options[$postType.'-titlebar_arrowcolor'];
	$titlebar_thumbnail_enabled 		= ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_thumbnail_enabled", true) : $sy_options[$postType.'-titlebar_thumbnail_enabled'];
	$titlebar_thumbnail_radius 		= ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_thumbnail_radius", true) : $sy_options[$postType.'-titlebar_thumbnail_radius'];
	$titlebar_thumbnail_size 		= ($isSingleUnique) ? get_post_meta(get_the_ID(), "titlebar_thumbnail_size", true) : $sy_options[$postType.'-titlebar_thumbnail_size'];

	$arrowStyle = 'color:'.$titlebar_arrowcolor;
	$thumbStyle = 'border-radius:'.$titlebar_thumbnail_radius.'px; width:'.$titlebar_thumbnail_size.'px; height:'.$titlebar_thumbnail_size.'px;';

?>
	<div id="km-titlebar-np">
		<?php  if (isset($previous) && $previous != null):  ?>
			<a href="<?php echo esc_url(get_the_permalink($previous->ID)); ?>"  class="km-pn-titlebar-section km-pn-titlebar-left">
				<div class="km-pn-titlebar-arrow km-pn-titlebar-arrow-left">
					<div class="km-pn-arrow-titlebar km-pn-arrow-left Defaults-km-icon-angle-left" style="<?php echo esc_attr($arrowStyle); ?>"></div>	
				</div>
				<?php 
					$thumbnailPrevious = wp_get_attachment_image_src( get_post_thumbnail_id($previous->ID), 'kameleon-small-icon', false, '' );							
					if($titlebar_thumbnail_enabled == 1 && $thumbnailPrevious ): ?>
						<div class="km-pn-titlebar-info" style="width:<?php echo esc_attr($titlebar_thumbnail_size); ?>px;">
							<div class="km-pn-titlebar-img-wrapper" style="<?php echo esc_attr($thumbStyle); ?>">
								<img  src="<?php echo esc_url($thumbnailPrevious[0]); ?>" alt="<?php echo esc_attr(get_the_title($previous->ID)); ?>">	
							</div>	
						</div>
				<?php endif; ?>		
				
			</a>
		<?php endif; ?>
		<?php  if (isset($next) && $next != null):  ?>
			<a href="<?php echo esc_url(get_the_permalink($next->ID)); ?>"  class="km-pn-titlebar-section km-pn-titlebar-right">
				<div class="km-pn-titlebar-arrow km-pn-titlebar-arrow-right">
					<div class="km-pn-arrow-titlebar km-pn-arrow-right Defaults-km-icon-angle-right" style="<?php echo esc_attr($arrowStyle); ?>"></div>	
				</div>
				<?php 
					$thumbnailNext = wp_get_attachment_image_src( get_post_thumbnail_id($next->ID), 'kameleon-small-icon', false, '' );							
					if($titlebar_thumbnail_enabled == 1 && $thumbnailNext ): ?>
						<div class="km-pn-titlebar-info" style="width:<?php echo esc_attr($titlebar_thumbnail_size); ?>px;">
							<div class="km-pn-titlebar-img-wrapper" style="<?php echo esc_attr($thumbStyle); ?>">
								<img  src="<?php echo esc_url($thumbnailNext[0]); ?>" alt="<?php echo esc_attr(get_the_title($next->ID)); ?>">	
							</div>	
						</div>
				<?php endif; ?>										
			</a>
		<?php endif; ?>
	</div>
<?php 
}

//----------------------------------------------
//Search Kameleon Styles 
//----------------------------------------------
function kameleon_search_area($header_v){
	$sy_options = kameleon_get_options_name();
	$is_single = (is_page() || is_single()) ? true : false;
	$header_v = (isset($sy_options[$header_v.'_search_unique']) && $sy_options[$header_v.'_search_unique'] == 1 ) ? $header_v : 'h'; 
	$search_enabled = ( $is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "search_enabled", true) : 
				$sy_options[$header_v.'_search_enabled'];


	if($search_enabled == 1){	
		$search_style = ( $is_single && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "search_style", true) : 
				$sy_options[$header_v.'_search_style'];
		switch ($search_style) {
			case 'fullscreen':
				kameleon_search_fullscreen($header_v, $sy_options);
				break;	
			case 'wide':
				kameleon_search_wide($header_v, $sy_options);
				break;		
			case 'dropdown':
				kameleon_search_dropdown($header_v, $sy_options);
				break;		
			case 'small':
				kameleon_search_small($header_v, $sy_options);
				break;		
			case 'topfixed':
				kameleon_search_topfixed($header_v, $sy_options);
				break;							
		}
	}
}

//Full Screen Search
function kameleon_search_fullscreen($header_v, $sy_options){
	$searchfull_background =  $sy_options[$header_v.'_searchfull_background'];
	$searchfull_animation =  $sy_options[$header_v.'_searchfull_animation'];
	$searchfull_bordercolor =  $sy_options[$header_v.'_searchfull_bordercolor'];
	$searchfull_textcolor =  $sy_options[$header_v.'_searchfull_textcolor'];
	$searchfull_fontsize =  $sy_options[$header_v.'_searchfull_fontsize'];
	$searchfull_align =  $sy_options[$header_v.'_searchfull_align'];
	?>
		<div id="kameleon-search-container" class="fullscreen-section" data-type="fullscreen"  data-animation="<?php echo esc_attr($searchfull_animation); ?>" style="background-color:<?php echo esc_attr($searchfull_background['rgba']); ?>; color:<?php echo esc_attr($searchfull_textcolor); ?>;" data-situation="hidden">
			<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get" class="km-input-parent" data-situation="inactive" data-align="<?php echo esc_attr($searchfull_align); ?>">
				<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>" style="text-align: <?php echo esc_attr($searchfull_align); ?>; font-size:<?php echo esc_attr($searchfull_fontsize); ?>px;" onfocus="km_active_border_input(this);" onfocusout="km_inactive_border_input(this);" >
				<div style="background:<?php echo esc_attr($searchfull_bordercolor); ?>;" class="km-input-border"></div>
			</form>	
			<div id="kameleon-search-closer" class="km-frame-top km-frame-right" onclick="kameleonSearchHide('#kameleon-search-container');">
				&#x2715;
			</div>		
		</div>
	<?php	

}


//Wide Search
function kameleon_search_wide($header_v, $sy_options){
	$searchwide_background = $sy_options[$header_v.'_searchwide_background'];
	$searchwide_textcolor = $sy_options[$header_v.'_searchwide_textcolor'];
	$searchwide_fontsize =  $sy_options[$header_v.'_searchwide_fontsize'];
	?>
		<div id="kameleon-search-container" data-type="wide"  style="background-color:<?php echo esc_attr($searchwide_background); ?>; color:<?php echo esc_attr($searchwide_textcolor); ?>;" data-situation="hidden">
			<div id="search-content" class="center-content">
				<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
					<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>" style="font-size:<?php echo esc_attr($searchwide_fontsize); ?>px;">
				</form>	
				<div id="kameleon-search-closer" onclick="kameleonSearchHide('#kameleon-search-container');">
					&#x2715;
				</div>		
			
			</div>
		</div>
	<?php 
}

//Drop Down Search
function kameleon_search_dropdown($header_v, $sy_options){
	$searchdrop_background = $sy_options[$header_v.'_searchdrop_background'];
	$searchdrop_border = $sy_options[$header_v.'_searchdrop_border'];
	
	$searchdrop_inputback = $sy_options[$header_v.'_searchdrop_inputback'];
	$searchdrop_inputborder = $sy_options[$header_v.'_searchdrop_inputborder'];
	$searchdrop_textcolor = $sy_options[$header_v.'_searchdrop_textcolor'];
	$searchdrop_fontsize = $sy_options[$header_v.'_searchdrop_fontsize'];

	$inputStyle ='background-color:'.$searchdrop_inputback.';  border-color:'.$searchdrop_inputborder.'; font-size:'.$searchdrop_fontsize.'px; color:'.$searchdrop_textcolor.';';

	$searchdrop_iconcolor = $sy_options[$header_v.'_searchdrop_iconcolor'];
	$searchdrop_iconbackground = $sy_options[$header_v.'_searchdrop_iconbackground'];
	?>
		<div id="kameleon-search-container" class="center-content" data-type="dropdown" data-situation="hidden">	
			<div id="search-drop-container"  style="background-color:<?php echo esc_attr($searchdrop_background); ?>; border-color:<?php echo esc_attr($searchdrop_border); ?>;">
				<div id="kameleon-search-dropdown-c"  style="<?php echo esc_attr($inputStyle); ?>">
					<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
						<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>">
					</form>	
					<div id="kameleon-search-dropdown-icon" style="background-color:<?php echo $searchdrop_iconbackground; ?>; color:<?php echo $searchdrop_iconcolor; ?>">
						&#x2715;
					</div>
				</div>						
			</div>
		</div>
	<?php 

}


//Small Search
function kameleon_search_small($header_v, $sy_options){
	$searchsmall_background = $sy_options[$header_v.'_searchsmall_background'];
	$searchsmall_textcolor = $sy_options[$header_v.'_searchsmall_textcolor'];
	$searchsmall_border = $sy_options[$header_v.'_searchsmall_border'];
	$searchsmall_fontsize = $sy_options[$header_v.'_searchsmall_fontsize'];
	?>
		<div id="kameleon-search-container" data-type="small" data-situation="hidden">
			<div id="search-content">	
				<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
					<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>" style="background-color:<?php echo esc_attr($searchsmall_background); ?>;border-color:<?php echo esc_attr($searchsmall_border); ?>; font-size:<?php echo esc_attr($searchsmall_fontsize); ?>px;">
				</form>	
				<div id="kameleon-search-closer" onclick="kameleonSearchHide('#kameleon-search-container');">
					&#x2715;
				</div>	
			</div>		
		</div>
	<?php 	
}

//top fixed search Search
function kameleon_search_topfixed($header_v, $sy_options){
	$searchtopfixed_background = $sy_options[$header_v.'_searchtopfixed_background'];
	$searchtopfixed_textcolor = $sy_options[$header_v.'_searchtopfixed_textcolor'];
	$searchtopfixed_fontsize = $sy_options[$header_v.'_searchtopfixed_fontsize'];
	$searchtopfixed_align = $sy_options[$header_v.'_searchtopfixed_align'];
	?>
	<div id="kameleon-search-container" data-type="topfixed"  class="km-frame-left km-frame-width" style="background-color:<?php echo esc_attr($searchtopfixed_background); ?>; color:<?php echo esc_attr($searchtopfixed_textcolor); ?>;" data-situation="hidden">
			<div id="search-content">
				<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
					<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>" style="font-size:<?php echo esc_attr($searchtopfixed_fontsize); ?>px; text-align: <?php echo esc_attr($searchtopfixed_align); ?>">
				</form>	
				<div id="kameleon-search-closer" onclick="kameleonSearchHide('#kameleon-search-container');">
					&#x2715;
				</div>		
			
			</div>
		</div>
	<?php 
}


//Hidden Full Width SideBar
function kameleon_header_sidebar(){
	$sy_options = kameleon_get_options_name();
	$header_v = ( (is_page() || is_single()) && get_post_meta(get_the_ID(), "header_unique", true) == 1 ) ? 
				get_post_meta(get_the_ID(), "header_v", true) : 
				$sy_options['header_v']; 
	$animation_swa = $sy_options[$header_v.'_animation_swa']; 
	$marginStyle ='';
	if($animation_swa == "push")
		$marginStyle ='margin-'.$sy_options[$header_v.'_position_swa'].':-'.$sy_options['swa_width'].'px;';

	$swaStyle = 'width:'.$sy_options['swa_width'].'px;'.$marginStyle.' '.kameleon_dimensions_options_element($sy_options['swa_padding']).' '.kameleon_get_background_element($sy_options[$header_v.'_background_swa']);	
	$colorSchemeSWA = $sy_options[$header_v.'_type_swa']; 

	?>
	<div id="km-slide-widgetarea" data-animation="<?php echo esc_attr(esc_attr($animation_swa)); ?>" data-colorscheme="<?php echo esc_attr($colorSchemeSWA); ?>" data-position="<?php echo esc_attr($sy_options[$header_v.'_position_swa']); ?>" style="<?php echo $swaStyle; ?>" data-situation="hidden">
		<div id="km-slide-widgetarea-content">
			<?php dynamic_sidebar($sy_options[$header_v.'_sidebar_swa']); ?>
		</div>		
		<?php if($sy_options['swa_social_enable'] == 1 ): ?>
		<div id="km-slide-widgetarea-social" data-align="<?php echo esc_attr($sy_options['swa_social_align']); ?>">
			<?php kameleon_social_links($sy_options['swa_social_array'],'swa-'.$colorSchemeSWA); ?>
		</div>
		<?php endif; ?>
	</div>
	<?php 
}


function kameleon_side_header_minimalist($header_v){
	$sy_options = kameleon_get_options_name();
	$headersArray = kameleon_headers_type_theme();
	$h_logo_type = $sy_options[$headersArray[$header_v].'_logo_type_side'];
	$marginStyle ='';
	$animation_side = $sy_options[$headersArray[$header_v].'_animation_side'];
	$sideHeaderScheme = $sy_options[$headersArray[$header_v].'_info_scheme'];
	if($animation_side == "push")
		$marginStyle ='margin-'.$sy_options[$headersArray[$header_v].'_position_side'].':-'.$sy_options[$headersArray[$header_v].'_width_side'].'px;';
?>
	<div id="<?php echo esc_attr($headersArray[$header_v]); ?>-minimalist-header" style="<?php echo esc_attr($marginStyle); ?> text-align:<?php echo esc_attr($sy_options[$headersArray[$header_v].'_content_position_side']); ?>;"  class="<?php echo esc_attr($headersArray[$header_v]); ?>-minimalist-menu kameleon-side-header kameleon-side-header-minimalist" data-position="<?php echo esc_attr($sy_options[$headersArray[$header_v].'_position_side']); ?>"  data-animation="<?php echo esc_attr($animation_side); ?>" data-situation="hidden">
		<div id="main-logo-container" style="text-align:<?php echo esc_attr($sy_options[$headersArray[$header_v].'_logo_position_side']); ?> ">
			<?php include trailingslashit( get_template_directory() ).'/templates/headers/logo-style-side.php'; ?>						
		</div>
		<div class="km-side-padding" style="color: <?php echo esc_attr($sy_options['side-h-'.$sideHeaderScheme.'-text_color']);?>">
			<div id="side-menu-info">		
				<?php if ($sy_options['contact_phone'] != ''){ ?><span> <i class="fa fa-mobile"></i><?php echo wp_kses_data($sy_options['contact_phone']); ?></span> <?php } ?>
				<?php if ($sy_options['contact_email'] != ''){ ?><span> <i class="fa fa-envelope-o"></i><?php echo wp_kses_data($sy_options['contact_email']); ?></span> <?php } ?>
			</div>	
		</div>

		<div id="side-menu-container" data-type="full">
			<?php  get_template_part('templates/headers/menu','side'); ?>				
		</div>
		<div id="side-menu-bottom" class="km-side-padding" style="color: <?php echo esc_attr($sy_options['side-h-'.$sideHeaderScheme.'-text_color']);?>">
			<div id="side-menu-icons"  class="km-side-borders">
				<?php kameleon_social_links($sy_options['side_h_social_array'],'side-h-'.$sideHeaderScheme) ?>
			</div>
			<div id="side-menu-copyright">
				<?php echo wp_kses_data($sy_options['side_h_copyright']); ?>				
			</div>
		</div>

	</div>
<?php 
}

//Style for The Side Header Version 2 Always Shown
function kameleon_minimalist_headers_styles(){
	$h_styles = '';
	$sideHeaders = array('hv8','hv9');
	foreach ($sideHeaders as $hvType) {
		$h_styles .= kameleon_side_header_styler($hvType);
	}
	$sideHeaders = array('hv10');
	foreach ($sideHeaders as $hvType) {
		$h_styles .= kameleon_fulscreen_header_styler($hvType);
	}

	return $h_styles;
}
//Side Minimalist Header CSS Style
function kameleon_side_header_styler($headerType){
	$sy_options = kameleon_get_options_name();
	$side_h_style = '';
	$styleID = '#'.$headerType.'-minimalist-header ';
	$side_h_style .= $styleID.'{'.kameleon_get_background_element($sy_options[$headerType.'_background_side']).'width:'.$sy_options[$headerType.'_width_side'].'px;}';
	$side_h_style .= $styleID.' .main-logo-side{height:'.$sy_options[$headerType.'_logo_height_side'].'px; padding-top:'.$sy_options[$headerType.'_padding_side']['padding-top'].'; padding-bottom:'.$sy_options[$headerType.'_padding_side']['padding-bottom'].'; width:'.$sy_options[$headerType.'_logo_width_side'].'px; margin-top:'.$sy_options[$headerType.'_logo_marginTop_side'].'px;}';					
	$side_h_style .=  $styleID.'#side-menu-container > ul > li,.km-side-padding, '.$styleID.'#main-logo-container{padding-right:'.$sy_options[$headerType.'_padding_side']['padding-right'].'; padding-left:'.$sy_options[$headerType.'_padding_side']['padding-left'].'; box-sizing:border-box;}';
	$side_h_style .=  $styleID.'#side-menu-container  ul  li a{height:'.$sy_options[$headerType.'_link_height_side'].'px; line-height:'.$sy_options[$headerType.'_link_height_side'].'px; font-size:'.$sy_options[$headerType.'_fontsize_side'].'px;}';
		$side_h_style .=  $styleID.'#side-menu-container > ul > li > a,.km-side-borders{'.kameleon_dimensions_options($headerType.'_border_side') .'}'.$styleID.'#side-menu-container > ul > li > a:hover{border-color: transparent!important;}.km-side-borders{border-top:0px !important;}';
		$side_h_style .=  $styleID.'#side-menu-container > ul > li{color:'.$sy_options[$headerType.'_color_side'].';}';
	$side_h_style .= $styleID.' #side-menu-container > ul > li:hover{background:'.$sy_options[$headerType.'_hover_background_side'].'; color:'.$sy_options[$headerType.'_hover_color_side'].';}';
	$side_h_style .= $styleID.' #side-menu-container > ul > li ul li a,'.$styleID.' #side-menu-container > ul > li ul{background:'.$sy_options[$headerType.'_background_drop_side'].'; color:'.$sy_options[$headerType.'_color_drop_side'].';}';
	$side_h_style .= $styleID.' #side-menu-container > ul > li ul li a:hover{background:'.$sy_options[$headerType.'_background_hover_drop_side'].'; color:'.$sy_options[$headerType.'_color_hover_drop_side'].';}';		
	return $side_h_style;

}


//Function Full Screen Headers
function kameleon_fullscreen_header_minimalist($header_v){
	$sy_options = kameleon_get_options_name();
	$headersArray = kameleon_headers_type_theme();
	$hv = $headersArray[$header_v];
	$full_color_scheme = $sy_options['full_color_scheme'];
		
	$main_logo = $sy_options['logo']['url'];
	$main_retlogo = $sy_options['retlogo']['url'];
	
	if($full_color_scheme == 'dark'){
		$main_logo = $sy_options['trslogo']['url'];
		$main_retlogo = $sy_options['trsretlogo']['url'];	
	}
	$logoStyle = 'width:'.$sy_options[$hv.'_logo_width_fullscreen'].'px; margin-top:'.$sy_options[$hv.'_logo_mtop_fullscreen'].'px;  height:'.$sy_options[$hv.'_logo_height_fullscreen'].'px; ';
	$copyStyle = 'font-size:'.$sy_options[$hv.'_copyright_size_fullscreen'].'px; color:'.$sy_options['fullscreen-h-'.$full_color_scheme.'_text_color'];
	

	?>
		<div id="kameleon-fullscreen-menu-container" data-type="fullscreen"  data-animation="<?php echo esc_attr($sy_options[$hv.'_show_animation_fullscreen']); ?>" style="background-color:<?php echo esc_attr($sy_options['fullscreen-h-'.$full_color_scheme.'_background']['rgba']); ?>; color:<?php echo esc_attr($sy_options['fullscreen-h-'.$full_color_scheme.'_link_color']); ?>; --link-scheme-color:<?php echo esc_attr($sy_options['fullscreen-h-'.$full_color_scheme.'_link_color']); ?>;" data-situation="hidden" class="fullscreen-section <?php echo esc_attr($hv); ?>-fullscreen-header">
			<div class="kameleon-fullscreen-logo" style="text-align: <?php echo esc_attr($sy_options[$hv.'_logo_align_fullscreen']); ?>">
				<div class="kameleon-fullscreen-logo-img" style="<?php echo esc_attr($logoStyle); ?>">	
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_url($main_logo); ?>" class="default-logo">
						<img src="<?php echo esc_url($main_retlogo); ?>" class="retina-logo">
					</a>	
				</div>
			</div>
			<div  class="kameleon-fullscreen-closer km-frame-top km-frame-right" onclick="kameleonEscapePressed();">
				&#x2715;
			</div>			
			<div id="full-screen-menu" class="full-screen-menu">
				<?php  get_template_part('templates/headers/menu','fullscreen'); ?>								
			</div>
			<div class="kameleon-fullscreen-bottom-info" data-style="<?php echo esc_attr($sy_options[$hv.'_copyright_style_fullscreen']); ?>">
				<div class="kameleon-fullscreen-bottom-copy" style="<?php echo esc_attr($copyStyle); ?>"><?php echo wp_kses_data($sy_options['footer_copyright_content']); ?></div>
				<div class="kameleon-fullscreen-bottom-icon">
					<?php kameleon_social_links($sy_options['full_social_array'],'fullscreen-h-'.$full_color_scheme); ?>
				</div>
			</div>	
		</div>
	<?php 
}

function kameleon_fulscreen_header_styler($headerType){
	$sy_options = kameleon_get_options_name();
	$fullscreen_h_style = '';
	$styleID = '.'.$headerType.'-fullscreen-header ';

	$fullscreen_h_style .= $styleID.'#full-screen-menu ul li{height:'.$sy_options[$headerType.'_link_height_fullscreen'].'px; line-height:'.$sy_options[$headerType.'_link_height_fullscreen'].'px; font-size:'.$sy_options[$headerType.'_text_size_fullscreen'].'px; font-weight:'.$sy_options[$headerType.'_link_weight_fullscreen'].'; text-transform:'.$sy_options[$headerType.'_link_transform_fullscreen'].'; letter-spacing:'.$sy_options[$headerType.'_link_spacing_fullscreen'].'px; }';	
	return $fullscreen_h_style;
}





function kameleon_portfolio_ajax_print($pID,$ovy_id){
	$sy_options = kameleon_get_options_name();
	$categories =  wp_get_object_terms($pID, 'km-folio-category'); 
	$skills =  wp_get_object_terms($pID, 'km-folio-skill'); 
	$folio_link = get_post_meta($pID,'folio_link',true);
	$folio_client = get_post_meta($pID,'folio_client',true);
	$folio_gallery_type = get_post_meta($pID,'folio_gallery_type',true);

	$query_options = array('p' => $pID , 'post_type'=> 'portfolio' );
    query_posts( $query_options );  
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
    	$next = get_next_post();
		$previous = get_previous_post();
?>
	<div class="km-paj-container">
		<?php if($sy_options['paj_pn_enabled'] == 1): ?>		
			<?php  if (isset($next) && $next != null):  ?>
			<div class="km-prnx-iconcontainer-c prev" data-overlayid="km-paj-overlay-<?php echo $ovy_id; ?>" data-id="<?php	echo $next->ID; ?>" onclick="kameleon_ajax_portfolio(this);">
				<div class="km-paj-prev km-prnx-iconcontainer">
					<span class="km-paj-pn-tx"><?php echo esc_html__('Prev','kameleon'); ?></span>
					<span class="km-paj-pn Defaults-km-icon-angle-left"></span>
				</div>			
			</div>
			<?php  endif; ?>
			<?php  if (isset($previous) && $previous != null):  ?>
			<div class="km-prnx-iconcontainer-c nex" data-overlayid="km-paj-overlay-<?php echo $ovy_id; ?>" data-id="<?php	echo $previous->ID; ?>" onclick="kameleon_ajax_portfolio(this);">
				<div class="km-paj-nex km-prnx-iconcontainer">
					<span class="km-paj-pn-tx"><?php echo esc_html__('Next','kameleon'); ?></span>
					<span class="km-paj-pn Defaults-km-icon-angle-right"></span>
				</div>			
			</div>
			<?php  endif; ?>
		<?php  endif; ?>

		<div class="km-paj-top">
			<?php if($sy_options['paj_social_enabled'] == 1): ?>		
				<div class="km-paj-social"></div>
			<?php  endif; ?>

			<div class="km-paj-title"><?php the_title(); ?></div>
			<div class="km-paj-close km-paj-icon-c" onclick="kameleonEscapePressed();">&#x2715;</div>
		</div>
		<div class="km-paj-content center-content single-portfolio-data" data-folio-layout="bottom">
			<div class="km-paj-image">
				<div id="km-portfolio-gall">
					<?php 
						if(trim($folio_video_embed) == "" && ($folio_gallery_type == 'thumbnails' || $folio_gallery_type == 'normal-slider')){
							sy_portfolio_thumbnail_icon(''); 
						}
						
						if(trim($folio_video_embed) != ""){
							echo '<div class="km-embed-videoWrapper">'.$folio_video_embed.'</div>'; 
						}
						if(trim($folio_video_embed) == "" && $folio_gallery_type == 'none'){
							sy_portfolio_image(); 
						}
					?>
				</div>
			</div>
			<div id="km-portfolio-information">
					<div id="km-portfolio-content">
						<span class="km-paj-about-tit"><?php echo esc_html__('About Project','kameleon'); ?></span>
						<?php the_excerpt(); ?>
					</div>
					
					<div id="km-portfolio-data">	
						<span class="km-paj-about-tit"><?php echo esc_html__('Details','kameleon'); ?></span>										
						<?php if($folio_link != ''): ?>
							<div class="km-p-data-item">
								<div class="km-p-data-title">
									<div><?php echo esc_html__('Project Link','kameleon'); ?></div>
								</div>
								<div class="km-p-data-info">
									<a class="clst-hover" href="<?php echo esc_url($folio_link); ?>" target="_blank"><?php echo esc_html__('Visit Project','kameleon'); ?></a>
								</div>
							</div>
						<?php endif;  
						if(is_array($categories) && sizeof($categories) >= 1): ?>
							<div class="km-p-data-item">
								<div class="km-p-data-title">
									<div><?php echo esc_html__('Categories','kameleon'); ?></div>
								</div>
								<div class="km-p-data-info">
									<?php foreach ($categories as $cat) {
										echo '<span>'.$cat->name.'</span>';
									}?>
								</div>
							</div>
						<?php endif; 
						if (is_array($skills) && sizeof($skills) >= 1): ?>
							<div class="km-p-data-item">
								<div class="km-p-data-title">
									<div><?php echo esc_html__('Skills Involved','kameleon'); ?></div>
								</div>
								<div class="km-p-data-info">
									<?php foreach ($skills as $skill) {
										echo '<span>'.$skill->name.'</span>';
									}?>
								</div>
							</div>
						<?php endif; 
							if($folio_client != ""): ?>	
								<div class="km-p-data-item">
									<div class="km-p-data-title">
										<div><?php echo esc_html__('Client','kameleon'); ?></div>
									</div>
									<div class="km-p-data-info">
										<?php echo  wp_kses_data($folio_client); ?>
									</div>
								</div>
						<?php endif; ?>
					</div>
				</div>		
			</div>
		<div class="km-paj-social"></div>
	</div>
	<?php
	  endwhile; 
    endif;  
  	wp_reset_query();
}

function kameleon_dot_navigation(){	
	$dot_nav_style = get_post_meta(get_the_ID(), "dot_nav_style", true);
	$dot_nav_position = get_post_meta(get_the_ID(), "dot_nav_position", true);
	$dot_nav_circle = get_post_meta(get_the_ID(), "dot_nav_circle", true);
	$dot_nav_colorscheme = get_post_meta(get_the_ID(), "dot_nav_colorscheme", true);
	$dot_nav_activecolorscheme = get_post_meta(get_the_ID(), "dot_nav_activecolorscheme", true);
	$dot_nav_size = get_post_meta(get_the_ID(), "dot_nav_size", true);
	$style = '--dot-size: '.$dot_nav_size.'px; --dot-colorscheme: '.$dot_nav_colorscheme.'; --dot-activecolorscheme: '.$dot_nav_activecolorscheme.';';
	echo '<div class="km-dot-nav-c" data-style="'.$dot_nav_style.'"  data-position="'.$dot_nav_position.'" data-circle="'.$dot_nav_circle.'" style="'.$style.'"></div>';
}
?>