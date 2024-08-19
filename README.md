# WordPress Shortcodes

This repository contains a collection of useful WordPress shortcodes that can be easily added to your theme or custom plugin. Each shortcode is designed to address common needs in WordPress development.

## Table of Contents

1. [Installation](#installation)
2. [Available Shortcodes](#available-shortcodes)
   - [Copyright Year Shortcode](#copyright-year-shortcode)
   - [URL Parameter Shortcode](#url-parameter-shortcode)
3. [Contributing](#contributing)
4. [License](#license)

## Installation

To use these shortcodes in your WordPress site, you can do the following:

1. Clone this repository:

   ```bash
   git clone https://github.com/danmaby/WordPress-Shortcodes.git
   ```

2. Include the `functions.php` file in your theme's `functions.php` or within a custom plugin:

   ```php
   require_once "path/to/wordpress-shortcodes/functions.php";
   ```

3. Alternatively, copy specific shortcode files from the `shortcodes/` directory into your theme or plugin.

## Available Shortcodes

### Copyright Year Shortcode

**File:** `shortcodes/copyright-year.php`

This shortcode displays the copyright symbol (©), the starting year, and the current year.

**Usage:**

```php
[copyright_years start_year="2023"]
```

**Example Output:**

- If the current year is 2024 and the start year is 2023, the output will be: `© 2023–2024`.
- If the current year is the same as the start year, it will display: `© 2024`.

**Attributes:**

- `start_year`: The year when your site was launched. Default is `2020`.

### URL Parameter Shortcode

**File:** `shortcodes/url-parameter.php`

This shortcode retrieves a specific parameter from the URL and displays its value in your WordPress content. It's useful for creating dynamic content based on query string parameters.

**Usage:**

```php
[get_url_param param="your_parameter" default="Default Value"]
```

**Example Output:**

- If the URL is `https://example.com/page/?name=Dan` and you use `[get_url_param param="name" default="Guest"]`, the output will be: `Dan`.
- If the `name` parameter is not present in the URL, the output will be: `Guest`.

**Attributes:**

- `param`: The name of the URL parameter to retrieve. Required.
- `default`: The default value to display if the parameter is not found in the URL. Optional, default is an empty string.

## Contributing

Contributions are welcome! If you have a shortcode that you think would be useful to others, feel free to open a pull request.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-shortcode-name`).
3. Add your shortcode in the `shortcodes/` directory.
4. Update the `README.md` with details about your shortcode.
5. Submit a pull request.

## License

This project is licensed under the GPL-3.0 License - see the [LICENSE](LICENSE) file for details.
