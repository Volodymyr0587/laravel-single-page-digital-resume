Original project repo https://github.com/codearch-app/single-page-digital-resume-laravel

# Single-Page Digital Résumé

A modern, responsive single-page digital Résumé built with Laravel 12 and Tailwind CSS. This beginner-friendly project demonstrates Laravel fundamentals including the service container, request lifecycle, facades, routing, Blade templating, caching, and file system operations.


## 📖 About This Project

This project focuses on building a clean, professional digital Résumé that showcases your skills, experience, and achievements in a modern web interface. More importantly, it serves as a practical learning tool for mastering Laravel's core concepts through real-world implementation. The Résumé content is dynamically sourced from local JSON files and processed using Laravel's powerful service container and file system abstractions.

### Installation

This setup uses Composer and npm directly on your local machine. Assuming you have PHP, Composer, and Node.js installed, follow these steps:

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd laravel-single-page-digital-resume
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Build assets and start development server**
   In a new terminal:
   ```bash
   composer run dev
   ```

Your application will be available at `http://localhost:8000`
