<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
</head>
<body>

<div class="container">

<?php
    include './layout/header.php';
    include './layout/nav.php';
?>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->


    <table style="width:60%" align="center">
        <tr>
            <td colspan="3" >รายงานสถานะของ รายการ / โครงงาน</td>
        </tr>

        <tr>
            <td style="width:30%">หน่วนเสนอความต้องการ :</td>
            <td style="width:35%" >
                <input type="text">
            </td>
            <td style="width:35%"></td>
        </tr>

        <tr>
            <td >ที่หนังสือ : </td>
            <td ><input type="text"> </td>
            <td>ลงวันที่ : <input type="text"> </td>
            
        </tr>

        <tr>
            <td>ตรวจสอบงบประมาณ เมื่อ </td>
            <td> <input type="text"></td>
            <td>เป็นเงิน <input type="text"> บาท</td>
        </tr>

        <tr>
            <td>อนุมัติหลักการ เมื่อ</td>
            <td> <input type="text"></td>
        </tr>

        <tr>
            <td>อนุมัติซื้อ - จ้าง เมื่อ</td>
            <td> <input type="text"></td>
        </tr>

        <tr>
            <td>ตรวจร่าง นธน.ฯ  เมื่อ</td>
            <td> <input type="text"></td>
        </tr>
    </table>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->

<?php
    include './layout/foot.php';
?>



</div>

</body>
</html>