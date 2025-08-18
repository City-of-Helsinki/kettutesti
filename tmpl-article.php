<?php
/*
 * Template name: Article page
 */
l( 'Running ' . __FILE__ );
get_header();

global $site;
$site->preparePageContent( 'single.hbs' );
get_footer();
