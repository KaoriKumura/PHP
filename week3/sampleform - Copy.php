<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form-Database Tutorial</title>
</head>
<body>
    <h1>Provide us your feedback!!</h1>
    <form action="/form/sampleform.php" method="post">
        <label for="serialNumber">First Name</label>
        <input type="text" name="fname" id="fname"><br>
        <label for="fullName">Last Name</label>
        <input type="text" name="lname" id="lname"><br>
        <label for="fullName">Last Name</label>
        <input type="text" name="lname" id="lname"><br>
        <label for="fullName">Last Name</label>
        <input type="text" name="lname" id="lname"><br>
        <button type="submit">SUBMIT</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        // Database Connectivity
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";

        // Creating a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Sorry, connection failed: " . mysqli_connect_error());
        } else {
            // Submit the insertion queries/data to the database
            $sql = "INSERT INTO `formdemo` (`fname`, `lname`) VALUES ('$fname', '$lname')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Data inserted successfully";
            } else {
                echo "Data not inserted due to " . mysqli_error($conn);
            }

            // Close the connection
            mysqli_close($conn);
        }
    }
    ?>
</body>
</html>
