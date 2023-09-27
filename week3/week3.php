<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form-Database Tutorial</title>
    </head>
    <body>
        <h1>Provide us your feedback!!</h1>
        <form action="/week3/week3.php" method="post">
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
        if($_SERVER['REQUEST_METHOD']='POST')
        {
            $serialNumber=$_POST['serialNumber'];/*first "fname" belong to server, second name="fname" belong to name*/
            $fullName=$_POST['fullName'];
            $email=$_POST['email'];
            $description=$_POST['description'];

            //Database Connectivity
            $servername="localhost";
            $username="root";
            $password="";
            $database="contacts";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            if(!$conn)
            {
                die("Sorry, connection failed!" .mysqli_connect_error());
            }
            else
            {
                $sql="INSERT INTO `test` (`serialNumber`, `fullName`, `email`, `description`) VALUES ('$serialNumber', '$fullName', '$email', '$description')";
                $result=mysqli_query($conn,$sql);

                if($result)
                {
                    echo "Data inserted successfully";
                }
                else
                {
                    echo "Data not inserted due to  ".mysqli_error($conn);
                }
            }
        }


        ?>

    </body>
</html>