# 🍽️ Restoran - Modern Restaurant Management System

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A comprehensive restaurant management web application built with Laravel, featuring modern design, table reservations, menu management, and customer engagement tools.

## 🌟 Features

### Customer Features
- **Responsive Homepage** - Beautiful landing page with hero section and restaurant showcase
- **Interactive Menu** - Browse menu items by category (Breakfast, Launch, Dinner) with images and pricing
- **Table Reservations** - Online booking system for table reservations
- **About Section** - Restaurant information with chef profiles and experience highlights
- **Customer Testimonials** - Reviews and feedback from satisfied customers
- **Contact Information** - Easy access to restaurant location, hours, and contact details

### Administrative Features
- **User Management** - Secure authentication with two-factor authentication support
- **Reservation Management** - Track and manage table bookings with status updates
- **Menu Administration** - Add, edit, and organize menu items with categories
- **Customer Inquiries** - Handle customer questions and feedback
- **Notification System** - Real-time alerts for bookings and inquiries
- **Chef Management** - Maintain staff profiles and information

<-- ## 🚀 Live Demo

**[View Live Demo](https://8000-igujukc2bvk6akz83zn45-c55d69fc.manusvm.computer)**

Experience the full functionality of Restoran with our live demonstration. Explore the responsive design, browse the menu, and test the user interface across different devices. -->

## 🛠️ Technology Stack

- **Backend**: Laravel 10.x (PHP 8.1+)
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Database**: MySQL
- **Authentication**: Laravel Sanctum with 2FA support
- **Styling**: Custom CSS with Bootstrap framework
- **Package Manager**: Composer (PHP), npm (Node.js)

## 📋 Prerequisites

Before installation, ensure your system meets these requirements:

- PHP 8.1 or higher
- Composer
- Node.js and npm
- Web server (Apache/Nginx) or use PHP built-in server
- Database (MySQL)


## ⚡ Quick Installation

### 1. Clone the Repository
```bash
git clone https://github.com/yassin-elkhamlichi/Restoran.git
cd Restoran
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup

#### MySQL
```bash
# Update .env file with your database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=restoran
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Start Development Server
```bash
php artisan serve --host 0.0.0.0 --port 8000
```

Visit `http://localhost:8000` to view the application.

## 🗂️ Project Structure

```
Restoran/
├── app/                    # Application core files
│   ├── Http/Controllers/   # Request controllers
│   ├── Models/            # Eloquent models
│   └── ...
├── database/              # Database files
│   ├── migrations/        # Database migrations
│   └── database.sqlite    # SQLite database (if using SQLite)
├── public/               # Public web files
├── resources/            # Views, assets, and language files
│   ├── views/           # Blade templates
│   └── css/             # Stylesheets
├── routes/               # Application routes
├── storage/              # Generated files and logs
├── .env.example          # Environment configuration template
├── composer.json         # PHP dependencies
├── package.json          # Node.js dependencies
└── README.md
```

## 🎨 Design Features

### Color Scheme
- **Primary**: Dark theme (#1a1a1a)
- **Accent**: Orange (#FEA116)
- **Text**: White and light gray
- **Background**: Gradient dark tones

### Responsive Design
- Mobile-first approach
- Bootstrap grid system
- Touch-friendly interface
- Cross-browser compatibility

## 🔧 Configuration

### Environment Variables
Key configuration options in `.env`:

```env
APP_NAME=Restoran
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite

# Mail configuration (optional)
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
```

### Database Schema
The application includes migrations for:
- Users and authentication
- Restaurant information
- Table reservations/bookings
- Menu items and categories
- Customer inquiries
- Chef profiles
- Notifications system

## 🚀 Deployment

### Production Deployment
1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false`
3. Configure production database
4. Run `composer install --optimize-autoloader --no-dev`
5. Run `php artisan config:cache`
6. Run `php artisan route:cache`
7. Run `php artisan view:cache`

### Web Server Configuration
Ensure your web server points to the `public/` directory and has proper URL rewriting configured for Laravel.

## 🧪 Testing

### Manual Testing Checklist
- [ ] Homepage loads correctly
- [ ] Navigation menu functions
- [ ] Menu items display properly
- [ ] Reservation form works
- [ ] Contact information is accurate
- [ ] Responsive design on mobile devices
- [ ] Cross-browser compatibility

### Automated Testing
```bash
# Run PHP tests
php artisan test

# Run with coverage
php artisan test --coverage
```

### Development Guidelines
- Follow Laravel coding standards
- Write descriptive commit messages
- Add tests for new features
- Update documentation as needed

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Credits

- **Developer**: [Yassin El Khamlichi](https://github.com/yassin-elkhamlichi)
- **Framework**: [Laravel](https://laravel.com)
- **UI Framework**: [Bootstrap](https://getbootstrap.com)


## 🔄 Changelog

### Version 1.0.0
- Initial release
- Complete restaurant website functionality
- Responsive design implementation
- Database schema and migrations
- Authentication system
- Menu and reservation management

---


