# shurl
URL Shortener in Laravel

First step: migrate database structure
``php artisan migrate``

Second step: Configure database connection in .env file

---

The generateToken function in the UrlService class is recursive to check the existence of the token and regenerate it. It uses several nested functions substr (md5 (uniqid (rand (8), true)), 0, $ length)
