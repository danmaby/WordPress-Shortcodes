<?php

/**
 * Retrieves the value of a URL parameter and returns it.
 *
 * @param array $atts {
 *     An associative array of attributes.
 *
 *     @type string $param The URL parameter to retrieve.
 *     @type string $default The default value to return if the parameter is not found.
 * }
 *
 * @return string The value of the specified URL parameter, or the default value if the parameter is not found.
 */
function get_url_parameter_shortcode($atts)
{
  // Extract the attributes passed to the shortcode
  $atts = shortcode_atts(
    [
      "param" => "", // The URL parameter to retrieve
      "default" => "", // Default value if the parameter is not found
    ],
    $atts
  );

  // Get the parameter value from the URL
  $param_value = isset($_GET[$atts["param"]])
    ? sanitize_text_field($_GET[$atts["param"]])
    : $atts["default"];

  // Return the parameter value
  return $param_value;
}
add_shortcode("get_url_param", "get_url_parameter_shortcode");
