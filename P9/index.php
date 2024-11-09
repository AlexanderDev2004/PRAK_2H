<?php
// Create database connection using config file
include_once("data/data.php");

// Fetch all users data from database
$stmt = $pdo->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <title>Homepage</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    a {
        text-decoration: none;
        color: #3498db;
    }

    a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    h1 {
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    button {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>

</head>
<body>
    <a href="add.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
        </tr>
        <?php  
        while ($user_data = $stmt->fetch(PDO::FETCH_ASSOC)) {         
            echo "<tr>";
            echo "<td>" . htmlspecialchars($user_data['name']) . "</td>";
            echo "<td>" . htmlspecialchars($user_data['mobile']) . "</td>";
            echo "<td>" . htmlspecialchars($user_data['email']) . "</td>";    
            echo "<td><a href='edit.php?id=" . urlencode($user_data['id']) . "'>Edit</a> | <a href='delete.php?id=" . urlencode($user_data['id']) . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
