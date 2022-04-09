## INSTALL LARAVEL API
- Clone Project ini
- jalankan perintah `composer install` atau `composer update`
- rename env.example dengan perintah `cp .env.example .env`
- buat database sesuai dengan nama database pada `.env`
- ketikkan perintah `php artisan migrate`
- kemudian jalankan seeder `php artisan db:seed --class=userSeeder`, `php artisan db:seed --class=createTransaction`, dan `php artisan db:seed --class=createDetailTransaction`
- running aplikasi menggunakan perintah `php artisan serve`
- login untuk mendapatkan token authorization menggunakan username `Admin : admin@gmail.com|admin123, Buyer : buyer@gmail.com|buyer123, Seller : seller@gmail.com|seller123 `

- Dokumentasi API ada pada link `https://app.swaggerhub.com/apis-docs/febryanpratama/laravel_api/1.0.0#/`
