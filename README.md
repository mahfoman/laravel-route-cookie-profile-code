## Laravel route cookie profile code

This repo is about returning profile data and setting cookie data for a user in laravel  setting up routes and controller with parameter

## Following steps are implemented

Step 01: routes/web.php
Reference to ProfileController.php added with index() method inside Route::get() method with id parameter

Step 02: ProfileController.php setup with index() method
- Associative array with $id $name and $age
- Cookie variables setup
- Returning response with json data and setting cookie data for a domain having specific expired time, secure flag and HTTPOnly

