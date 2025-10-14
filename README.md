# ⚖️ LawFirm – Web-Based Law Firm Management Website

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=flat&logo=php)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=flat&logo=javascript)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.3.3-06B6D4?style=flat&logo=tailwind-css)
![CSS](https://img.shields.io/badge/CSS-3-1572B6?style=flat&logo=css3)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql)

**LawFirm** is a web-based application for managing legal services, clients, and case records for a law firm.  
Built with [Laravel 10](https://laravel.com/) and [Breeze](https://laravel.com/docs/10.x/starter-kits#breeze), it provides a secure, efficient, and responsive solution for client management, case tracking, and administrative tasks.

🔗 **Live Website:** https://hyplawoffice.com

---

## ✨ Features
- 👥 Client management (CRUD)
- 📁 Case and document management
- 🔐 User authentication & role-based access
- 📱 Responsive design with Tailwind CSS

---

## 📂 Project Structure
```
law-firm/
├── app/ # Application core (Models, Controllers, Middleware)
├── bootstrap/
├── config/
├── database/ # Migrations and seeders
├── public/ # Public assets (CSS, JS, images)
├── resources/ # Blade templates and frontend files
│ ├── views/
│ └── css/js
├── routes/ # Web and API routes
├── storage/
├── tests/
├── .env # Environment config
├── artisan # Laravel CLI
├── composer.json
├── package.json
├── README.md
└── LICENSE
```

---

## 🛠️ Getting Started

### 1. Clone this repository
```
git clone https://github.com/farisandikaa/law-firm.git
cd law-firm
```

### 2. Install dependencies
```
composer install
npm install && npm run dev
```

### 3. Configure environment
```
cp .env.example .env
# Edit .env to set your database credentials
```

### 4. Run migrations 
```
php artisan key generate
php artisan migrate --seed
```

### 5. Start development server
```
php artisan serve
```

Open [http://localhost:8080](http://localhost:8080) to see the result.

---

## 📜 License
This project is licensed under the [MIT License](LICENSE).

---

## 📬 Contact
If you’d like to collaborate or have any inquiries, feel free to reach out:

- 📧 Email: **farisandika2111@gmail.com**
- 💼 LinkedIn: [linkedin.com/in/farisandikaputra](https://linkedin.com/in/farisandikaputra)
- 🐙 GitHub: [github.com/farisandikaa](https://github.com/farisandikaa)
