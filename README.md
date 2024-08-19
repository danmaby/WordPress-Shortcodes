# WordPress Shortcodes

This repository contains a collection of useful WordPress shortcodes that can be easily added to your theme or custom plugin. Each shortcode is designed to address common needs in WordPress development.

## Table of Contents

1. [Installation](#installation)
2. [Available Shortcodes](#available-shortcodes)
   - [Copyright Year Shortcode](#copyright-year-shortcode)
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

## Contributing

Contributions are welcome! If you have a shortcode that you think would be useful to others, feel free to open a pull request.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-shortcode-name`).
3. Add your shortcode in the `shortcodes/` directory.
4. Update the `README.md` with details about your shortcode.
5. Submit a pull request.

## License

This project is licensed under the GPL-3.0 License - see the [LICENSE](LICENSE) file for details.
