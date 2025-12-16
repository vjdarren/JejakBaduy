# JejakBaduy

![PHP](https://img.shields.io/badge/PHP-7.4%2B-8892BF?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

A full-stack web platform documenting and celebrating the **Baduy people** — an indigenous community living in the Kendeng mountains of Banten, West Java, Indonesia. The site serves as a digital cultural archive and interactive showcase, complete with a custom CMS for content management, a media gallery, a contact system, and an augmented reality workshop.

> *"Jejak"* means *"footsteps"* in Indonesian — this project traces the footsteps and living traditions of the Baduy community.

---

## Features

- **Content Management System (CMS)** — admin panel for managing pages, gallery items, and blog posts via TinyMCE rich-text editor
- **Image Gallery** — 34+ high-resolution photos of the Baduy people and their environment
- **Blog / Articles** — dynamic article section managed through the CMS
- **Contact Form** — visitor form with database storage and admin review panel
- **Testimonials** — community and visitor testimonials section
- **3D / AR Workshop** — interactive augmented reality experience using GLTF models and MindAR
- **Admin Dashboard** — secure login-protected panel for reviewing form submissions
- **Responsive Design** — mobile-friendly layout built on Bootstrap 5 and Material Design Bootstrap (MDB)

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 7.4+, PDO, MySQLi |
| Database | MySQL |
| Frontend | HTML5, CSS3, JavaScript |
| UI Framework | Bootstrap 5, Material Design Bootstrap (MDB) |
| Rich Text Editor | TinyMCE |
| Email | PhpMailer |
| Build Tools | Gulp (SCSS compilation, CSS/JS minification) |
| 3D / AR | GLTF models, MindAR.js |
| Package Manager | Composer, npm |

---

## Screenshots

> Add screenshots of the homepage, gallery, CMS dashboard, and AR workshop here.

---

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer
- A local server (XAMPP, WAMP, Laragon, or similar)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/vjdarren/JejakBaduy.git
   cd JejakBaduy
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Set up the database**
   - Create a MySQL database (e.g., `JejakBaduy`)
   - Import the schema — see `database/` folder or contact the author for the SQL dump

4. **Configure database credentials**

   Update the following files with your database details:

   **`function/database.php`** (used by the main site and admin panel):
   ```php
   $host = "YOUR_DB_HOST";
   $database = "YOUR_DB_NAME";
   $username = "YOUR_DB_USERNAME";
   $password = "YOUR_DB_PASSWORD";
   ```

   **`cms/includes/database.php`** (used by the CMS):
   ```php
   $connect = mysqli_connect('YOUR_DB_HOST', 'YOUR_DB_USERNAME', 'YOUR_DB_PASSWORD', 'YOUR_DB_NAME');
   ```

   **`contact.php`** and **`admin/view_forms.php`** — update the `new mysqli(...)` calls with the same credentials.

5. **Configure the contact form mailer** (optional)

   Edit the SMTP settings in the PhpMailer configuration if you want the contact form to send email notifications.

6. **Serve the project**

   Place the project folder in your web server's root (e.g., `htdocs/` for XAMPP) and open it in a browser.

### Admin Access

- **CMS Panel:** `/cms/` — manage content, gallery, and blog posts
- **Admin Panel:** `/admin/` — review contact form submissions
- Default credentials are stored in the `tb_user` database table. Add a user record to log in.

---

## Project Structure

```
JejakBaduy/
├── admin/          # Admin dashboard (form submissions, login)
├── cms/            # Content Management System
│   ├── includes/   # DB connection, shared PHP includes
│   └── js/         # TinyMCE and CMS JS
├── css/            # Compiled stylesheets
├── function/       # Shared PHP utilities (DB connection)
├── images/         # Gallery images and site assets
├── js/             # Frontend JavaScript
├── scss/           # SCSS source files
├── workshop/       # 3D AR workshop (GLTF models, MindAR)
├── gulpfile.js     # Build pipeline
└── index.php       # Main entry point
```

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Author

**Darren Sebastian**
- GitHub: [@vjdarren](https://github.com/vjdarren)
