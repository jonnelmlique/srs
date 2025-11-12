# Student Record System (SRS)

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS 4.0">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Vite-7.0-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite">
</div>

<br>

<p align="center">
  A modern, full-featured web application designed for educational institutions to efficiently manage student data. Built with cutting-edge technologies and following 2025 design principles.
</p>

## 🎯 Overview

The **Student Record System (SRS)** provides a seamless experience for administrators to handle student records with a modern, intuitive interface that makes record keeping efficient and error-free.

### Key Highlights

- ⚡ **Lightning Fast** - Optimized performance with Vite build system and efficient Laravel backend
- 📱 **Mobile Ready** - Fully responsive design that works perfectly on all devices
- 🔒 **Secure & Reliable** - Built with Laravel's robust security features and best practices
- 🎨 **Modern UI** - Clean, intuitive interface with Tailwind CSS 4.0
- 🔍 **Advanced Search** - Real-time search and filtering capabilities
- 📊 **Data Export** - Export student data in various formats

## 🚀 Quick Start

### One-Command Setup
```bash
composer run setup
```

### Manual Installation

#### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL Database

#### Installation Steps

1. **Clone & Install Dependencies**
```bash
git clone https://github.com/jonnelmlique/srs.git
cd student-record-system
composer install
npm install
```

2. **Environment Configuration**
```bash
cp .env.example .env
php artisan key:generate
```
> **Note:** Update your `.env` file with your database credentials before proceeding.

3. **Database Setup**
```bash
php artisan migrate
php artisan db:seed
```

4. **Build Assets & Start Server**
```bash
npm run build
php artisan serve
```

🎉 **Success!** Your application should now be running at `http://localhost:8000`

## ✨ Features

### Complete CRUD Operations

| Feature | Description |
|---------|-------------|
| **Create Student** | Add new student records with comprehensive validation and unique ID generation |
| **View Students** | Browse all student records with pagination, search, and detailed profile views |
| **Update Student** | Edit existing student information with data integrity and validation checks |
| **Delete Student** | Remove student records safely with confirmation dialogs and soft delete options |

### Student Data Management

#### Required Fields
- ✅ Student ID (Auto-generated & Unique)
- ✅ Full Name (First & Last)
- ✅ Date of Birth (with Age Calculation)
- ✅ Email Address (Unique)
- ✅ Course/Program
- ✅ Year Level (1-6)

#### Optional Fields
- 📱 Phone Number
- 🏠 Address
- 👤 Gender
- 📝 Additional Notes

### Advanced Features

- 🔍 **Search** - Search by name, student ID, email, or course
- 🎯 **Smart Filtering** - Filter by year level, course, or status
- 📊 **Data Export** - Export filtered results to CSV/Excel
- 📱 **Responsive Design** - Works seamlessly on desktop, tablet, and mobile
- ⚡ **Live Updates** - Real-time count updates and notifications
- 🎨 **Modern UI** - Clean, professional interface with smooth animations

## 🛠 Tech Stack

### Backend
- **Laravel 12** - Latest PHP framework with modern features
- **PHP 8.2+** - Modern PHP with latest security updates
- **MySQL** - Reliable relational database

### Frontend
- **Tailwind CSS 4.0** - Utility-first CSS framework
- **Vite 7.0** - Next-generation frontend tooling
- **Blade Templates** - Laravel's powerful templating engine
- **Alpine.js** - Lightweight JavaScript framework (via CDN)

### Development Tools
- **Composer** - PHP dependency management
- **npm** - Node.js package management
- **Laravel Pint** - Code style fixer
- **Pest** - Testing framework

## 📁 Project Structure

```
student-record-system/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database migrations
│   ├── seeders/            # Database seeders
│   └── factories/          # Model factories
├── resources/
│   ├── views/              # Blade templates
│   └── js/                 # Frontend assets
├── routes/                 # Application routes
├── public/                 # Public assets
└── config/                 # Configuration files
```

## 🔧 Development

### Available Scripts

```bash
# Start development server with hot reload
composer run dev

# Run tests
composer run test

# Build for production
npm run build

# Development build with watch
npm run dev
```

### Database Commands

```bash
# Run migrations
php artisan migrate

# Seed database with sample data
php artisan db:seed

# Reset database
php artisan migrate:fresh --seed
```

## 📊 System Requirements

| Component | Minimum | Recommended |
|-----------|---------|-------------|
| PHP | 8.2 | 8.3+ |
| MySQL | 5.7 | 8.0+ |
| Node.js | 18.x | 20.x+ |
| Memory | 512MB | 1GB+ |
| Storage | 100MB | 500MB+ |

## 🎨 Design Philosophy

This 2025 modern design focuses on:

- **Minimalism** - Clean interfaces without clutter
- **Accessibility** - Proper contrast and keyboard navigation  
- **Responsiveness** - Mobile-first approach
- **Performance** - Optimized assets and efficient queries
- **User Experience** - Intuitive navigation and clear feedback

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com) - The PHP Framework for Web Artisans
- Styled with [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
- Powered by [Vite](https://vitejs.dev) - Next Generation Frontend Tooling

---

<div align="center">
  <p>Made with ❤️ for educational institutions worldwide</p>
  <p>© 2025 Student Record System. All rights reserved.</p>
</div>