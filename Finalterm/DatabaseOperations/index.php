<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cruddb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$message = "";

if (isset($_POST['insert'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO CRUD (id, name, email) VALUES ('$id', '$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        $message = "New record inserted successfully";
        
    } else {
        $message = "Error: " . $conn->error;
    }
}


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE CRUD SET name='$name', email='$email' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        $message = "Record updated successfully";
    } else {
        $message = "Error: " . $conn->error;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    if (!empty($id)){
    $sql = "DELETE FROM CRUD WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        $message = "Record with id $id deleted successfully";
    }
    } else {
        $message = "Error: " . $conn->error;
    
    }
}

$searchResult = null;
if (isset($_POST['search'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
   
    $sql = "SELECT * FROM CRUD WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $searchResult = $result->fetch_assoc();
    } else {
        $message = "No record found with EMAIL $email";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
<h2>CRUD Operations</h2>
<h4>Delete or Search by just entering id.</h4>
<p style="color:green;"><?php echo $message; ?></p>

<form method="post">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">

    <br><br>
    <button type="submit" name="insert">Insert</button>
    <button type="submit" name="update">Update</button>
    <button type="submit" name="delete">Delete</button>
    <button type="submit" name="search">Search</button>
</form>

<?php if (!empty($searchResult)) { ?>
    <h3>Search Result</h3>
    ID: <?php echo $searchResult['id']; ?> <br>
    Name: <?php echo $searchResult['name']; ?> <br>
    Email: <?php echo $searchResult['email']; ?> <br>
<?php } ?>

<h3>All Records</h3>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Email</th></tr>
    <?php
    $sql = "SELECT * FROM CRUD";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                 </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }
    ?>
</table>
</body>
</html>
<?php $conn->close(); ?>