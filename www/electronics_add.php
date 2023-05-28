CTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
            margin-top: 50px;
        }

        .product {
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            max-width: 300px;
            margin: 20px;
            text-align: center;
            overflow: hidden;
            display: inline-block;
        }

        .product img {
            max-width: 100%;
        }

        .product h2 {
            font-size: 1.5em;
            margin-top: 20px;
        }

        .product p {
            font-size: 1.2em;
            margin: 10px;
        }

        .product button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.2em;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .product button:hover {
            background-color: #45a049;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <h1>Welcome to Electronics Section</h1>
    <button onclick="window.location.href='homepage.php'">Home</button>
    <form action="" method="post">
        <label for="name">Product name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        <input type="submit" name="submit" value="Add Product">
    </form>
    <div class="clearfix">
        <?php
        // Connect to MariaDB
        $servername = "localhost";
        $username = "root";
        $password = "Devops@123";
        $dbname = "mydatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form is submitted
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];

            // Insert new product into database
            $sql = "INSERT INTO electronics (name, category, price) VALUES ('$name', '$category', '$price')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>New product added successfully.</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Fetch products from


