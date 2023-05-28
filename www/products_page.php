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
    <div class="clearfix">
        <div class="product">
            <img src="product1.jpg" alt="Product 1">
            <h2>Product 1</h2>
            <p>Description of Product 1</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h2>Product 2</h2>
            <p>Description of Product 2</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <h2>Product 3</h2>
            <p>Description of Product 3</p>
            <button>Add to Cart</button>
        </div>
    </div>
   <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Connect to MySQL database
                        $servername = "localhost";
                        $username = "root";
                        $password = "Devops@123";
                        $dbname = "mydatabase";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                        }

                        // Get form data
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Check if user exists in MySQL database
                        $sql = "SELECT * FROM products WHERE username='$username' AND password='$password'";
                        $result = $conn->query($sql);

                       // if ($result->num_rows > 0) {
                       //        // Redirect to login success page
                       //         header('Location: login_success.php');
                       // } else {
                       //         echo "<p>Invalid username or password!</p>";
                       // }

                        // Close MySQL database connection
                        $conn->close();
                }
        ?>

</body>
</html>

