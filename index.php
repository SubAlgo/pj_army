<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="./css/w3school.css">
    <title>ระบบงานจัดการฐานข้อมูลจัดซื้อ-จัดจ้างโรงงานวัตถุระเบิดทหาร</title>
</head>

<body>
 <ul>
    <li><a href="./index.php">หน้า Login</a></li>
    <hr>
    <li><a href="./project_show.php">แสดง รายการ/โครงการ</a></li>
    <hr>
    <li><a href="./project_add_form.php">เพิ่ม รายการ/โครงการ</a></li>
    <hr>
    <li><a href="./user_add_form.php">เพิ่ม ผู้ใช้งาน</a></li>
    <hr>
    <li><a href="./user_management.php">จัดการผู้ใช้</a></li>
    <hr>
    
  </ul>
 
  <div class="outer">
        <div class="middle">
            <div class="inner">
                <form method="post" action="user_check.php">
                    <table align="center">
                        <tr>
                            <td colspan="2" align='center'>LOGIN</td>
                        </tr>
                        
                        <tr>
                            <td>Username :</td>
                            <td>
                                <input type="text" name="username">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Password :</td>
                            <td>
                                <input type="password" name="password">
                            </td>        
                        </tr>

                        
                        <tr>
                            <td colspan="2" align="center">
                                <br>
                                <input type="submit" value="Login">
                                <button type="button" onclick="alert('cancle login')">cancle</button>
                                      
                            </td>
                        </tr>    
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>