<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project Laravel Filament

Ini adalah proyek berbasis Laravel yang menggunakan Laravel Filament untuk membangun antarmuka admin yang kuat dan fleksibel. Filament adalah library untuk Laravel yang menyediakan komponen UI yang mudah digunakan dan sangat dapat dikustomisasi.

## Fitur

- Manajemen Jenis Laporan
- Manajemen Laporan Pengguna
- Manajemen User
- Manajemen Roles

## Prasyarat

- PHP 8.1 +
- Composer
- Node.js & npm/yarn
- MySQL 

## Instalasi

- Clone Repository
  Clone repository ini ke direktori lokal Anda:
  
  git clone https://github.com/username/nama-repo.git
  cd nama-repo

- Instal Dependensi
  Jalankan perintah berikut untuk menginstal semua dependensi PHP dan JavaScript:

  composer install
  npm install
  npm run dev

- Salin File Konfigurasi .env
  Salin file .env.example ke .env dan sesuaikan pengaturan lingkungan Anda:

  cp .env.example .env

- Buat Kunci Aplikasi
  Jalankan perintah berikut untuk membuat kunci aplikasi:

  php artisan key:generate

- Konfigurasi Database
  Buka file .env dan sesuaikan konfigurasi database Anda:

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nama_database
  DB_USERNAME=username
  DB_PASSWORD=password

- Migrasi dan Seed Database
  Jalankan migrasi dan seeding untuk menyiapkan database:

  php artisan migrate --seed

- Menjalankan Server
  Jalankan server pengembangan Laravel:

  php artisan serve

- Akses Filament Admin Panel
  http://127.0.0.1:8000/admin

Ikuti dokumentasi resmi Filament untuk informasi lebih lanjut tentang cara mengkonfigurasi dan menggunakan komponen yang tersedia.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
