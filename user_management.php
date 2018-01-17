
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
<link rel="stylesheet" type="text/css" href="./css/table.css">



</head>
<body>

<div class="container">

<?php
    include './layout/header.php';
    include './layout/nav.php';
    
    include 'db.php';
    /*
    if(isset($_COOKIE['userid']) && isset($_COOKIE['password'])){
        $userid = $_COOKIE['userid'];
        $password = $_COOKIE['password']);

        $sql = "SELECT * FROM users WHERE user_id = '{$userid}' and user_password = '{$password}'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        }
    }
    */
    echo "echo === {$_SESSION['userid']} <br>";
    echo "Cookie === {$_COOKIE['userid']} <br>";
    if(!isset($_SESSION['userid'])) {
      // echo "<fieldset>";
       echo "<h2>ท่านยังไม่ได้เข้าสู่ระบบ</h2>";
      // echo "<a href='./index.php'>เข้าสู่ระบบ";
      // echo "</fieldset>";
      header( "refresh:3; url=./index.php" ); 
        exit(1);
    } else {
        echo "เข้าสู่ระบบเรียบร้อยแล้ว!!";
    }

    //unset($_SESSION['userid']);

?>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->

<article>
  
      <label>User Management</label>
      <br>

      <?php
        //$sql  = "SELECT user_id, user_name, user_surname,  FROM users";
        $sql  = "SELECT users.user_id, users.user_name, users.user_surname, permission.permission_title 
                 FROM users
                 INNER JOIN permission ON users.permission_id = permission.permission_id";

       // SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
//FROM Orders
//INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table id='customers'>
                    <tr>
                        <th>UserID</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ระดับสิทธิ์</th>
                        <th colspan='2'>แก้ไข/ลบ</th>
                    </tr>";

                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr>
                                <td>{$row['user_id']}</td>
                                <td>{$row['user_name']} </td>
                                <td>{$row['user_surname']}</td>
                                <td>{$row['permission_title']}</td>
                                <td>
                                    <a href='./user_edit_form.php/?id={$row['user_id']}'>แก้ไข</a>
                                                         
                                </td>
                                <td>
                                    <a href='./user_del_form.php/?id={$row['user_id']}'>ลบ</a> 
                                </td>
                              </tr>";
                    }
            echo "</table>";
        } else {
            echo "0 results";
        }
      ?>
      

      <li><a href="./user_add_form.php">เพิ่ม ผู้ใช้งาน</a></li>
      <hr>
      
      
  
</article>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->

<?php
    include './layout/foot.php';
?>



</div>

</body>
</html>
