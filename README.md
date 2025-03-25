# 📚 Library Management System (LMS)

![GitHub](https://img.shields.io/badge/Status-Active-success)
![GitHub](https://img.shields.io/badge/License-MIT-blue)
![GitHub](https://img.shields.io/badge/Backend-MySQL-orange)
![GitHub](https://img.shields.io/badge/Frontend-Web-yellowgreen)

A modern **web-based Library Management System** designed to automate library operations, including book cataloging, user management, and borrowing processes.

## 🌟 Features

### For Public Users
- 🔍 **Book Search** - Browse books without login
- 📄 **View Availability** - Check real-time book status
- 📍 **Library Location** - Find physical book locations

### For Registered Users
- 🆔 **User Registration** - Get a digital library card
- ⏰ **Feed backs on the system** - Users can give feed back for the system to improve

### For Librarians
- 👩‍💼 **Admin Dashboard** - Manage books & users
- 📊 **Transaction Tracking** - Issue/return books digitally
- 🔔 **Overdue Alerts** - Automatic reminders
- 📈 **Reporting** - Generate library statistics

## 🛠️ Technical Stack

### Frontend
- HTML5, CSS3, JavaScript
- Bootstrap (for responsive design)

### Backend
- PHP 
- MySQL Database

### Additional Tools
- Git for version control

## 🗃️ Database Schema

| Table | Description |
|-------|-------------|
| `users` | Stores member information |
| `books` | Contains book catalog |
| `librarians` | Librarian access control |
| `transactions` | Borrow/return records |
| `messages` | User inquiries |

## 🖥️ System Pages

1. **Homepage** - Library overview & search
2. **Search Page** - Find books (no login)
3. **User Portal** - Member dashboard
4. **Librarian Dashboard** - Management console
5. **Book Issue/Return** - Transaction processing
6. **Contact Page** - User support

## 🚀 Getting Started

### Prerequisites
- Web server (Apache/Nginx)
- MySQL database
- PHP/Node.js/Python runtime

### Installation
1. Clone the repository:
   ```bash
   git clone git@github.com:PrimeRin/book-hive.git
   ```

2. Import database:
```bash
mysql -u root -p book_hive_db < database/init_db.sql
```

3. Run the Application
Using PHP Built-in Server:
```bash
php -S localhost:8000
```

