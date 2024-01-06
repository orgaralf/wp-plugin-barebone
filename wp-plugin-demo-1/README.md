# WPpluginDemo1

WPpluginDemo1 is a WordPress plugin that provides a unique interactive feature for any WordPress website. Developed in PHP8 and enhanced with HTML, CSS3, and JavaScript, this plugin places a floating Pi-Sign on all pages of the site at the lower right corner. Upon clicking the Pi-Sign, users will be greeted with a fun JavaScript alert message.

## Features

- A floating Pi-Sign on all pages in the lower right corner.
- Clickable Pi-Sign that displays a JavaScript alert with the message "Hack the planet."

## Installation

1. Download the plugin zip file.
2. Log in to your WordPress dashboard.
3. Navigate to Plugins > Add New.
4. Click on the 'Upload Plugin' button at the top of the page.
5. Select the downloaded plugin zip file and click 'Install Now'.
6. After the installation is complete, click 'Activate Plugin'.

Upon activation, the Pi-Sign will automatically be visible on your site.

## Usage

Once the plugin is activated, visitors to your website will see the Pi-Sign and can interact with it to trigger the alert.

### User Stories

- As a website visitor, I will see a floating Pi-Sign in the fixed position of the lower right corner on all pages of the WordPress site after the plugin is activated.
- As a website visitor, when I click on the Pi-Sign, I will receive a standard JavaScript alert with the message "Hack the planet."

## Technologies Used

- PHP8
- WordPress
- HTML
- CSS3
- JavaScript

## Plugin Structure

- `wp-plugin-demo-1/wp-plugin-demo-1.php`: The main plugin file that initializes the plugin, enqueues the styles and scripts, and adds the Pi-Sign to the WordPress footer.
- `wp-plugin-demo-1/assets/css/style.css`: The CSS file containing the styles for the Pi-Sign.
- `wp-plugin-demo-1/assets/js/pi-sign.js`: The JavaScript file handling the click event on the Pi-Sign.

## Contributing

If you would like to contribute to the development of WPpluginDemo1, please follow the standard GitHub pull request process:

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/myNewFeature`).
3. Commit your changes (`git commit -am 'Add some feature'`).
4. Push to the branch (`git push origin feature/myNewFeature`).
5. Create a new Pull Request.

## License

WPpluginDemo1 is released under the GPL2 license. See the LICENSE file for more details.

## Author

- [Your Name](http://example.com) // INPUT_REQUIRED {Your name goes here}
- [Your Author URI](http://example.com) // INPUT_REQUIRED {Your personal or company website URI goes here}

## Acknowledgments

- Thanks to everyone who has contributed to the project!