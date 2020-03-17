# Laravel Simple Contact Form

## Installation Instruction

- Run `composer require laravel-studio/simple-contact-form`
- Then run `php artisan vendor:publish`
- Change the __"send_email_to"__ value inside the __'config/contact.php'__ file
- "php artisan migrate"
- visit __"/contact"__ route in your browser to see the contact us page

### Minimum Dependencies

- Minimum Laravel Version: 7.x
- Minimum PHP Version: 7.2.x

### Customize Options

- After publishing the vendor you can remove the _country_, _phone_ field
- These fields are optional
- In this package all the styles are being written in simple internal css. So no dependency of any other css library
