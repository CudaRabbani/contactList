<h2 align="center">Contact List</h2>

## About
This is a very simple RESTful API to retrieve/create/update/delete contact information. There is no user authentication
now to perform those operations.

## Setup
To setup the repo please follow the following steps:
1. Download the repo into your local directory from https://github.com/CudaRabbani/contactList.git
2. From downloaded project directory open a terminal and enter the following commands:
    - **cd contactList**
    - **composer install**
3. Configure your .env file in the contactList directory for necessary database access
   - DB_CONNECTION=mysql
   - DB_HOST=localhost
   - DB_PORT=3306
   - DB_DATABASE=ContactList (**change this with your database name**)
   - DB_USERNAME=user (**Change it to your database user name**)
   - DB_PASSWORD=password (**Change it to your database password**)
4. From the terminal enter the following commands:
   - **php artisan migrate**
   - **php artisan db:seed --class=ContactsTableSeeder**
5. Run the app by typing into terminal: **php artisan serve**
Please note the URL in the terminal for Laravel server (i.e: http://127.0.0.1:8000)

We should be ready to test our api now.


## App description
Using postman (https://www.postman.com/) we can test the api as follows

1. GET http://127.0.0.1:8000/api/contacts
    - this will return all the contacts present in the database
2. GET http://127.0.0.1:8000/api/contacts/1
    - this will return the contact with the id 1
3. POST http://127.0.0.1:8000/api/contacts
   - send the parameters: 
        - first_name,
        - last_name,
        - company_name (in postman  Body as x-www-form-urlencoded)
    - this will create a new contact in the database
4. PUT http://127.0.0.1:8000/api/contacts/1
    - send the following parameters to update information:
        - first_name,
        - last_name,
        - company_name (in postman  Body as x-www-form-urlencoded)
    - this will update an existing contact in the database with the id 1
5. DELETE http://127.0.0.1:8000/api/contacts/1
    - this will return the contact with id 1 and delete it from the database
 
## Features that can be added
- User Authentication
  - Can be achieved by laravel's built in authentication service.
  - After user registration we can use JWT for the user authentication.
  - We can also use OAuth for the user authentication.
  - By adding authentication we can guard each routes and also can allow individual users for individual operations.  
- Input Data Validation
    - All the input need to be filtered
    - We can check for empty string or invalid characters in the input field

