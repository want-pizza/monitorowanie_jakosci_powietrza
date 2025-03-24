# Air Quality Monitoring

This project is designed to monitor air quality using Laravel. It is created to analyze and display real-time air quality data.

To start working with the project, follow these steps:

First, clone the repository to your computer by running the following command in your terminal:

```bash
git clone https://github.com/your-username/monitorowanie_jakosci_powietrza.git
Replace your-username with your GitHub username.

After cloning the repository, navigate to the project directory:

bash
cd monitorowanie_jakosci_powietrza
The project uses Composer to manage dependencies. If you don't have Composer installed, follow the instructions here: Composer Installation Guide.

Once Composer is installed, run the following command to install all the required dependencies:

bash
composer install
Next, copy the .env.example file to .env:

bash
cp .env.example .env
Then, configure your environment variables, especially those related to the database, email service, etc.

To generate the application key, run the following command:

bash
php artisan key:generate
Before you can start working with the project, run the migrations to create the necessary tables in the database:

bash
php artisan migrate
Now, you can run the project locally by executing:

bash
php artisan serve

You can access the project in your browser by going to http://localhost:8000.
