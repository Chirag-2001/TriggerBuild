<?php
//Connect to the database
$host = "10.47.34.129"; // Your host name
$username = "devops"; // Your database username
$password = "devops"; // Your database password
$dbname = "devops"; // Your database name

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add item to the cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Check if the item already exists in the cart
    $sql = "SELECT * FROM cart_items WHERE product_id = '$product_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Update the quantity if the item already exists
        $sql = "UPDATE cart_items SET quantity = quantity + $quantity WHERE product_id = '$product_id'";
        $conn->query($sql);
    } else {
        // Insert a new item into the cart
        $sql = "INSERT INTO cart_items (product_id, quantity) VALUES ('$product_id', $quantity)";
        $conn->query($sql);
    }

    // Redirect to the cart page after adding the item
    header("Location: cart.php");
    exit();
}

// Remove item from the cart
if (isset($_GET['remove'])) {
    $item_id = $_GET['remove'];

    // Delete the item from the cart
    $sql = "DELETE FROM cart_items WHERE id = '$item_id'";
    $conn->query($sql);

    // Redirect to the cart page after removing the item
    header("Location: cart.php");
    exit();
}

// Retrieve the cart items
$sql = "SELECT * FROM cart_items";
$result = $conn->query($sql);
$cart_items = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>

    <?php
    if (!empty($cart_items)) {
        foreach ($cart_items as $item) {
            $product_id = $item['product_id'];
            $quantity = $item['quantity'];

            // Retrieve the product details
            $sql = "SELECT * FROM products WHERE id = '$product_id'";
            $result = $conn->query($sql);
            $product = $result->fetch_assoc();

            echo "<p>".$product['name']." - Quantity: ".$quantity." <a href='cart.php?remove=".$item['id']."'>Remove</a></p>";
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>

    <h2>Available Products</h2>

    <?php
    // Retrieve all available products
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);

    if (!empty($products)) {
        foreach ($products as $product) {
            echo "<p>".$product['name']." - Price: ".$product['price']." <form method='POST' action='cart.php'><input type='hidden' name='product_id' value='".$product['id']."'><input type='number' name='quantity' min='1' value='1'><input type='submit' name='add_to_cart' value='Add to Cart'></form></p>";
        }
    } else {
        echo "<p>No products available.</p>";
    }
    ?>

    <p><a href="checkout.php">Proceed to Checkout</a></p>

</body>
</html>

