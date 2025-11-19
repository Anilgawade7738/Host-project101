<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script>
        function validateForm() {
           
            return true; // Return false if validation fails
        }
    </script>
</head>
<body>
    <h1>Register</h1>
    <form action="insert.php" method="POST" onsubmit="return validateForm()">
        <input type="text" name="name" placeholder="Name" required minlength="3"></br>
        <input type="email" name="email" placeholder="Email" required></br>
        <input type="password" name="password" placeholder="Password" required minlength="6">
        </br>
        <input type="text" name="phone" placeholder="Phone" required pattern="\d{10,}"></br>
        <input type="text" name="department" placeholder="Department" required></br>
        <button type="submit">Register</button></br>
    </form>
</body>
</html>