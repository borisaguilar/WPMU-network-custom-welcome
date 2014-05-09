<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   WPMUNetworkAds
 * @author    Boris Aguilar <me@borisaguilar.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>

<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<form method="POST" action="/wp-admin/network/edit.php?action=wpmu_network_custom_welcome">
	      <label for="custom-welcome"><h3>Custom Welcome (HTML):</h3></label>
		<p><small>This is loaded everytime a new site is created.</small></p>
	      <textarea style="width:100%;" rows=10 id="custom-welcome" name="custom-welcome" rows=4 cols=2><?php echo(html_entity_decode(get_site_option('wpmu_network_custom_welcome'))); ?></textarea>
	      <?php submit_button(); ?>
	</form>

	<!-- TODO: Provide markup for your options page here. -->

</div>
