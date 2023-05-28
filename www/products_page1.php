<!DOCTYPE html>
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
    <h1>Our Products</h1>
     <button onclick="window.location.href='homepage.php'">Home</button>
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

        // Fetch products from database
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="product">';
               // echo '<img src="'.$row['image'].'" alt="'.$row['name'].'">';
                echo '<h2>'.$row['name'].'</h2>';
                echo '<p>'.$row['description'].'</p>';
                echo '<p>Price: $'.$row['price'].'</p>';
                echo '<p>Features: '.$row['features'].'</p>';
                echo '<p>Ratings: '.$row['ratings'].'</p>';
                echo '<button>Add to Cart</button>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>


