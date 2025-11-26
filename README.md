
**Pulao Order Laravel Project**
**Supervisor Madam Areeba Khan**

## Project Description
This is a web application for managing pulao orders. It is built using the Laravel framework. Users can place orders for pulao, view their orders, and manage their accounts. The application is designed for learning and demonstration purposes.

## Main Features
1. User registration and login
2. Place new pulao orders
3. View order history
4. Add address to orders
5. Admin can view all orders

## Project Structure
- app/Models/ contains the main models: PulaoOrder and User
- app/Http/Controllers/ contains controllers for handling requests
- database/migrations/ contains migration files for creating tables
- resources/views/ contains Blade templates for the frontend
- routes/web.php contains the web routes

## How to Run
1. Install Composer dependencies: composer install
2. Install npm dependencies: npm install
3. Copy .env.example to .env and set up your database details
4. Run migrations: php artisan migrate
5. Start the development server: php artisan serve
6. Visit http://localhost:8000 in your browser

## How to Use
Register a new user account. Log in and place a pulao order. You can view your orders and add your address. Admin users can see all orders.

## Testing
To run tests, use: php artisan test

## Credits
Project by BCS6 Students

## License
This project uses the MIT License.
