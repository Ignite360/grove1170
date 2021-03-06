<?php
// Setup URL to WordPres
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

// Access WordPress
require_once( $wp_url.'/wp-load.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<div id="smpl-dialog">
		<div id="smpl-options-buttons" class="clear">
			<div class="alignleft">
			   <h3><?php _e( 'Shortcode Options', 'smpl_shortcodes' ); ?></h3>
			</div>
			<div class="alignright">
			 	<input type="button" id="smpl-cancel-button" class="button" name="cancel" value="Cancel" accesskey="C" />
			    <input type="button" id="smpl-insert-button" class="button-primary" name="insert" value="Insert" accesskey="I" />
			</div>
			<div class="clear"></div><!--/.clear-->
		</div><!-- #smpl-options-buttons(end) -->
		<div id="smpl-shortcode-options">
			<table id="smpl-options-table" class="widefat">
			</table>
		</div>
		<div class="clear"></div>
		<script type="text/javascript" src="<?php echo SMPL_SHORTCODES_PLUGIN_URI; ?>/includes/admin/generator/assets/js/dialog-js.php"></script>
	</div><!-- #smpl-dialog (end) -->
</body>
</html>