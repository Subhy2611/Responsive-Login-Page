# Beginner Login System

This project is a simple login system created using HTML, CSS, PHP, and MySQL. It is designed as a beginner-level application to demonstrate fundamental web development skills and concepts.

## Features

- **User Registration:** Allows new users to register by providing their first name, last name, email, and password. The password is securely hashed before being stored in the database.
- **User Login:** Authenticates users using their email and password. It starts a session for successfully authenticated users.
- **Session Management:** Maintains user sessions across pages, ensuring that only authenticated users can access protected areas of the site.
- **Password Encryption:** Uses PHP's `password_hash()` and `password_verify()` functions to securely handle user passwords.

## Technologies Used

- **HTML:** Provides the structure for the web pages.
- **CSS:** Adds styling to the web pages for a better user experience.
- **PHP:** Handles the server-side logic for user registration and login.
- **MySQL:** Stores user information in a secure manner.
- **phpMyAdmin:** Manages the MySQL database.

## Prerequisites

- **Web Server:** Apache or similar (WAMP, XAMPP, etc.).
- **PHP:** Version 7.0 or above.
- **MySQL:** Version 5.6 or above.
- **phpMyAdmin:** For easy database management.
