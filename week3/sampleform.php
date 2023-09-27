<!-- <!doctype html>
<html lang="en">
    <head>
        <title>Form-Database Tutorial</title>
    </head>
    <body>
        <h1>Provide us your feedback!!</h1>
        <form action="/form/sampleform.php" method="post">
            <label for="serialNumber">Serial Number</label>
            <input type="text" name="serialNumber" id="serialNumber"><br/>
            <label for="fullName">Full Name</label>
            <input type="text" name="fullName" id="fullName"><br/>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"><br/>
            <label for="description">Description</label>
            <input type="text" name="description" id="description"><br/>
            <button type="submit">SUBMIT</button>
        </form>
 
        <?php
            // if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            //     $serialNumber=$_POST['serialNumber'];/*first "fname" belong to server, second name="fname" belong to name*/
            //     $fullName=$_POST['fullName'];
            //     $email=$_POST['email'];
            //     $description=$_POST['description'];


                // Database Connectivity
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "contacts";

                // Creating a connection
                $conn = mysqli_connect($servername, $username, $password, $database);

                // Check connection
                if (!$conn) {
                    die("Sorry, connection failed!!" . mysqli_connect_error());
                } else {
                    // Submit the insertion queries/data to the database
                    $sql="INSERT INTO `test` (`serialNumber`, `fullName`, `email`, `description`) 
                    VALUES ('$serialNumber', '$fullName', '$email', '$description')";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        echo "Data inserted successfully";
                    } else {
                        echo "Data not inserted due to " . mysqli_error($conn);
                    }

                    // Close the connection
                    mysqli_close($conn);
            }

                
             /*   //find the number of records in the table
                $num=mysql_num_rows($result);
                echo "<br/>";
                echo $num;  
                
                //Display the records using if statement
                if($num>0)
                {
                    $row=mysql_fetch_assoc($result);
                    echo "<br/>";
                    echo var_dump($row);
                }
                
                //display records using while statement
                while($row=mysql_fetch_assoc($result));
                {
                    echo "Here is the records in the table";
                    echo "<br/>";
                    echo "first name: " .$row['fname'],"last name is " .$row['lname'];
                    echo "<br/>";
                } */


            

        



        ?>
    </body>
</html>


