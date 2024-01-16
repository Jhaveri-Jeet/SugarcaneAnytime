# SugarcaneAnytime
![Screenshot 2024-01-17 020805](https://github.com/Jhaveri-Jeet/SugarcaneAnytime/assets/114752089/c6a887fc-860c-4c4f-bc22-37af21da3d4f)

SugarcaneAnytime is a Laravel-based e-commerce platform tailored for sugarcane juice enthusiasts. Admins have access to a feature-rich dashboard for managing product listings, updating inventory, and setting prices dynamically. Users can enjoy a delightful shopping experience through a clean and intuitive interface, securely completing transactions. Experience the sweetness of convenience with SugarcaneAnytime.

## Features

- **Admin Dashboard:** Manage products effortlessly with an intuitive dashboard. Add, update, or remove sugarcane juice varieties, and dynamically adjust prices and inventory.

- **User-Friendly Interface:** Explore a visually appealing and user-friendly interface designed for easy navigation. Discover a variety of sugarcane juice options presented in an organized and enticing manner.

- **Secure Transactions:** Utilize secure payment gateways to ensure user transactions are protected. SugarcaneAnytime prioritizes the safety and privacy of user data during the checkout process.

- **Order History:** Keep track of past purchases with an order history feature. Users can review their order details and reorder their favorite sugarcane juice selections effortlessly.

## Getting Started

Follow these steps to set up and run SugarcaneAnytime on your local machine:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/sugarcane-anytime.git
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Copy the environment file:**

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Configure the database:**

   Update the database configuration in the `.env` file with your database credentials.

6. **Run migrations and seed the database:**

   ```bash
   php artisan migrate --seed
   ```

7. **Start the development server:**

   ```bash
   php artisan serve
   ```

8. **Access the application:**

   Open your browser and visit `http://localhost:8000` to explore SugarcaneAnytime.
