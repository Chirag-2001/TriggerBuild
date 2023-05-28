<!DOCTYPE html>
<html>
<head>
        <title>Login Success</title>
        <style>
         body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

h1 {
    color: #4CAF50;
    text-align: center;
}

p {
    font-size: 1.2em;
    text-align: center;
}

.container {
    width: 50%;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.2em;
    margin-top: 20px;
}

button:hover {
    background-color: #45a049;
}
  </style>
</head>
<body>
        <div class="container">
            <h1>Login Success</h1>
            <p>Congratulations, you have successfully logged in!</p>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
</body>
</html>

