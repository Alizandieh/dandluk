<?php include_once(KAMELEON_PLUGIN_PATH.'includes/dashboard/sections/top.php'); 
wp_enqueue_script('km-code-editor-script');
?>
<div class="km-topmessage-cc">
	<?php echo esc_html__('Use Kameleon Code Editor to add custom and advanced code. Kameleon Code Editor gives you the same experience & feeling as a real code editor.','kameleon'); ?>
	
	<br/>	
</div>
<div class="km-codeeditor-c">
	<div class="km-codeeditor-sec">
		<div class="km-codeeditor-icon" style="background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGlkPSJMYWdlcl8xIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMjggMTI4OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgMTI4IDEyOCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGc+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNTAiIHN0eWxlPSJmaWxsOiMzM0E5REM7Ii8+PC9nPjwvZz48cGF0aCBkPSJNOTAsNDJsLTgsNDBsLTI0LjEsOEwzNyw4MmwyLjEtMTAuN0g0OGwtMC45LDQuNGwxMi43LDQuOGwxNC42LTQuOGwyLTEwLjJINDAuMmwxLjctOC45aDM2LjMgICBsMS4xLTUuN0g0My4xbDEuOC04LjlDNDQuOSw0Miw5MCw0Miw5MCw0MnoiIHN0eWxlPSJmaWxsOiNGRkZGRkY7Ii8+PC9nPjwvc3ZnPg==);">	
		</div>
		<div class="km-codeeditor-css km-codeeditor-area" id="km-codeeditor-css"></div>
	</div>
	<div class="km-codeeditor-sec">
		<div class="km-codeeditor-icon" style="background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGlkPSJMYWdlcl8xIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMjggMTI4OyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgMTI4IDEyOCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGc+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNTAiIHN0eWxlPSJmaWxsOiNGMERCNEY7Ii8+PC9nPjwvZz48ZyBpZD0iTGF5ZXJfMV8xXyI+PGc+PGc+PHBhdGggZD0iTTQ4LjQsNDQuNmg4Ljd2MjQuNWMwLDExLTUuMywxNC45LTEzLjcsMTQuOWMtMi4xLDAtNC43LTAuMy02LjQtMC45bDEtNy4xICAgICAgYzEuMiwwLjQsMi44LDAuNyw0LjUsMC43YzMuNywwLDYtMS43LDYtNy42TDQ4LjQsNDQuNkw0OC40LDQ0LjZ6IiBzdHlsZT0iZmlsbDojMzIzMzMwOyIvPjxwYXRoIGQ9Ik02NC44LDc0LjRjMi4zLDEuMiw2LDIuNCw5LjcsMi40YzQsMCw2LjEtMS43LDYuMS00LjNjMC0yLjQtMS44LTMuOC02LjUtNS40ICAgICAgYy02LjQtMi4zLTEwLjctNS45LTEwLjctMTEuNkM2My40LDQ5LDY5LDQ0LDc4LjEsNDRjNC40LDAsNy42LDAuOSw5LjksMmwtMiw3Yy0xLjUtMC43LTQuMy0xLjgtOC0xLjhjLTMuOCwwLTUuNiwxLjgtNS42LDMuNyAgICAgIGMwLDIuNSwyLjEsMy42LDcuMiw1LjVjNi44LDIuNSwxMCw2LjEsMTAsMTEuNmMwLDYuNS00LjksMTItMTUuNiwxMmMtNC40LDAtOC44LTEuMi0xMS0yLjRMNjQuOCw3NC40eiIgc3R5bGU9ImZpbGw6IzMyMzMzMDsiLz48L2c+PC9nPjwvZz48L2c+PC9zdmc+);">
			
		</div>
		<div class="km-codeeditor-js km-codeeditor-area" id="km-codeeditor-js"></div>
	</div>
