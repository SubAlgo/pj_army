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
        <form action="index.php">
            <table class="w3-table">
            
                <tr>
                    <td >หน่วนเสนอความต้องการ</td>
                    <td colspan="4"><input type="text" name="" id=""></td>
                </tr>

                <tr>
                    <td>ที่หนังสือ</td>
                    <td><input type="text" name="" id=""></td>
                    <td>ลงวันที่</td>
                    <td colspan="3"><input type="text" name="" id=""></td>
                </tr>
                
                <tr>
                    <td>ตรวจสอบงบประมาณ</td>
                    <td><input type="text" name="" id=""></td>
                    <td colspan="4">บาท</td>
                </tr>

                <tr>
                    <td>อนุมัติหลักการ เมื่อ</td>
                    <td colspan="4"><input type="date" name="" id=""></td>
                </tr>

                <tr>
                    <td>ตรวจร่าง นธน. ฯ เมื่อ</td>
                    <td colspan="4"><input type="date" name="" id=""></td>
                </tr>

                <tr>
                    <td>ใบสั่งซื้อ - สั่งจ้าง ที่ </td>
                    <td><input type="text" name="" id=""></td>
                    <td>ลงวันที่</td>
                    <td><input type="date" name="" id=""></td>
                    <td >กำหนดส่งมอบ <input type="text" name="" id=""> วัน</td>
                </tr>

                <tr>
                    <td>สัญญาซื้อ - สั่งจ้าง ที่ </td>
                    <td><input type="text" name="" id=""></td>
                    <td>ลงวันที่</td>
                    <td><input type="date" name="" id=""></td>
                    <td>กำหนดส่งมอบ <input type="text" name="" id=""> วัน</td>
                </tr>

                <tr>
                    <td>ผูกพันงบประมาณ เมื่อ</td>
                    <td colspan="4"><input type="date" name="" id=""></td>
                </tr>

                <tr>
                    <td>ตรวจรับ เมื่อ</td>
                    <td colspan="4"><input type="date" name="" id=""></td>
                </tr>

                <tr>
                    <td>ส่งขอเบิกเงิน เมื่อ</td>
                    <td colspan="4"><input type="date" name="" id=""></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <div align="center" >
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