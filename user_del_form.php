<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="http://localhost/pj_army/css/mystyle.css">
<link rel="stylesheet" type="text/css" href="http://localhost/pj_army/css/w3school.css">

</head>
<body>


<div class="container">

<?php
    include './layout/header.php';
    include './layout/nav.php';
?>

<?php
    include 'db.php';
    $id = ($_GET['id']);
    
    
    $sql = "SELECT * FROM users WHERE user_id = '{$id}'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
            //$user_password = $result['user_password'];
            $user_name = $row['user_name'];
            $user_surname = $row['user_surname'];
        }
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("refresh:3; url=./user_management.php"); 
        exit(1);
    }

?>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->
<div>
<article>

    <div class="w3-container">
        <form method="post" action="http://localhost/pj_army/user_del.php">
            <table class="w3-table">
                <tr>
                    <th colspan="2" aling="center">
                        <div align="center">
                            ลบข้อมูลผู้ใช้
                        </div>
                    </th>
                </tr>

                <tr>
                    <td>รหัสผู้ใช้</td>
                    <td><input type="text" name="userid" readonly="true" value="<?php echo $user_id;  ?>"></td>
                    
                </tr>

                <tr>
                    <td>ชื่อ</td>
                    <td><input type="text" name="username" readonly="true" id="" value="<?php echo $user_name;  ?>"></td>
                </tr>

                <tr>
                    <td>นาสกุล</td>
                    <td><input type="text" name="usersurname" readonly="true" id="" value="<?php echo $user_surname; ?>" ></td>
                </tr>

                
                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="" id="" value="ยืนยัน">
                            <button type="button" onclick="alert('Hello world-*-!')">ยกเลิก</button>
                        </div>
                    </td>
                </tr>
            
            </table>


        </form>
        
    </div>

        
    </table>
    

</article>
</div>



<!-- +++++++++++++++++ Content +++++++++++++++++ -->

<?php
    include './layout/foot.php';
?>



</div>

</body>
</html>