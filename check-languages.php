<?php
/**
 * Temporary debug script to check languages configuration
 * Usage: Add to functions.php temporarily or run via WordPress admin
 */

// Get raw value from database
$raw_value = get_theme_mod( 'saintsmedia_languages', 'NOT_SET' );

echo "<!-- LANGUAGES DEBUG START -->\n";
echo "<!-- Raw theme_mod value: " . esc_html( var_export( $raw_value, true ) ) . " -->\n";

// Try to decode
if ( $raw_value !== 'NOT_SET' && ! empty( $raw_value ) ) {
    $decoded = json_decode( $raw_value, true );
    echo "<!-- Decoded JSON: " . esc_html( var_export( $decoded, true ) ) . " -->\n";
}

// Get languages via helper function
if ( function_exists( 'saintsmedia_get_languages' ) ) {
    $languages = saintsmedia_get_languages();
    echo "<!-- saintsmedia_get_languages(): " . esc_html( var_export( $languages, true ) ) . " -->\n";
}

// Get current language
if ( function_exists( 'saintsmedia_get_current_language' ) ) {
    $current = saintsmedia_get_current_language();
    echo "<!-- Current language: " . esc_html( var_export( $current, true ) ) . " -->\n";
}

// Get menu location
if ( function_exists( 'saintsmedia_get_current_menu_location' ) ) {
    $location = saintsmedia_get_current_menu_location();
    echo "<!-- Menu location: " . esc_html( var_export( $location, true ) ) . " -->\n";
}

// Get all locations
$all_locations = get_nav_menu_locations();
echo "<!-- All nav menu locations: " . esc_html( var_export( $all_locations, true ) ) . " -->\n";

// Get registered locations
if ( function_exists( 'saintsmedia_get_registered_menu_locations' ) ) {
    $registered = saintsmedia_get_registered_menu_locations();
    echo "<!-- Registered locations: " . esc_html( var_export( $registered, true ) ) . " -->\n";
}

echo "<!-- LANGUAGES DEBUG END -->\n";
