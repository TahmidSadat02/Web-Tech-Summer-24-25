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
            
            <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number..." pattern="[0-9]{11}" required>
            
            <input type="email" id="email" name="email" placeholder="Enter your Email..." required>
            
            <div class="gender-field">
                <select name="gender" id="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <textarea name="desc" id="desc" placeholder="You can tell us about any other info here..."></textarea>

            <input class="btn" type="submit" value="Submit">
            <input class="btn" type="reset" value="Reset">
        </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $server = "localhost";
        $username = "root";
        $password = ""; // no space here
        $database = "web_form"; 

        // Create connection
        $con = mysqli_connect($server, $username, $password, $database);

        if(!$con){
            die("Connection to this database failed: ". mysqli_connect_error());
        }

        // Collect form data safely
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $age = (int) $_POST['age'];
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $desc = mysqli_real_escape_string($con, $_POST['desc']);

        // Insert query (serial auto-increments)
        $sql = "INSERT INTO `form` (`name`, `age`, `mobile no.`, `email`, `gender`, `info`, `date`) 
                VALUES ('$name', '$age', '$mobile', '$email', '$gender', '$desc', current_timestamp())";

        if ($con->query($sql) === TRUE) {
            header("Location: display.php?msg=success");
            exit();
        } else {
            echo "ERROR: $sql <br> " . $con->error;
        }

        $con->close();
    }
    ?>
    </div>
</body>
</html>
