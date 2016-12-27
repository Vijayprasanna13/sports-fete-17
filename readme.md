# Sports-fete-17
Website for sportsfete17
##Build instructions
1. Clone the project using the url 
  `https://github.com/Vijayprasanna13/sports-fete-17.git`
  or download as .zip
2. Cd to the project director and run `composer install`
3. Copy the `.env.example` as `.env` and add required credentials.
4. Run the server using `php -S localhost:8000 -t public`
5. Run `rbash key.sh` from project directory to get at 32 bit key, use this in the `.env` file.
6. Run `php artisan migrate` to create tables (add database name in the `.env` file and create it in MYSQL).
