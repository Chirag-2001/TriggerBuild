SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `Person` (
    `id` int(11) NOT NULL,
    `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Person` (`id`, `name`) VALUES
    (1, 'Ranjit'),
    (2, 'Rakesh'),
    (3, 'Dinesh'),
    (4, 'Karthik');

CREATE TABLE electronics (
    id INT PRIMARY KEY,
    product_name VARCHAR(50) NOT NULL,
    brand VARCHAR(30) NOT NULL,
    category VARCHAR(30) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description VARCHAR(200) DEFAULT NULL,
    date_added DATE NOT NULL
);

INSERT INTO electronics (id, product_name, brand, category, price, description, date_added)
VALUES
  (1, 'iPhone 13 Pro', 'Apple', 'Smartphones', 999.99, 'The latest iPhone with advanced features', '2023-05-09'),
  (2, 'Samsung Galaxy S22', 'Samsung', 'Smartphones', 899.99, 'The latest Samsung flagship phone', '2023-05-09'),
  (3, 'MacBook Air M2', 'Apple', 'Laptops', 1299.99, 'The latest MacBook Air with M2 chip', '2023-05-09'),
  (4, 'Dell XPS 13', 'Dell', 'Laptops', 1099.99, 'Powerful and lightweight laptop', '2023-05-09'),
  (5, 'Sony WH-1000XM4', 'Sony', 'Headphones', 349.99, 'Wireless noise-cancelling headphones', '2023-05-09'),
  (6, 'Bose QuietComfort Earbuds', 'Bose', 'Headphones', 249.99, 'Wireless noise-cancelling earbuds', '2023-05-09'),
  (7, 'iPad Pro', 'Apple', 'Tablets', 799.99, 'The latest iPad with M1 chip', '2023-05-09'),
  (8, 'Samsung Galaxy Tab S8', 'Samsung', 'Tablets', 599.99, 'The latest Samsung tablet with AMOLED display', '2023-05-09'),
  (9, 'Nintendo Switch OLED', 'Nintendo', 'Gaming Consoles', 349.99, 'The latest Nintendo Switch with OLED display', '2023-05-09'),
  (10, 'Xbox Series X', 'Microsoft', 'Gaming Consoles', 499.99, 'The latest Xbox console with 4K gaming', '2023-05-09'),
  (11, 'Sony A7 IV', 'Sony', 'Cameras', 2199.99, 'The latest Sony mirrorless camera', '2023-05-09'),
  (12, 'Canon EOS R5', 'Canon', 'Cameras', 3699.99, 'The latest Canon mirrorless camera', '2023-05-09'),
  (13, 'LG C1 OLED TV', 'LG', 'TVs', 1899.99, 'The latest LG OLED TV with HDMI 2.1', '2023-05-09'),
  (14, 'Sony Bravia XR A90J', 'Sony', 'TVs', 2799.99, 'The latest Sony OLED TV with cognitive processor XR', '2023-05-09'),
  (15, 'Sonos Beam', 'Sonos', 'Speakers', 399.99, 'Smart soundbar with Alexa built-in',

CREATE TABLE users (
	username VARCHAR(20) NOT NULL,
	password VARCHAR(20) NOT NULL
);

INSERT INTO users (username, password) VALUES
     ('chirag', 'chirag'),
     ('pranav', 'pranav');

CREATE TABLE grocery (
   id INT PRIMARY KEY,
   item_name VARCHAR(50) NOT NULL,
   category VARCHAR(30) NOT NULL,
   price DECIMAL(10, 2) NOT NULL,
   description VARCHAR(200) DEFAULT NULL,
   date_added DATE NOT NULL
);

CREATE TABLE home_appliances (
   id INT PRIMARY KEY,
   appliance_name VARCHAR(50) NOT NULL,
   category VARCHAR(30) NOT NULL,
   brand VARCHAR(50) NOT NULL,
   model VARCHAR(50) NOT NULL,
   price DECIMAL(10, 2) NOT NULL,
   description VARCHAR(200) DEFAULT NULL,
   date_added DATE NOT NULL
);

CREATE TABLE mens_wear (
  id INT PRIMARY KEY,
  name VARCHAR(255),
  category VARCHAR(255),
  brand VARCHAR(255),
  color VARCHAR(255),
  size VARCHAR(20),
  price DECIMAL(10,2),
  description TEXT,
  date_added DATE
);

CREATE TABLE products (
  id INT PRIMARY KEY,
  name VARCHAR(255),
  category VARCHAR(255),
  brand VARCHAR(255),
  color VARCHAR(255),
  size VARCHAR(20),
  price DECIMAL(10,2),
  description TEXT,
  date_added DATE
);

CREATE TABLE toys_and_beauty_products (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  category VARCHAR(255) NOT NULL,
  brand VARCHAR(255),
  color VARCHAR(255),
  size VARCHAR(255),
  price DECIMAL(10, 2),
  description TEXT,
  date_added DATE
);
   
CREATE TABLE womenswear (
  id INT PRIMARY KEY,
  name VARCHAR(255),
  category VARCHAR(255),
  brand VARCHAR(255),
  color VARCHAR(255),
  size VARCHAR(50),
  price DECIMAL(10, 2),
  description TEXT,
  date_added DATE
);

