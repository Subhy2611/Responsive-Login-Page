# Responsive-Login-Page
It is a simple and secure website login system built using HTML, CSS, PHP, and MySQL. It includes functionalities for user registration, login, and session management. The project serves as an introductory example for web development concepts and practices such as form handling, user authentication, and database interactions.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Login System</title>
</head>
<body>
    <h1>Beginner Login System</h1>
    <p>This project is a simple login system created using HTML, CSS, PHP, and MySQL. It is designed as a beginner-level application to demonstrate fundamental web development skills and concepts.</p>
    
    <h2>Features</h2>
    <ul>
        <li><strong>User Registration:</strong> Allows new users to register by providing their first name, last name, email, and password. The password is securely hashed before being stored in the database.</li>
        <li><strong>User Login:</strong> Authenticates users using their email and password. It starts a session for successfully authenticated users.</li>
        <li><strong>Session Management:</strong> Maintains user sessions across pages, ensuring that only authenticated users can access protected areas of the site.</li>
        <li><strong>Password Encryption:</strong> Uses PHP's <code>password_hash()</code> and <code>password_verify()</code> functions to securely handle user passwords.</li>
    </ul>
    
    <h2>Technologies Used</h2>
    <ul>
        <li><strong>HTML:</strong> Provides the structure for the web pages.</li>
        <li><strong>CSS:</strong> Adds styling to the web pages for a better user experience.</li>
        <li><strong>PHP:</strong> Handles the server-side logic for user registration and login.</li>
        <li><strong>MySQL:</strong> Stores user information in a secure manner.</li>
        <li><strong>phpMyAdmin:</strong> Manages the MySQL database.</li>
    </ul>
    
    <h2>Prerequisites</h2>
    <ul>
        <li><strong>Web Server:</strong> Apache or similar (WAMP, XAMPP, etc.).</li>
        <li><strong>PHP:</strong> Version 7.0 or above.</li>
        <li><strong>MySQL:</strong> Version 5.6 or above.</li>
        <li><strong>phpMyAdmin:</strong> For easy database management.</li>
    </ul>
</body>
</html>
