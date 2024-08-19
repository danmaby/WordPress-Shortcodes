<?php
/**
 * Automatically include all shortcode files from the shortcodes directory.
 */

// Define the path to the shortcodes directory
$shortcodes_dir = __DIR__ . "/shortcodes/";

// Check if the directory exists
if (is_dir($shortcodes_dir)) {
  // Get all PHP files in the shortcodes directory
  foreach (glob($shortcodes_dir . "*.php") as $file) {
    // Include each shortcode file
    require_once $file;
  }
} else {
  // If the directory does not exist, throw an error or log it
  error_log("Shortcodes directory not found: " . $shortcodes_dir);
}
