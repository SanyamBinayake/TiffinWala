# 🥗 Tiffinwala - Mess Registration & Food Delivery System

Tiffinwala is a full-stack web application designed to streamline the registration and listing of mess (tiffin) services across multiple cities. It features two panels: **Admin Panel** to manage mess data, and **User Website** to allow users to explore and contact mess providers.

## 📁 Project Structure

```
TIFFINWALA/
├── Admin/               # Admin dashboard for managing mess data
│   ├── chandwad.php     # View mess data for Chandwad
│   ├── Nashik.php       # View mess data for Nashik
│   ├── Pune.php         # View mess data for Pune
│   ├── contactdb.php    # Manage mess contacts
│   ├── login.php        # Admin login page
│   ├── logout.php       # Logout functionality
│   ├── connection.php   # DB connection file
│   ├── css/             # Admin stylesheets
│   └── js/              # Admin JavaScript files
├── Userweb/             # Public-facing website for users
│   ├── index.html       # Homepage
│   ├── about.html       # About page
│   ├── contact.html     # Contact form page
│   ├── service.html     # Services offered
│   ├── signup form1.php # Mess registration form
│   ├── send-email.php   # Email processing for contact form
│   ├── css/             # User site styles
│   └── js/              # User site JavaScript
```

## 🌐 Features

### 👤 User Side
- Explore mess services city-wise (Chandwad, Nashik, Pune)
- View tiffin plans, types (veg/non-veg), quantity, and contact details
- Submit contact or inquiry form
- Register a new mess via a sign-up form

### 🔐 Admin Side
- Secure login page (`login.php`)
- Dashboard showing mess records for each city
- View and manage mess registrations and contact entries
- Simple logout mechanism

## ⚙️ Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL (via XAMPP)
- **Libraries:** jQuery, Lightbox, Flexslider, Vector Maps, FontAwesome

## 💾 Database Configuration

Update your database credentials in the file:
```php
// TIFFINWALA/Admin/connection.php
mysqli_connect("localhost", "root", "", "Admine_db");
```

Tables used:
- `tbl_chandwad`
- `tbl_nashik`
- `tbl_pune`
- `contact_db`

## 🚀 How to Run

1. Start **XAMPP** and launch **Apache** & **MySQL**.
2. Place the `TIFFINWALA` folder inside the `htdocs` directory.
3. Create the MySQL database `Admine_db` and import the relevant tables.
4. Visit `http://localhost/TIFFINWALA/Userweb/index.html` for the user site.
5. Visit `http://localhost/TIFFINWALA/Admin/index.php` for the admin panel.

## 🔐 Admin Login Details

> **Username:** tiffinwala@gmail.com  
> **Password:** 1111

*(Hardcoded in `index.php` → please change in production)*

## 📬 Contact

Developed by **Sanyam Binayake**  
📧 Email: [sanyambinayake@example.com](mailto:sanyambinayake@example.com)

## 📄 License

This project is licensed for educational use. Modify and enhance as needed!


Place the TIFFINWALA folder inside the htdocs directory.

Create the MySQL database Admine_db and import the relevant tables.

Visit http://localhost/TIFFINWALA/Userweb/index.html for the user site.

Visit http://localhost/TIFFINWALA/Admin/index.php for the admin panel.

🔐 Admin Login Details
Username: tiffinwala@gmail.com
Password: 1111

(Hardcoded in index.php → please change in production)

📬 Contact
Developed by Sanyam Binayake
