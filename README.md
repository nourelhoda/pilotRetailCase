
# Pre-requirements
- composer
- php version ^7.4
- mySql or simply having a local serever like Xammp 

# Deployment Instructions
- clone project
- create database with the name mentioned in .env
- run php artisan migrate
- php artisan serve 

## Notes
- I have been using laravel 8 and local serevr Xammp
- I removed .env file from .gitignore to allow you running the application
- you might need to run composer dump-autoload 
