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

    <title>ระบบงานจัดการฐานข้อมูลจัดซื้อ-จัดจ้างโรงงานวัตถุระเบิดทหาร</title>
</head>

<body>
    <form method="post" action="checklogin.php">
        <table style="width:20%" align="center">
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
                    <input class="button button-blue" type="submit" value="Login">
                    <span name="cancle" id="cancle" class="button button-red">cancle</span>        
                </td>
            </tr>    
        </table>
    </form>
</body>
</html>