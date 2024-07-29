# Kleppit

2nd Year Web Programming Project, that is a Reddit clone using dark mode.


# Installation

To run this project you need a web server with PHP and MySQL/MariaDB support. We recommend using [XAMPP](https://www.apachefriends.org/index.html) for Windows and [MAMP](https://www.mamp.info/en/) for Mac. While creating this project we are using XAMPP Version 8.1.12, PHP v8.1.12 and MariaDB v10.4.27.

⚠️ Your webserver must file upload support. 
For Apache (on XAMPP) you will need to enable the `file_uploads` directive in the `php.ini` file. You can find the file in the `php` folder of your XAMPP installation. For example, in Windows it is by default located in `C:\xampp\php\php.ini`. (You will need to restart the Apache server after making changes to the `php.ini` file.)

### Instructions: 
- Copy `databasecon/dbcon.php.example` to `databasecon/dbcon.php` and edit the file to match your database credentials.
- On your database, run the SQL script `databasecon/setup.sql` to create the database and tables. Alternatively, you can use the `databasecon/setup_with_test_data.sql` script to create the database and tables with test data.

# Using Kleppit

You can check our User Manual for more information on how to use the site. (usermanual.pdf)

If you are using the test data, you can login with the following credentials:
- Username: `NotAKleppitUser` or Email: `nota@kleppit.inc`
- Password: `KleppitIsAwesome2023!`

# Credits

We are using these libraries and frameworks:
- [Tailwind CSS](https://tailwindcss.com/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [Heroicons](https://heroicons.com/)

# Contributions

This project was a collaborative effort as a student project.
Created by: 
- Antonios Niotis
- [Christos Kanellopoulos](https://github.com/Ckanel/)
- [Aurora Takemi](https://github.com/alepouna)

My contributions to the project include: 
- Frontend Development: I was responsible for the development of the front end using tailwind from the start, basing my design to [Reddit's](https://reddit.com/) dark mode.
- Backend Assistance: I assisted Chris and Aurora with the development of the PHP backend, resolving any bugs they encountered
  
