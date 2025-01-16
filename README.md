# Grocery Store Website

An online platform for browsing and purchasing groceries, offering a user-friendly interface for both customers and administrators.

## Features

- **User Registration and Authentication**: Users can create accounts, log in, and manage their profiles.
- **Product Browsing**: Explore a variety of grocery items categorized for easy navigation.
- **Shopping Cart**: Add products to the cart and proceed to checkout.
- **Order Management**: Users can view their order history; administrators can manage all orders.
- **Contact Form**: Users can send messages or inquiries through the contact page.
- **Admin Dashboard**: Admins can manage products, view user information, and handle contacts.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Installation

#!/bin/bash

# Step 1: Clone the repository
echo "Cloning the repository..."
git clone https://github.com/prajwalgurnule/Grocery-Store-Website.git
cd Grocery-Store-Website || { echo "Failed to enter directory"; exit 1; }

# Step 2: Set up the database
echo "Setting up the database..."
echo "Please ensure MySQL is running and you have the required privileges."
read -p "Enter MySQL username: " db_user
read -sp "Enter MySQL password: " db_pass
echo
read -p "Enter MySQL host (default: localhost): " db_host
db_host=${db_host:-localhost}
read -p "Enter database name (default: grocery_store): " db_name
db_name=${db_name:-grocery_store}

# Create the database and import the SQL file
mysql -u "$db_user" -p"$db_pass" -h "$db_host" -e "CREATE DATABASE IF NOT EXISTS $db_name;"
mysql -u "$db_user" -p"$db_pass" -h "$db_host" "$db_name" < ./database.sql

if [ $? -eq 0 ]; then
    echo "Database setup completed successfully!"
else
    echo "Database setup failed. Please check your credentials and try again."
    exit 1
fi

# Step 3: Configure the backend
echo "Configuring the backend..."
config_file="./config.php"

cat > "$config_file" <<EOL
<?php
define('DB_HOST', '$db_host');
define('DB_NAME', '$db_name');
define('DB_USER', '$db_user');
define('DB_PASS', '$db_pass');
?>
EOL

echo "Configuration file created at $config_file."

# Step 4: Run the application
echo "Installation completed successfully!"
echo "You can now run the application by opening it on your local PHP server."

## Usage

### 1. Home Page
- View featured products and navigate through different categories.
- Easily access links to shop and other key sections.

### 2. Shop Page
- Browse all available products.
- Use filters or categories (if implemented) to find products quickly.

### 3. Product Details
- Click on any product to view its detailed description, price, and availability.
- Option to add the product to your cart.

### 4. Cart
- Add products to your shopping cart.
- Modify quantities or remove items before proceeding to checkout.
- Total price is dynamically updated.

### 5. Checkout
- Proceed to checkout and confirm your purchase.
- Provide required information if necessary.

### 6. Admin Panel
- Access administrative features by logging in as an admin.
- Manage products: Add, update, or delete items in the store.
- View and manage user accounts and messages from the contact form.

---

Follow these steps to explore the full functionality of the website!

