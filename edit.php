<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit page</title>
    </head>
    <body>
    <?php
            $keyword = $_GET["suid"];
            //echo $keyword;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hospital";
            // echo $keyword;
                    // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        mysqli_set_charset($conn,"utf8");
        
        $sql = "SELECT * FROM `user` WHERE suuid ='$keyword' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {


                

                $ktype = $row ["sugender"];
            
                $kfullname = $row["suname"];
               
                $kage = $row ["suage"];
               
                $kbg = $row ["subloodgroup"];
               
                $kmr = $row ["sumedicalrights"];
              
                $knumber = $row ["sunumber"];
               
                $kmnb = $row ["sumobilenumber"];
               
                $kintro = $row ["suintro"];
            
            }
        }

                echo"<center><h2>แก้ไขข้อมูล ".$keyword."</h2></center>";
                echo "<form method=\"post\" action=\"update.php\">";
                echo "<input type=\"hidden\"  name=\"suid\" value=\"$keyword\">";

                echo "เพศ : <br />";
                if($ktype=="male"){
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\" checked> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\"> หญิง<br />";
                }else{
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\"> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\"checked> หญิง<br />";
                }
            
                    echo "ชื่อ-นามสกุล :<br />";
                    echo "<input type=\"text\" name=\"name\" value=\"$kfullname\" placeholder=\"ชื่อ\"/><br />";

                    echo "อายุ :<br/>";
                    echo "<input type=\"number\" id=\"age\" name=\"age\"value=\"$kage\"/><br />";

                    echo "Blood Group : <br />";
                    echo "<select name=\"bloodgroup\">";
                    if($kbg=="A"){
                    echo "<option value=\"A\"selected>A</option>";
                    echo "<option value=\"AB\">AB</option>";
                    echo "<option value=\"B\">B</option>";
                    echo "<option value=\"O\">O</option>";
                    echo "</select><br />";
                    }else if($kbg=="AB"){
                    echo "<option value=\"A\">A</option>";
                    echo "<option value=\"AB\"selected>AB</option>";
                    echo "<option value=\"B\">B</option>";
                    echo "<option value=\"O\">O</option>";
                    echo "</select><br />";
                    }    
                    if($kbg=="B"){
                        echo "<option value=\"A\">A</option>";
                        echo "<option value=\"AB\">AB</option>";
                        echo "<option value=\"B\"selected>B</option>";
                        echo "<option value=\"O\">O</option>";
                        echo "</select><br />";
                        }else if($kbg=="O"){
                        echo "<option value=\"A\">A</option>";
                        echo "<option value=\"AB\">AB</option>";
                        echo "<option value=\"B\">B</option>";
                        echo "<option value=\"O\"selected>O</option>";
                        echo "</select><br />";
                        }  
                            echo "สิทธิการรักษาพยาบาล : <br />";
                            echo "<select name=\"medicalrights\">";
                            if($kmr=="cash"){
                                echo "<option value=\"Cash\"selected>เงินสด</option>";
                                echo "<option value=\"CGD\">จ่ายตรงกรมบัญชีกลาง</option>";
                                echo "<option value=\"SSO\">ประกันสังคม</option>";
                                echo "<option value=\"National Health Security\">บัตรทองประกันสุขภาพ</option>";
                                echo "<option value=\"insurance\">ประกันภัยเอกชน</option>";
                                echo "</select><br />";
                            }else if($kmr=="CGD"){
                                echo "<option value=\"Cash\">เงินสด</option>";
                                echo "<option value=\"CGD\"selected>จ่ายตรงกรมบัญชีกลาง</option>";
                                echo "<option value=\"SSO\">ประกันสังคม</option>";
                                echo "<option value=\"National Health Security\">บัตรทองประกันสุขภาพ</option>";
                                echo "<option value=\"insurance\">ประกันภัยเอกชน</option>";
                                echo "</select><br />";
                            }  
                            if($kmr=="SSO"){
                                echo "<option value=\"Cash\">เงินสด</option>";
                                echo "<option value=\"CGD\">จ่ายตรงกรมบัญชีกลาง</option>";
                                echo "<option value=\"SSO\"selected>ประกันสังคม</option>";
                                echo "<option value=\"National Health Security\">บัตรทองประกันสุขภาพ</option>";
                                echo "<option value=\"insurance\">ประกันภัยเอกชน</option>";
                                echo "</select><br />";
                            }else if($kmr=="National Health Security"){
                                echo "<option value=\"Cash\">เงินสด</option>";
                                echo "<option value=\"CGD\">จ่ายตรงกรมบัญชีกลาง</option>";
                                echo "<option value=\"SSO\">ประกันสังคม</option>";
                                echo "<option value=\"National Health Security\"selected>บัตรทองประกันสุขภาพ</option>";
                                echo "<option value=\"insurance\">ประกันภัยเอกชน</option>";
                                echo "</select><br />";
                            }else{
                                echo "<option value=\"Cash\">เงินสด</option>";
                                echo "<option value=\"CGD\">จ่ายตรงกรมบัญชีกลาง</option>";
                                echo "<option value=\"SSO\">ประกันสังคม</option>";
                                echo "<option value=\"National Health Security\">บัตรทองประกันสุขภาพ</option>";
                                echo "<option value=\"insurance\"selected>ประกันภัยเอกชน</option>";
                                echo "</select><br />";
                            }

                            echo "เลขบัตรประชาชน :<br />";
                            echo "<input type=\"number\" name=\"number\"value=\"$knumber\"/><br />";

                            echo "เบอร์โทร :<br />";
                            echo "<input type=\"number\" name=\"mobilenumber\"value=\"$kmnb\"/><br />";

                            echo "อาการโรค :<br />";
                            echo "<textarea rows=\"6\" cols=\"50\" name=\"intro\"value=\"$kintro\"/></textarea><br />";
                        

                    echo "<input type=\"submit\" value=\"อัพเดทข้อมูล\">";
                    echo "<input type=\"reset\" value=\"เคลียร์\" />";
                    echo "</form>";
            ?>
    </body>
    </html>