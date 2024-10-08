<!DOCTYPE html>
<html>
<head>
  <title>Form Input Design</title>
  <style type="text/css">
    .error {color: red;}
  </style>
</head>
<body>

<form id="myForm" onsubmit="return validate()">
  <label for="name">Name:</label><br/>
  <input type="text" id="name" name="name"><span id="error_name"></span><br/>
  
  <label for="email">Email:</label><br/>
  <input type="text" id="email" name="email"><span id="error_email"></span><br/>
  
  <label for="password">Password:</label><br/>
  <input type="password" id="password" name="password"><span id="error_password"></span><br/>

  <input type="submit" value="Submit"/>
  <input type="reset" value="Reset"/>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
function validate() {
    var valid = true;
    $("#myForm span").text("");

    
    if ($("#name").val() == "") {
        $("#error_name").text("Name required");
        valid = false;
    }

    
    if ($("#email").val() == "") {
        $("#error_email").text("Email required");
        valid = false;
    }

    
    var password = $("#password").val();
    if (password.length < 8) {
        $("#error_password").text("Password must be at least 8 characters");
        valid = false;
    }

    
    if (!valid) {
        return false;
    }

    
    $.ajax({
        url: 'submit.php', 
        type: 'POST',
        data: {
            name: $("#name").val(),
            email: $("#email").val(),
            password: password
        },
        success: function(response) {
            alert("Data berhasil dikirim: " + response);
            // Reset form jika pengiriman sukses
            $("#myForm")[0].reset();
        },
        error: function() {
            alert("Terjadi kesalahan saat mengirim data.");
        }
    });

    
    return false;
}
</script>

</body>
</html>
