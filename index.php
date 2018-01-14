<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <title>ระบบงานจัดการฐานข้อมูลจัดซื้อ-จัดจ้างโรงงานวัตถุระเบิดทหาร</title>
</head>

<body>
    <div class="outer">
        <div class="middle">
            <div class="inner">
                <form method="post" action="checklogin.php">
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
                                <input class="button button-blue" type="submit" value="Login">
                                <span name="cancle" id="cancle" class="button button-red">cancle</span>        
                            </td>
                        </tr>    
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>