# 🏥 Dexa_Clinic

**Dexa_Clinic** adalah aplikasi manajemen klinik berbasis web yang dibangun menggunakan framework **Laravel**. Aplikasi ini dirancang untuk membantu operasional klinik secara digital, mulai dari pendaftaran pasien, pengelolaan dokter, hingga pencatatan rekam medis dan sistem antrian.

---

## 🎯 Tujuan

Menyediakan sistem informasi klinik yang efisien, mudah digunakan, dan terintegrasi, sehingga membantu meningkatkan pelayanan kepada pasien dan mempermudah kerja staf klinik.

---
## 🔧 Fitur Utama

### 🧑‍⚕️ Manajemen Pasien
- Pendaftaran pasien baru
- Pencarian dan pengelolaan data pasien
- Rekam medis digital

### 👨‍⚕️ Manajemen Dokter
- Penjadwalan praktek dokter
- Laporan kunjungan pasien
- Profil dan spesialisasi dokter

### 📝 Pendaftaran & Antrian
- Pendaftaran online dan offline
- Nomor antrian otomatis
- Notifikasi antrean

### 🗂️ Rekam Medis Elektronik
- Riwayat pemeriksaan
- Diagnosa dan resep obat
- Upload hasil lab atau radiologi

### 💊 Manajemen Obat & Inventori
- Data obat dan stok
- Pencatatan pengeluaran dan pemasukan obat
- Resep elektronik

---

## 🚀 Teknologi

- **Framework**: Laravel Framework 12.0.1
- **PHP Version**: PHP 8.2.27
- **Frontend**: Blade + Vite (TailwindCSS/Bootstrap)
- **Database**: MySQL
- **Autentikasi**: Laravel Breeze
- **Media Storage**: Cloudinary (opsional)
- **Local Dev**: Laragon

---


- rename file ```.env_asli```  menjadi ```.env```
- Jalankan ***composer install***
- Jalankan ***php artisan key:generate***
- Jalankan ***npm install***
- Jalankan ***npm run build***
- Jalankan ***npm run dev***
- Jalankan ***php artisan serve***
=======================================
- sesuaikan di .env API CLOUDINARY 
- CLOUDINARY_CLOUD_NAME=your_cloud_name
- CLOUDINARY_API_KEY=your_api_key
- CLOUDINARY_API_SECRET=your_api_secret
=======================================
- sebelumnya buatkan database dengan nama ***dexa_clinic***
- Jalan kan juga ***php artisan migrate*** 
- Jalan kan juga ***php artisan db:seed*** supaya Database terisi

untuk login sebagai admin dan super admin akses halaman ***http://127.0.0.1:8000/login***
### super admin
- username superadmin@gmail.com
- password superadmin@gmail.com
### admin
- username admin@gmail.com
- password admin@gmail.com

untuk login sebagai pasien akses halaman ***http://127.0.0.1:8000/patient/login***
-Create akun kemudian verifikasi

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
