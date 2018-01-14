<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
        
        .button 
        {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button-blue {background-color: #008CBA;} /* Blue */
        .button-red {background-color: #f44336;} /* Red */ 
        .button-gray {background-color: #e7e7e7; color: black;} /* Gray */ 
        .button-black {background-color: #555555;} /* Black */
    </style>
    
    <title>รายงานสถานะโครงการ</title>
</head>
<body>

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
    
</body>
</html>