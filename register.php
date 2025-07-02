<?php
include('database/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $complain = $_POST['complain'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, gender, dob, contact, complain, password)
            VALUES ('$name', '$email', '$gender', '$dob', '$contact', '$complain', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Registration</title>
</head>
<body>

  <Center><h2>Registration</h2></center>
  <form action="register.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    
    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br>
    
    <label for="contact">Contact:</label>
    <input type="text" id="contact" name="contact" required><br>
    
    <label for="complain">Complain:</label>
    <textarea id="complain" name="complain" rows="4"></textarea><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    
    <input type="submit" value="Register">
	
	<button class="home-button" onclick="redirectToHome()">Go to Home</button>
 </form>
    <script>
        function redirectToHome()
		{
            window.location.href = 'index.php'; 
        }
    </script>
 
</body>
</html>
