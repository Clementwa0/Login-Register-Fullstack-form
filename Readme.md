# User Authentication System

A simple login and registration system built with PHP, JavaScript, and SQL.

## Database Structure

The system uses two main tables:

### Login Table
- `id` (Primary Key, Auto Increment)
- `username` (VARCHAR, 50 characters)
- `password` (VARCHAR, 50 characters)

### Register Table
- `id` (Primary Key, Auto Increment)
- `username` (VARCHAR, 50 characters)
- `email` (VARCHAR, 50 characters)
- `password` (VARCHAR, 50 characters)
- `role` (VARCHAR, 50 characters)

## Features

- User registration
- Login authentication
- Role-based access control
- Session management

## Technologies Used

- PHP
- JavaScript
- SQL (MySQL/MariaDB)
- HTML/CSS

## Getting Started

### Prerequisites

- Web server (Apache/XAMPP/WAMP)
- PHP 7.0 or higher
- MySQL/MariaDB database
- Web browser

### Installation

1. Clone or download the project files to your web server's directory (e.g., `htdocs` for XAMPP)

2. Set up the database:
   - Create a new database
   - Import the `logDB.sql` file to create the required tables

3. Configure database connection:
   - Update the database connection details in your PHP configuration file

4. Access the application:
   - Open your web browser
   - Navigate to the project URL (e.g., `http://localhost/your-project-folder`)

## Security Considerations

- Implement password hashing before storing in the database
- Use prepared statements for SQL queries to prevent SQL injection
- Validate and sanitize all user inputs
- Implement proper session management
- Set up secure password policies

## Project Structure

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details


