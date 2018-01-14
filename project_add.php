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

<article>
    <div>
        <span>กรุณาบันทึกข้อมูล</span>
    </div>

    <div>
        หน่วนเสนอความต้องการ  
        <input type="text" name="" id="">
    </div>

    <div id="t1">
        <p>
            ที่หนังสือ  <input type="text" name="" id="">   ลงวันที่    <input type="date" name="" id="">
        </p>

        <p>
            ตรวจสอบงบประมาณ <input type="text" name="" id=""> บาท
        </p>

        <p>
            อนุมัติหลักการ เมื่อ    <input type="date" name="" id="">
        </p>
    </div>

   

    <div>
        

        อนุมัติ ซื้อ-จ้าง เมื่อ 
        <input type="date" name="" id="">
    </div>

    <div>
        ตรวจร่าง นธน. ฯ เมื่อ 
        <input type="date" name="" id="">
    </div>

    <div>
        ใบสั่งซื้อ - สั่งจ้าง ที่ 
        <input type="text" name="" id="">

        ลงวันที่ 
        <input type="date" name="" id="">
    </div>

    <div>
        สัญญาซื้อ - จ้าง ที่ 
        <input type="text" name="" id="">

        ลงวันที่
        <input type="date" name="" id="">
    </div>

    <div>
        ผูกพันงบประมาณ เมื่อ
        <input type="date" name="" id="">
    </div>

    <div>
        ตรวจรับ เมื่อ
        <input type="date" name="" id="">
    </div>

    <div>
        ส่งขอเบิกเงิน เมื่อ
        <input type="date" name="" id="">
    </div>


    <table style="width:60%" align="center">
        <tr>
            <td colspan="3" >รายงานสถานะของ รายการ / โครงงาน</td>
        </tr>

        <tr>
            <td colspan="3" >กรุณาบันทึกข้อมูล</td>
        </tr>        

        <tr>
            <td style="width:30%">หน่วนเสนอความต้องการ :</td>
            <td colspan="2">
                <input type="text" name="" id="">
            </td>
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
            <td colspan="2"> <input type="text"></td>
        </tr>

        <tr>
            <td>ตรวจร่าง นธน.ฯ  เมื่อ</td>
            <td colspan="2"> <input type="text"></td>
        </tr>

        <tr>
            <td>ใบสั่งซื้อ - สั่งจ้าง ที่</td>
            <td> <input type="text" name="" id=""></td>
            <td>ลงวันที่ <input type="date" name="" id=""></td>
        </tr>

        <tr>
            <td>สัญญาซื้อ - จ้าง ที่</td>
            <td> <input type="text" name="" id=""></td>
            <td>ลงวันที่ <input type="date" name="" id=""></td>
        </tr>

        <tr>
            <td>ผูกพันงบประมาณ เมื่อ</td>
            <td colspan="2"><input type="date" name="" id=""></td>
        </tr>

        <tr>
            <td>
                ตรวจรับ เมื่อ
            </td>
            <td colspan="2"><input type="date" name="" id=""></td>
        </tr>

        <tr>
            <td>ส่งขอเบิกเงิน เมื่อ</td>
            <td colspan="2"><input type="date" name="" id=""></td>
        </tr>
        
    </table>

</article>


<!-- +++++++++++++++++ Content +++++++++++++++++ -->

<?php
    include './layout/foot.php';
?>



</div>

</body>
</html>