<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
<link rel="stylesheet" type="text/css" href="./css/w3school.css">

</head>
<body>

<div class="container">

<?php
    include './layout/header.php';
    include './layout/nav.php';
    include './func_checklogin.php';
?>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->
<div>
<article>

    <div class="w3-container">
        <form method="post" action="user_add.php">
            <table class="w3-table">
                <tr>
                    <th colspan="2" aling="center">
                        <div align="center">
                            Create User
                        </div>
                    </th>
                </tr>

                <tr>
                    <td>รหัสผู้ใช้</td>
                    <td><input type="text" name="userid" id=""></td>
                </tr>

                <tr>
                    <td>รหัสผ่านผู้ใช้</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>

                <tr>
                    <td>รหัสผ่านผู้ใช้ (อีกครั้ง)</td>
                    <td>
                        <input type="password" name="password2" id="">
                    </td>
                </tr>

                <tr>
                    <td>ชื่อ</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>

                <tr>
                    <td>นาสกุล</td>
                    <td><input type="text" name="usersurname" id=""></td>
                </tr>

                <tr>
                    <td>ระดับสิทธิ</td>
                    <td>
                        <select name="permis">
                            <option value="1">Admin</option>
                            <option value="2">SuperUser</option>
                            <option value="3">User</option>
                            
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="" id="" value="บันทึก">
                            <button type="button" onclick="alert('Hello world!')">ยกเลิก</button>
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