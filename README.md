<h1 align="center">
  <a href="https://open10.dev" style="text-decoration: none; color: #1a1a1a; font-size: 48px; font-weight: bold; letter-spacing: 0.05em; transform: skewX(-8deg); display: inline-block;">OPEN10</a>
</h1>

<p align="center">
  <strong>Building the future of software development with AI-assisted delivery and platform engineering</strong>
</p>

<p align="center">
  <a href="https://open10.dev"><img src="https://img.shields.io/badge/Website-open10.dev-e11d48" alt="Website"></a>
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel" alt="Laravel"></a>
  <a href="https://tailwindcss.com"><img src="https://img.shields.io/badge/Tailwind-3.x-38B2AC?logo=tailwind-css" alt="Tailwind CSS"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License"></a>
</p>

---

## 📖 About OPEN10

OPEN10 is a modern engineering consultancy specializing in:

- **Development Foundations** - Full-stack development with PHP, Laravel, Node.js, React, and modern frameworks
- **AI-Assisted Delivery** - Leveraging AI tools to accelerate development and improve code quality
- **Internal Developer Platforms** - Building self-service platforms that empower development teams
- **Secured Operations** - DevOps, CI/CD, and security best practices for modern applications

We bridge the gap between ambitious technical goals and practical execution, helping teams ship faster without compromising quality.

---

## 🚀 Quick Start

### Prerequisites

Before you begin, ensure you have the following installed:

- **PHP 8.3+** ([Download](https://www.php.net/downloads))
- **Composer** ([Download](https://getcomposer.org/))
- **Node.js 18+** & **npm** ([Download](https://nodejs.org/))
- **MySQL 8.0+** or **PostgreSQL 14+**

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/open10/open10.git
   cd open10
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   cp .env.example .env
   ```
   
   Update the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=open10
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Build frontend assets**
   ```bash
   npm run build
   ```
   
   For development with hot reload:
   ```bash
   npm run dev
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

9. **Access the application**
   
   Open your browser and visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🛠️ Development

### File Structure

```
open10/
├── app/
│   ├── Http/Controllers/    # Application controllers
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── config/                  # Configuration files
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── public/                  # Public assets
├── resources/
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
├── routes/
│   └── web.php             # Web routes
└── storage/                # Application storage
```

### Available Commands

```bash
# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Run tests
php artisan test

# Database seeding
php artisan db:seed

# Code formatting
./vendor/bin/pint
```

---

## 🌐 Services

Visit our website to explore our comprehensive service offerings:

- **[Development Foundations](https://open10.dev/services/development)** - Modern full-stack development
- **[AI-Assisted Delivery](https://open10.dev/services/ai-delivery)** - AI-powered development acceleration
- **[Internal Developer Platforms](https://open10.dev/services/idp)** - Self-service platform engineering
- **[Secured Operations](https://open10.dev/services/devops)** - DevOps & security excellence

---

## 📞 Contact

- **Website**: [https://open10.dev](https://open10.dev)
- **Email**: hello@open10.dev
- **Contact Form**: [https://open10.dev/contact](https://open10.dev/contact)

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 🙏 Acknowledgments

Built with ❤️ by the OPEN10 team using:

- [Laravel](https://laravel.com) - The PHP Framework for Web Artisans
- [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
- [Alpine.js](https://alpinejs.dev) - Lightweight JavaScript framework
- [Vite](https://vitejs.dev) - Next generation frontend tooling

---

<p align="center">
  <strong>Developed with ❤️ by <a href="https://open10.dev">OPEN10</a></strong>
</p>
