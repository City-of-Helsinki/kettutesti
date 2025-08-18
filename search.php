<?php
l( 'Running ' . __FILE__ );
global $site;

get_header();
$site->preparePageContent( 'search.hbs' );
get_footer();
