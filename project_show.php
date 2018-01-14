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
?>

<!-- +++++++++++++++++ Content +++++++++++++++++ -->

<article>
  
      <label>กรุณากดเลือก รายการ/โครงการ</label>

      <table id="customers">
         <tr>
             <th>ลำดับ</th>
             <th>รายการ/โครงการ</th>
         </tr>

         <tr>
             <td align="center">1</td>
             <td><a href="./project_show.php">จัดซื้อวัสดุสำนักงาน งวดที่ 1 จำนวน 60 รายการ</a></td>
             
         </tr>

         <tr>
             <td align="center">2</td>
             <td>จ้างปรับปรุงอาคารและสถานที่ จำนวน 2 จุด</td>
         </tr>

         <tr>
             <td align="center">3</td>
             <td>ช่อมรถยนต์ส่วนกลาง กห 0070 จำนวน 2 รายการ</td>
         </tr>

         <tr>
             <td align="center">4</td>
             <td>จัดซื้อคอมพิวเตอร์ (โน็ตบุ๊ค) จำนวน 10 เครื่อง</td>
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
