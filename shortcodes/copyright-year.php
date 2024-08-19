<?php

// Register the shortcode
function display_copyright_years($atts)
{
  /**
   * Generates a copyright string based on the provided start year and the current year.
   *
   * @param array $atts
   **/
  // Extract attributes and set a default starting year
  $atts = shortcode_atts(
    [
      "start_year" => "2020", // Default start year if not provided
    ],
    $atts
  );

  // Get the current year
  $current_year = date("Y");

  // Build the copyright string
  $start_year = intval($atts["start_year"]);
  if ($start_year == $current_year) {
    $copyright = "© $current_year";
  } else {
    $copyright = "© $start_year–$current_year";
  }

  // Return the copyright string
  return $copyright;
}
add_shortcode("copyright_years", "display_copyright_years");
