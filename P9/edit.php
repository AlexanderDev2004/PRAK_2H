<?php
// include database connection file
include_once("data/data.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    // Update user data using PDO
    $stmt = $pdo->prepare("UPDATE users SET name=:name, email=:email, mobile=:mobile WHERE id=:id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        // Redirect to homepage to display updated user in list
        header("Location: index.php");
        exit();
    } else {
        echo "Failed to update user data.";
    }
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id using PDO
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();

$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user_data) {
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
} else {
    echo "User not found.";
}
?>

<html>
<head>    
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
