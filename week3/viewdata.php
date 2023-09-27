
<?php
//Database Connectivity
            $servername="localhost";
            $username="root";
            $password="";
            $database="contacts";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                echo "Connection Sucessfull";
            }

            $sql="SELECT * FROM `test`";
            $result=mysqli_query($conn, $sql);

            //Find the number of records in the table
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;

            //Display the records using if statement

            if($num>0)
            {
                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
                echo "<br/>";

                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
            }
            
            //display records using while statement

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<br/>";
                echo "Here is the records in the Table";
                echo "<br/>";

                echo "Serial number: " . $row['serialNumber'] . "Full name: " . $row['fullName'] . "email: " . $row['email'] . "Description: " . $row['description'];
                echo "<br/>";
            }

            


?>
