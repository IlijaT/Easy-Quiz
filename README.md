
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Easy-Quiz


## How to Clone and Setup this Project

- Step 1: git clone https://github.com/IlijaT/Easy-Quiz.git
- Step 2: cd into your project
- Step 3: composer install
- Step 4: npm install
- Step 5: copy .env.example .env
- Step 6: php artisan key:generate
- Step 7: Create an empty database
- Step 8: In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options
- Step 9: Migrate and seed the database: php artisan migrate --seed

## Ready to use
- Your database now should contain two users:  
    1: Admin user - (email: 'admin@admin.com', password:'password')
    2: Test user - (email: 'test@test.com', password:'password')
- Your database should aslo conntain 3 quizes with 5 questions


