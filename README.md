# Motex - Motor Shop E-Commerce Platform

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-11.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue?logo=php)
![Blade](https://img.shields.io/badge/Blade-Templates-orange)
![TailwindCSS](https://img.shields.io/badge/Tailwind-CSS-06B6D4?logo=tailwindcss)
![License](https://img.shields.io/badge/License-MIT-green)

A modern, full-featured e-commerce platform for buying and selling motor car products with comprehensive user authentication and inventory management.

</div>

---

## 📋 Project Overview

**Motex** is a Laravel-based e-commerce application designed specifically for motor car retailers and enthusiasts. It provides a complete solution for managing a product catalog, handling user authentication, and enabling seamless shopping experiences for customers.

Built with the latest Laravel 11 framework, Motex combines robust backend functionality with an elegant, responsive frontend powered by Blade templates and TailwindCSS.

### Key Features

- **🔐 User Authentication** - Secure registration, login, and profile management
- **🛍️ Product Catalog** - Browse and manage motor car products with images and pricing
- **📦 Inventory Management** - Full CRUD operations for shop items (Create, Read, Update, Delete)
- **🔒 Protected Routes** - Role-based access control for admin operations
- **💾 Database Management** - Eloquent ORM with migrations and seeders
- **📱 Responsive Design** - Mobile-friendly interface with TailwindCSS
- **🎨 Modern UI** - Clean, intuitive user interface with Blade templating

---

## 🏗️ Architecture

### Technology Stack

| Layer | Technologies |
|-------|--------------|
| **Backend** | Laravel 11.x, PHP 8.2+ |
| **Frontend** | Blade Templates, TailwindCSS, JavaScript, Vite |
| **Database** | Laravel Eloquent ORM |
| **Build Tools** | Vite, PostCSS, npm |
| **Testing** | PHPUnit |

### Project Structure

```
motex/
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php      # Authentication logic
│   │   └── ShopController.php      # Shop CRUD operations
│   └── Models/
│       ├── User.php               # User model
│       └── Shop.php               # Shop/Product model
├── database/
│   ├── factories/
│   │   ├── UserFactory.php
│   │   └── ShopFactory.php
│   ├── migrations/                # Database schema
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── auth/                  # Auth templates
│       ├── Dashboard/             # Dashboard templates
│       └── Shop/                  # Shop templates
├── routes/
│   └── web.php                    # Route definitions
├── public/                        # Public assets
├── config/                        # Configuration files
└── composer.json                  # PHP dependencies
```

---

## 🚀 Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & npm
- SQLite or MySQL

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/shezanyo/motex.git
   cd motex
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Setup database**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build assets**
   ```bash
   npm run dev
   ```

7. **Start the application**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

---

## 📚 Core Functionality

### Authentication System

Users can register and log in with email and password. The application features:
- Secure password hashing
- Session-based authentication
- User profiles
- Protected dashboard

**Routes:**
- `GET /register` - Registration page
- `POST /register` - Create new account
- `GET /login` - Login page
- `POST /login` - Authenticate user
- `POST /logout` - Logout user
- `GET /profile` - View user profile (protected)

### Shop Management

The shop module allows users to browse products and authenticated users to manage inventory:

**Public Routes:**
- `GET /shop` - View all products

**Protected Routes (Auth Required):**
- `GET /shop/create` - Create new product
- `POST /shop` - Store product
- `GET /shop/edit/{id}` - Edit product form
- `PUT /shop/{id}` - Update product
- `DELETE /shop/{id}` - Delete product

**Product Attributes:**
- Name
- Brand
- Price
- Image (stored as file)

### Dashboard

Authenticated users access a personalized dashboard after login, providing easy navigation to shop and profile management.

---

## 🗄️ Database Schema

### Users Table
```
- id (Primary Key)
- name
- email (Unique)
- password (Hashed)
- email_verified_at
- remember_token
- timestamps
```

### Shops Table
```
- id (Primary Key)
- name
- brand
- price
- image
- timestamps
```

---

## 🧪 Development

### Running Tests

```bash
php artisan test
```

### Code Standards

The project uses Laravel Pint for code formatting:

```bash
composer run pint
```

### Development Server with Hot Reload

```bash
npm run dev
```

For production builds:

```bash
npm run build
```

---

## 📦 Dependencies

### Key Packages
- **Laravel Framework** (11.x) - Core framework
- **Laravel Tinker** - REPL for Laravel
- **FakerPHP** - Generate fake data for testing
- **PHPUnit** - Unit testing
- **Tailwind CSS** - Utility-first CSS framework
- **Vite** - Build tool and dev server

---

## 🔐 Security Features

- **CSRF Protection** - Built-in CSRF token validation
- **Password Hashing** - Bcrypt password hashing
- **Authentication Guards** - Session-based user authentication
- **Authorization** - Middleware-based route protection
- **Image Validation** - File type and size validation for product images

---

## 📄 License

This project is open-source software licensed under the [MIT License](LICENSE).

---

## 👤 Author

**Shezanyo** - [GitHub Profile](https://github.com/shezanyo)

---

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request or open an Issue for bugs and feature requests.

---

## 📞 Support

For issues, questions, or suggestions, please open an [issue](https://github.com/shezanyo/motex/issues) on the GitHub repository.

---

**Made with ❤️ by the Motex Team**
