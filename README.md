# Secure Application

Secure Application built with PHP, designed to handle Create, Read, Update, and Delete operations securely. The application incorporates modern security practices to protect against common vulnerabilities.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
- [Security Features](#security-features)
  

## Features

- User Authentication and Authorization
- Secure CRUD operations for managing records
- Input validation and sanitization
- Role-based access control (RBAC)
- SQL Injection and CSRF protection
- Encrypted password storage using bcrypt
- Detailed error logging

## Technologies Used

- **Backend**: PHP 
- **Frontend**: HTML, CSS, JavaScript 
- **Database**: MySQL 
- **Authentication**: Sessions, JSON Web Tokens (JWT)
- **Security Libraries**: PHP built-in functions, bcrypt

## Getting Started

### Prerequisites

- PHP (version 8.0 or higher)
- Composer (PHP dependency manager)
- Web server (Apache/Nginx)
- MySQL database

## Security Features

1. Authentication and Authorization: Secure login and user permission.
2. Data Encryption: Sensitive data like passwords are encrypted using bcrypt.
3. Input Validation: Prevents SQL Injection and XSS attacks.
4. CSRF Protection: Tokens are used to prevent cross-site request forgery.
5. API Rate Limiting: Limits the number of API calls to prevent abuse.
6. Audit Logging: Records changes and sensitive operations for monitoring.
7. Error Handling: Sanitized error responses to avoid revealing internal details.
