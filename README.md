<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Famous All Star Article
Laravel 7+

Base URL akan menampilkan tampilan Artikel untuk pengguna.
Untuk masuk ke admin bisa gunakan link localhost/admin -> akan otomatis direct ke Halaman Login.
Login autentikasi tersedia menggunakan google.
Untuk membuat akun bisa ke menu register.
Ubah password bisa dilakukan hanya ketika user login dan hanya untuk account yang di daftarkan melalui Famous All Star, tidak bisa untuk mengganti password akun yang login menggunakan Google Autentikasi.

- localhost -> Front End Artikel.
- localhost/admin -> Back End atau CMS untuk konten Artikel.
- ArticleSeed -> untuk data dummy 10 Article dan 10 Category yang terintegrasi dengan hasMany.
- Tabel Categories -> name dan slug.
- Tabel Article -> title, categories_id, slug, short_description, content, image, thumbnail.
- Setiap Tabel menggunakan softDeletes();

## License

Dibuat oleh Cahyo Bayu Sahid Pratomo
