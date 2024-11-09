<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
    // Check if form submitted, insert form data into users table
    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // Include database connection file
        include_once("data/data.php");
                
        // Insert user data into table using PDO
        $stmt = $pdo->prepare("INSERT INTO users (name, email, mobile) VALUES (:name, :email, :mobile)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);

        if ($stmt->execute()) {
            echo "User added successfully. <a href='index.php'>View Users</a>";
        } else {
            echo "Failed to add user.";
        }
    }
    ?>
</body>
</html>
