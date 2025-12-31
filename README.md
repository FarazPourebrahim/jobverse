# JobVerse

JobVerse is a full-stack job board and recruitment platform built with **Laravel** and **modern frontend tooling**, designed to connect **job seekers** and **employers** through a clean, role-based experience. The platform supports job posting, applications, company profiles, applicant dashboards, and bookmark functionality.

This project demonstrates practical full-stack development skills, including MVC architecture, role-based access control, RESTful controllers, and modern asset bundling.

---

## Features

### Applicants
- Browse and search job listings
- Apply to jobs
- Bookmark jobs
- View application history
- Manage profile information

### Employers
- Create and manage company profiles
- Post, edit, and delete job listings
- View applicants per job
- Employer dashboard with job statistics

### Platform
- Role-based authentication (Applicants & Employers)
- Dashboard views for different user roles
- Clean MVC architecture
- Responsive UI with Tailwind CSS
- Modern frontend build pipeline using Vite

---

## Tech Stack

### Backend
- Laravel (PHP)
- MVC architecture
- Eloquent ORM
- Blade templating

### Frontend
- Tailwind CSS
- Vite
- PostCSS

### Database
- MySQL / MariaDB (configurable)

### Tooling
- Composer
- NPM
- Laravel Artisan

---

## Project Structure (Simplified)

```
app/
 ├── Http/
 │   ├── Controllers/
 │   │   ├── Applicant/
 │   │   ├── Employer/
 │   │   ├── JobController.php
 │   │   └── DashboardController.php
 │   └── Middleware/
 ├── Models/
resources/
 ├── views/
 ├── css/
 └── js/
routes/
 ├── web.php
 └── auth.php
database/
 ├── migrations/
 └── seeders/
```

---

## Installation & Setup

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL or compatible database

### Steps

```bash
git clone https://github.com/your-username/jobverse.git
cd jobverse

composer install
npm install

cp .env.example .env
php artisan key:generate
```

Configure database credentials in `.env`:

```env
DB_DATABASE=jobverse
DB_USERNAME=root
DB_PASSWORD=secret
```

Run migrations and start the app:

```bash
php artisan migrate
npm run dev
php artisan serve
```

---

## Available Scripts

```bash
npm run dev
npm run build
php artisan serve
```

---

## Authentication & Roles

- Users are assigned roles (Applicant or Employer)
- Access control is enforced via controllers and middleware
- Separate dashboards and features per role

---

## Environment Variables

```env
APP_NAME=JobVerse
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

---

## License

MIT License

---

## Author

Faraz Pourebrahim
