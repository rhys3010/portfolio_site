# Portfolio Website Template

## Synopsis
A Portfolio Website template for individuals to use to showcase their work and provide a brief description of themselves.

## Installing
* In the project's root directory run `npm update` this will install all the required node modules
* In the project's root directory run `php composer.phar install` this will install all the required php dependencies
* In the project's root directory run `gulp vendor` this will place all the node modules and php dependencies in the /app/vendor directory.
* In the /php/mail.php file, enter the necessary information into the email variables (will require gmail account + password)

## Deployment
* In the project's root directory run `gulp dist` this will populate the /dist/ directory with all the needed content to host the website, simply drop this into your web root.