</div>
<div class="km-code-custom-bottom">
	<div class="km-sidebar-maker">
		<div class="km-sidebar-form">
			<input type="text" id="km-sidebar-input" placeholder="Sidebar Name" />
			<div class="km-sidebar-form-button" onclick="km_sidebar_action('newSidebar',this);" data-situation="none">
				<span class="km-sidebar-form-button-tx"><?php echo esc_html__('Create','kameleon'); ?></span>
				<div class="km-custom-save-loading"></div>
			</div>
			<span><?php echo esc_html__('Manage Kameleon theme sidebars & Create New Ones','kameleon'); ?></span>
		</div>
		<div class="km-sidebarmaker-el-table">
			<div class="km-sidebarmaker-el-head km-sidebarmaker-el-item">
				<div class="km-sidebarmaker-name"><?php echo esc_html__('Sidebar Name','kameleon'); ?></div>
				<div class="km-sidebarmaker-date"><?php echo esc_html__('Creation Date','kameleon'); ?></div>
				<div class="km-sidebarmaker-action"></div>
			</div>
			<?php 
				$kameleon_custom_sidebars  = get_option('kameleon_custom_sidebars');	
				if(is_array($kameleon_custom_sidebars)){
					$index = 0;
					foreach ($kameleon_custom_sidebars as $s) {
						?>
						<div class="km-sidebarmaker-el-item km-sidebarmaker-el-sidebar">
							<div class="km-sidebarmaker-name"><?php echo $s['name']; ?></div>
							<div class="km-sidebarmaker-date"><?php echo $s['date']; ?></div>
							<div class="km-sidebarmaker-action" data-sidebar-id="<?php echo $index; ?>" onclick="km_sidebar_action('deleteSidebar',this);" ><a><i class="fa fa-trash-o"></i></a></div>
						</div>
						<?php 
						$index += 1;
					}
			 	}
			 ?>	
			
		</div>
	</div>
	<div class="km-gmapskeycontainer">
		<div class="km-codeeditor-icon" style="top:13px; right: 5px; background-size:25px 25px !important;background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSIyNCIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6Y2M9Imh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL25zIyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTEwMjguNCkiPjxwYXRoIGQ9Im0xMiAwYy00LjQxODMgMi4zNjg1ZS0xNSAtOCAzLjU4MTctOCA4IDAgMS40MjEgMC4zODE2IDIuNzUgMS4wMzEyIDMuOTA2IDAuMTA3OSAwLjE5MiAwLjIyMSAwLjM4MSAwLjM0MzggMC41NjNsNi42MjUgMTEuNTMxIDYuNjI1LTExLjUzMWMwLjEwMi0wLjE1MSAwLjE5LTAuMzExIDAuMjgxLTAuNDY5bDAuMDYzLTAuMDk0YzAuNjQ5LTEuMTU2IDEuMDMxLTIuNDg1IDEuMDMxLTMuOTA2IDAtNC40MTgzLTMuNTgyLTgtOC04em0wIDRjMi4yMDkgMCA0IDEuNzkwOSA0IDQgMCAyLjIwOS0xLjc5MSA0LTQgNC0yLjIwOTEgMC00LTEuNzkxLTQtNCAwLTIuMjA5MSAxLjc5MDktNCA0LTR6IiBmaWxsPSIjZTc0YzNjIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDEwMjguNCkiLz48cGF0aCBkPSJtMTIgM2MtMi43NjE0IDAtNSAyLjIzODYtNSA1IDAgMi43NjEgMi4yMzg2IDUgNSA1IDIuNzYxIDAgNS0yLjIzOSA1LTUgMC0yLjc2MTQtMi4yMzktNS01LTV6bTAgMmMxLjY1NyAwIDMgMS4zNDMxIDMgM3MtMS4zNDMgMy0zIDMtMy0xLjM0MzEtMy0zIDEuMzQzLTMgMy0zeiIgZmlsbD0iI2MwMzkyYiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxMDI4LjQpIi8+PC9nPjwvc3ZnPg==);"></div>
		<input id="km-gmaps-key" value="<?php echo bsf_get_option('map_key'); ?>" placeholder="Google Maps API" />
		<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank"><?php echo __('Get API Key', 'kameleon'); ?></a>
	</div>
	<div class="km-ganalytics">
	<div class="km-codeeditor-icon" style="background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaWQ9IkxhZ2VyXzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDEyOCAxMjg7IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsOiNGNUY1RjU7fQoJLnN0MXtmaWxsOiNFQTQzMzU7fQoJLnN0MntmaWxsOiNGQkJDMDU7fQoJLnN0M3tmaWxsOiM0Mjg1RjQ7fQoJLnN0NHtmaWxsOiMzNEE4NTM7fQo8L3N0eWxlPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik02NCwxNGMtMjcuNiwwLTUwLDIyLjQtNTAsNTBzMjIuNCw1MCw1MCw1MHM1MC0yMi40LDUwLTUwUzkxLjYsMTQsNjQsMTR6Ii8+PGc+PGc+PHBhdGggY2xhc3M9InN0MSIgZD0iTTU2LjMsNDAuMmM1LjQtMS44LDExLjQtMS44LDE2LjgsMC4yYzIuOSwxLjEsNS43LDIuOCw4LDUuMWMtMC44LDAuOC0xLjYsMS42LTIuNCwyLjQgICAgYy0xLjUsMS41LTMuMSwzLjEtNC42LDQuNmMtMS41LTEuNS0zLjQtMi42LTUuNC0zLjFjLTIuMy0wLjctNC45LTAuOC03LjMtMC4zYy0yLjgsMC43LTUuNCwyLjEtNy41LDQuMWMtMS42LDEuNi0yLjksMy44LTMuNiw1LjkgICAgYy0yLjgtMi4xLTUuNC00LjItOC4yLTYuNEM0NS4xLDQ2LjksNTAuMyw0Mi4zLDU2LjMsNDAuMnoiLz48L2c+PGc+PHBhdGggY2xhc3M9InN0MiIgZD0iTTQwLDU5YzAuNS0yLjEsMS4xLTQuMiwyLjEtNi40YzIuOCwyLjEsNS40LDQuMiw4LjIsNi40Yy0xLjEsMy4xLTEuMSw2LjUsMCw5LjhjLTIuOCwyLjEtNS40LDQuMi04LjIsNi40ICAgIEMzOS43LDcwLjEsMzguOSw2NC40LDQwLDU5eiIvPjwvZz48Zz48cGF0aCBjbGFzcz0ic3QzIiBkPSJNNjQuNSw1OS4yYzcuOCwwLDE1LjcsMCwyMy41LDBjMC44LDQuNCwwLjcsOS0wLjcsMTMuMmMtMS4xLDMuOS0zLjMsNy41LTYuNCwxMC41Yy0yLjYtMi4xLTUuMi00LjEtOC02LjIgICAgYzIuNi0xLjgsNC40LTQuNiw1LjEtNy43Yy00LjYsMC05LjEsMC0xMy42LDBDNjQuNSw2NS43LDY0LjUsNjIuNCw2NC41LDU5LjJ6Ii8+PC9nPjxnPjxwYXRoIGNsYXNzPSJzdDQiIGQ9Ik00Mi4xLDc1LjJjMi44LTIuMSw1LjQtNC4yLDguMi02LjRjMSwzLjEsMy4xLDUuOSw1LjcsNy43YzEuNiwxLjEsMy42LDIsNS42LDIuNGMyLDAuMywzLjksMC4zLDYsMCAgICBjMi0wLjMsMy45LTEuMSw1LjYtMi4xYzIuNiwyLjEsNS4yLDQuMSw4LDYuMmMtMi45LDIuNi02LjQsNC40LTEwLjMsNS40Yy00LjIsMS04LjcsMS0xMi43LTAuMmMtMy4zLTAuOC02LjQtMi40LTkuMS00LjYgICAgQzQ2LjIsODEuMiw0My44LDc4LjMsNDIuMSw3NS4yeiIvPjwvZz48L2c+PC9zdmc+);"></div>
	<textarea class="km-ganalytics-code" id="km-ganalytics-code" placeholder="Google Analytics Code"><?php echo stripcslashes(base64_decode(kameleon_get_single_option('gAnalytics'))); ?></textarea>
	</div>
</div>
<div class="km-custom-save">
	<div class="km-custom-insider">
		<div class="km-custom-save-sit" data-situation="none">
			<div class="km-custom-save-loading"></div>
			<div class="km-custom-save-done">&#10003;</div>
		</div>	
		<div class="km-custom-save-button" onclick="km_save_custom_code();"><?php echo esc_html__('Save Changes','kameleon'); ?></div>
	</div>
</div>