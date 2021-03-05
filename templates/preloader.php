<?php
/**
 * Preloader template.
 *
 * This template can be overriden by copying this file to your-theme/bs5-preloader/preloader.php
 *
 * @author 		Bastian Kreiter
 * @package 	bS5 Preloader
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Don't allow direct access

?>

<div id="preloader" class="align-items-center justify-content-center position-fixed top-0 end-0 bottom-0 start-0">
    <div id="status" class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>