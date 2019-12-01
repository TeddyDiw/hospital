<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    mysqli_set_charset($conn,"utf8");
    $gender = $_POST["gender"];
    //echo $province;
    //echo "<br/";
    echo "<table style=\"width:50%\" cellspacing=\"0\" border=\"1\"bgcolor=\"#ffcc33\">";
    echo "<tr>";
    echo "<th> ลำดับที่</th>";
    echo "<th> gender</th>";
    echo "<th> medicalrights</th>";
    echo "<th> bloodgroup</th>";
  echo "</tr>";
    //$sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sufavcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมศรี', 'กาญจนบุรี', '#00f00', '5', '12345', '9876543210','Hello')";
    //$sql = "SELECT suuid, suname, suprovince FROM user";
    $sql = "SELECT * FROM user Where sugender='$gender'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["suuid"]. " - Name: " . $row["suname"]. " - province: " . $row["suprovince"]. "<br>";
        if($row["suuid"]%2==0){
        echo "<tr>";
        echo "<td bgcolor=\"#000000\"> <font color=\"#ffffcc\"><center>". $row["suuid"]."</center></td>";
        echo "<td bgcolor=\"#000000\"> <font color=\"#ffffcc\">". $row["sugender"]."</font> </td>";
        echo "<td bgcolor=\"#000000\"> <font color=\"#ffffcc\">". $row["sumedicalrights"]."</font> </td>";
        echo "<td bgcolor=\"#000000\"> <font color=\"#ffffcc\"><center>". $row["subloodgroup"]."<center></td>";
        echo "</tr>";
        }else{
        echo "<td bgcolor=\"#ffffff\"> <font color=\"#000000\"><center>". $row["suuid"]."</center></td>";
        echo "<td bgcolor=\"#ffffff\"> <font color=\"#000000\">". $row["sugender"]."</font> </td>";
        echo "<td bgcolor=\"#ffffff\"> <font color=\"#000000\">". $row["sumedicalrights"]."</font> </td>";
        echo "<td bgcolor=\"#ffffff\"> <font color=\"#000000\"><center>". $row["subloodgroup"]."<center></td>";
        echo "</tr>";   
        }
    }
    } else {
    echo "0 results";
    }
    echo "</table>";
    $conn->close();
    echo"<a href=\"http://localhost/hospital/formhospital.html\">หน้าฟอร์ม</a>";
?>