# Personal CRUD System

A simple and efficient CRUD (Create, Read, Update, Delete) application for managing personal information with image upload functionality.

## 📋 Features

- ✨ Create, Read, Update, and Delete user records
- 📸 Image upload with validation (JPG, PNG)
- 🔒 File size limit (5MB max)
- 📱 Responsive design with AdminLTE
- 🎨 Modern UI with SweetAlert2 notifications

## 🛠️ Technologies

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white) ![AdminLTE](https://img.shields.io/badge/AdminLTE-3C8DBC?style=for-the-badge&logo=adminlte&logoColor=white)

## 📦 Requirements

- PHP 8.0 or higher
- MySQL 5.7 or higher / MariaDB 10.4 or higher
- Apache/Nginx web server
- XAMPP/WAMP/LAMP (recommended for local development)

## 🚀 Installation

1. Clone the repository
```bash
git clone <repository-url>
cd personal-crud
```

2. Import the database
   - Open phpMyAdmin
   - Create a new database named `personal_crud`
   - Import the SQL file from `database/personal_crud.sql`

3. Configure database connection
   - Open `config/conn.php`
   - Update database credentials if needed:
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "personal_crud";
```

4. Create upload directory
   - Ensure the `Upload/` directory exists and has write permissions
```bash
mkdir Upload
chmod 755 Upload
```

5. Move project to XAMPP
   - Copy the entire project folder to XAMPP's `htdocs` directory
   - Default path: `C:\xampp\htdocs\`
   - Your project should be at: `C:\xampp\htdocs\personal-crud\`

6. Start XAMPP services
   - Open XAMPP Control Panel
   - Start Apache and MySQL services
   - Access via browser: `http://localhost/personal-crud/`

## 📁 Project Structure

```
personal-crud/
├── admin/
│   └── includes/          # Header, footer, sidebar components
├── config/
│   └── conn.php          # Database configuration
├── database/
│   └── personal_crud.sql # Database schema and sample data
├── dist/                 # CSS, JS, and assets
├── Upload/               # User uploaded images
├── index.php             # Dashboard page
├── table.php             # User list page
├── add_user.php          # Add user logic
├── edit_layout.php       # Edit user form
├── update_db.php         # Update user logic
├── delete_layout.php     # Delete confirmation
└── delete_db.php         # Delete user logic
```

## 💻 Usage

### Adding a User
1. Navigate to the user management page
2. Click "Add New User"
3. Fill in the form with user details
4. Upload a profile image (optional, max 5MB, JPG/PNG only)
5. Click "Submit"

### Editing a User
1. Click the "Edit" button next to a user record
2. Modify the desired fields
3. Upload a new image if needed
4. Click "Update"

### Deleting a User
1. Click the "Delete" button next to a user record
2. Confirm the deletion
3. The user and their associated image will be removed

## 🗃️ Database Schema

### Users Table
| Column      | Type         | Description                    |
|-------------|--------------|--------------------------------|
| id          | INT(11)      | Primary key, auto-increment    |
| f_name      | VARCHAR(100) | First name                     |
| l_name      | VARCHAR(100) | Last name                      |
| age         | INT(11)      | User age                       |
| phone       | VARCHAR(10)  | Phone number                   |
| address     | TEXT         | Address                        |
| country     | VARCHAR(100) | Country                        |
| img         | VARCHAR(255) | Image file path                |
| time_create | TIMESTAMP    | Record creation timestamp      |

## 🔐 Security Features

- PDO prepared statements to prevent SQL injection
- File type validation (only JPG and PNG)
- File size validation (max 5MB)
- Unique filename generation to prevent overwrites

## 🎨 UI Components

- **AdminLTE 3** - Admin dashboard template
- **SweetAlert2** - Beautiful alert notifications
- **Bootstrap** - Responsive grid system
- **Font Awesome** - Icon library

## Live Demo

https://github.com/user-attachments/assets/15f50ca4-80f6-49be-a960-61c162f565d5
