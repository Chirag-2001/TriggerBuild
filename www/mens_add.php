<?php
//Connect to MariaDB
$servername = "10.47.34.129";
$username = "root";
$password = "Devops@123";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data and insert into database
    $type = $_POST["type"];
    $price = $_POST["price"];
    $size = $_POST["size"];

    $sql = "INSERT INTO menswear (type, price, size) VALUES ('$type', '$price', '$size')";

    if ($conn->query($sql) === TRUE) {
        echo "New item added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Item - Mens Wear</title>
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
    <button onclick="window.location.href='homepage.php'">Home</button>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="type" placeholder="Type" required>
        <input type="number" name="price" placeholder="Price" required>
        <input type="text" name="size" placeholder="Size" required>
        <input type="submit" value="Add Item">
    </form>
</body>
</html>

