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
        <form method="post" action="./project_add.php">
            <table class="w3-table">
            
                <tr>
                    <td >หน่วนเสนอความต้องการ</td>
                    <td colspan="4"><input type="text" name="project_title" id=""></td>
                </tr>

                <tr>
                    <td>ที่หนังสือ</td>
                    <td><input type="text" name="book_no" id=""></td>
                    <td>ลงวันที่</td>
                    <td colspan="3"><input type="date" name="date_at" id=""></td>
                </tr>
                
                <tr>
                    <td>ตรวจสอบงบประมาณ เมื่อ</td>
                    <td><input type="date" name="check_budget" id=""></td>
                    <td>เป็นเงิน </td>
                    <td><input type="text" name="budget" id=""> บาท</td>
                    
                </tr>

                <tr>
                    <td>อนุมัติหลักการ เมื่อ</td>
                    <td><input type="date" name="principle_allow" id=""></td>
                    <td colspan="2">อนุมัติซื้อ-จ้าง เมื่อ <input type="date" name="buy_accept" id=""></td>
                    
                </tr>

                <tr>
                    <td>ตรวจร่าง นธน. ฯ เมื่อ</td>
                    <td colspan="4"><input type="date" name="check_form" id=""></td>
                </tr>

                <tr>
                    <td>ใบสั่งซื้อ - สั่งจ้าง ที่ </td>
                    <td><input type="text" name="order_no" id=""></td>
                    <td>ลงวันที่</td>
                    <td><input type="date" name="order_date" id=""></td>
                    <td >กำหนดส่งมอบ <input type="text" name="order_deadline" id=""> วัน</td>
                </tr>

                <tr>
                    <td>สัญญาซื้อ - สั่งจ้าง ที่ </td>
                    <td><input type="text" name="promise_no" id=""></td>
                    <td>ลงวันที่</td>
                    <td><input type="date" name="promise_date" id=""></td>
                    <td>กำหนดส่งมอบ <input type="text" name="promise_deadline" id=""> วัน</td>
                </tr>

                <tr>
                    <td>ผูกพันงบประมาณ เมื่อ</td>
                    <td colspan="4"><input type="date" name="binding_statement" id=""></td>
                </tr>

                <tr>
                    <td>ตรวจรับ เมื่อ</td>
                    <td colspan="4"><input type="date" name="check_accept" id=""></td>
                </tr>

                <tr>
                    <td>ส่งขอเบิกเงิน เมื่อ</td>
                    <td colspan="4"><input type="date" name="send_withdraw" id=""></td>
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