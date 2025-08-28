<!DOCTYPE html>
<html lang="en">
<head>
    <title>A Basic Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to our Registration Form</h1>
        <p>Enter your details and submit the form.</p>

        <form action="index.php" method="post">
            
            <input type="text" id="name" name="name" placeholder="Enter your name..." required>
            
            <input type="number" id="age" name="age" placeholder="Enter your age..." min="1" max="120" required>
            
            <input type="number" id="mobile" name="mobile" placeholder="Enter your mobile number..." pattern="[0-9]{11}" required>
            
            <input type="email" id="email" name="email" placeholder="Enter your Email..." required>
            
            <div class="gender-field">
                <!-- <label>Gender:</label> -->
                <select name="gender" id="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <!-- <input type="password" id="password" name="password" placeholder="Enter your password..." required> -->
            
            <textarea name="desc" id="desc" placeholder="You can tell us about any other info here..."></textarea>

            <input class="btn" type="submit" value="Submit">
            <input class="btn" type="reset" value="Reset">
        </form>

    </div>

    <script src="script.js"></script>
</body>
</html>