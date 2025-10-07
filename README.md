# My PHP App

## Running Tests Locally

After cloning the repository and installing dependencies with:

```bash
composer install

You can run the tests locally using PHPUnit:

# Option 1: Specify configuration file explicitly
./vendor/bin/phpunit --configuration phpunit.xml

# Option 2: Use default PHPUnit behavior (if phpunit.xml is present in project root)
./vendor/bin/phpunit
