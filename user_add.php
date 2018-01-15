<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
<link rel="stylesheet" type="text/css" href="./css/w3school.css">

</head>
<body>

<div class="container">

<?php
    include './layout/header.php';
    include './layout/nav.php';
?>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->
<div>
<article>

    <div class="w3-container">
        <form method="post" action="index.php">
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
                    <td><input type="text" name="" id=""></td>
                </tr>

                <tr>
                    <td>รหัสผ่านผู้ใช้</td>
                    <td><input type="password" name="" id=""></td>
                </tr>

                <tr>
                    <td>รหัสผ่านผู้ใช้ (อีกครั้ง)</td>
                    <td>
                        <input type="password" name="" id="">
                    </td>
                </tr>

                <tr>
                    <td>ชื่อ</td>
                    <td><input type="text" name="" id=""></td>
                </tr>

                <tr>
                    <td>นาสกุล</td>
                    <td><input type="text" name="" id=""></td>
                </tr>

                <tr>
                    <td>ระดับสิทธิ</td>
                    <td>
                        <select name="cars">
                            <option value="volvo">Admin</option>
                            <option value="saab">SuperUser</option>
                            <option value="fiat">User</option>
                            
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