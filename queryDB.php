 <?php
 $servername = "127.0.0.1";
 $username = "root";
 $password = "123456";
 $dbname = "m34DB";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully";
 $dID = $_GET['dID'];

 $sql = "SELECT img FROM photo where dID = '$dID'" ;

 $result = $conn->query($sql);

 //header("Content-type: image/jpeg");

 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row) .'" />';
     }
 } else {
     echo "No photos";
 }
 
 $conn->close();


