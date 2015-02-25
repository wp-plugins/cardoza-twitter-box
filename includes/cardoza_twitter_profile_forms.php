<?php
function cardoza_twitter_box_options_page(){	
	if(isset($_POST['frm_submit'])){
		if(!empty($_POST['frm_title'])) 
			update_option('cardoza_tb_title', $_POST['frm_title']);
		if(!empty($_POST['frm_username'])) 
			update_option('cardoza_tb_username', $_POST['frm_username']);
		if(!empty($_POST['frm_user_widget_id'])) 
			update_option('cardoza_tb_user_widget_id', $_POST['frm_user_widget_id']);
		if(!empty($_POST['frm_width'])) 
			update_option('cardoza_tb_width', $_POST['frm_width']);
		if(!empty($_POST['frm_height'])) 
			update_option('cardoza_tb_height', $_POST['frm_height']);
		if(!empty($_POST['frm_links_color'])) 
			update_option('cardoza_tb_links_color', $_POST['frm_links_color']);
		if(!empty($_POST['frm_theme'])) 
			update_option('cardoza_tb_theme', $_POST['frm_theme']);
		
?>
		<div id="message" class="updated fade"><p><strong><?php _e('Options saved.', 'c3dtc_tans_domain' ); ?></strong></p></div>
<?php	
	}
	$option_value = ctb_retrieve_options($opt_val);
?>
	<div class="wrap">
		<h2><?php _e("Twitter Box Options", "ctb_tans_domain");?></h2><br />
		<!-- Administration panel form -->
		<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<h3>General Settings</h3>
			<table>
				<tr>
					<td><strong>Title:</strong></td>
					<td><input type="text" name="frm_title" size="50" value="<?php echo $option_value['ctb_title'];?>"/>(Title of the twitter box)</td>
				</tr>
				<tr>
					<td><strong>Username:</strong></td>
					<td><input type="text" name="frm_username" size="50" value="<?php echo $option_value['ctb_username'];?>"/>(Username for your twitter account)</td>
				</tr>
				<tr>
					<td><strong>Widget ID:</strong></td>
					<td><input type="text" name="frm_user_widget_id" size="50" value="<?php echo $option_value['ctb_user_widget_id'];?>"/>(Widget ID from your twitter account - you can get this from the url of your widget)</td>
				</tr>
				<tr>
					<td><strong>Width:</strong></td>
					<td><input type="text" name="frm_width" size="20" value="<?php echo $option_value['ctb_width'];?>"/>px</td>
				</tr>
				<tr>
					<td><strong>Height:</strong></td>
					<td><input type="text" name="frm_height" size="20" value="<?php echo $option_value['ctb_height'];?>"/>px</td>
				</tr>
				<tr>
					<td><strong>Links color:</strong></td>
					<td><input type="text" name="frm_links_color" size="20" value="<?php echo $option_value['ctb_links_color'];?>"/>(Should be an hex value like #000)</td>
				</tr>
				<tr>
					<td><strong>Theme:</strong></td>
					<td><select name="frm_theme">
					<option value="default" <?php if($option_value['ctb_theme']=="default") echo "selected='selected'";?>>default</option>
					<option value="dark" <?php if($option_value['ctb_theme']=="dark") echo "selected='selected'";?>>dark</option>
				</select></td>
				</tr>
			</table>
			<input type="submit" name="frm_submit" value="Update Options" />
		</form>
	</div>
<?php
}
?>