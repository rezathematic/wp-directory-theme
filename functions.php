<?php

/**
 * Theme Functions
 * 
 * DO NOT MODIFY THIS FILE
 * 
 */

// Constants
define('RB_VERSION', '1.0.0');
define('RB_DB_VERSION', '111');

// Reflects the WordPress version in the .testenv file.
define('RB_WP_COMPATIBLE_VERSION', '4.8');

define('APP_POST_TYPE', 'ad_listing');
define('APP_TAX_CAT', 'ad_cat');
define('APP_TAX_TAG', 'ad_tag');

define('RB_ITEM_LISTING', 'ad-listing');
define('RB_ITEM_MEMBERSHIP', 'membership-pack');

define('RB_PACKAGE_LISTING_PTYPE', 'package-listing');
define('RB_PACKAGE_MEMBERSHIP_PTYPE', 'package-membership');

define('RB_POST_STATUS_EXPIRED', 'expired');

define('APP_TD', 'serpdirectory');

if (version_compare($wp_version, RB_WP_COMPATIBLE_VERSION, '<')) {
    // TODO: Display admin notice
}


if (!isset($content_width)) {
    $content_width = 500;
}
