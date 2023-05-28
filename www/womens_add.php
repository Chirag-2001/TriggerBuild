<?php
//Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO womenswear (type, price, size) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $type, $price, $size);

    // Set parameters and execute
    $type = $_POST["type"];
    $price = $_POST["price"];
    $size = $_POST["size"];
    $stmt->execute();

    // Close connection and redirect to product page
    $stmt->close();
    $conn->close();
    header("Location: womenswear.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Item - Womens Wear</title>
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

        form {
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            max-width: 300px;
            margin: 20px auto;
            text-align: center;
            overflow: hidden;
            display: block;
            padding: 20px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 1.2em;
        }

        input[type="submit"] {
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

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Add Item</h1>
    <button onclick="window.location.href='womenswear.php'">Back to Products</button>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="type" placeholder="Type" required>
        <input type="number" name="price" placeholder="Price" required>
        <input type="text" name="size" placeholder="Size" required>
        <input type="submit" value="Add Item">
    </form>
</body>
</html>

