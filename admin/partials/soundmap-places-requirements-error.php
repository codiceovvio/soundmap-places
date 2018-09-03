<?php

/**
 * Display a message in admin area in case of errors.
 *
 * This file is used to display an error message in the admin area if
 * the main (Sound Map) plugin is not installed and/or activated.
 *
 * @since   0.1.0
 *
 * @package Soundmap_Places/admin/partials
 */
?>
<div class="notice notice-error is-dismissible">
	<p><strong>Sound Map Places - </strong>Your setup doesn't meet the system requirements listed below.</p>
	<p><a href="https://github.com/codiceovvio/soundmap/">Sound Map</a> plugin must be installed and activated.</p>
	<p>You can download the <a href="https://github.com/codiceovvio/soundmap/releases/">latest release</a> zip file and upload it to your wp-content/plugins directory.</p>
	<p>Then go to you site dashboard->plugins page and activate as with any other plugin.</p>
	<button type="button" class="notice-dismiss">
		<span class="screen-reader-text">Dismiss this notice.</span>
	</button>
</div>
