<?php
   
    include 'db.php';

    
    $project_title      = $_POST['project_title'];      //หน่วยเสอนความต้องการ
    $book_no            = $_POST['book_no'];            //ที่หนังสือ
    $date_at            = $_POST['date_at'];            //ลงวันที่
    $check_budget       = $_POST['check_budget'];       //ตรวจสอบงบประมาณเมื่อ
    $budget             = $_POST['budget'];             //เป็นเงิน
    $principle_allow    = $_POST['principle_allow'];    //อนุมัติหลักการ เมื่อ
    $buy_accept         = $_POST['buy_accept'];         //อนุมัติซื้อ-จ้าง เมื่อ
    $check_form         = $_POST['check_form'];         //ตรวตร่าง นธน.ฯ
    $order_no           = $_POST['order_no'];           //ใบสั่งซื้อ-สั่งจ้าง ที่
    $order_date         = $_POST['order_date'];         //ลงวันที่(ใบสั่งซื้อ-สั่งจ้าง)
    $order_deadline     = $_POST['order_deadline'];     //กำหนดส่งมอบ (ใบสั่งซื้อ-สั่งจ้าง)
    $promise_no         = $_POST['promise_no'];         //สัญญาซื้อ-จ้าง ที่
    $promise_date       = $_POST['promise_date'];       //ลงวันที่ (สัญญาซื้อ-จ้าง)
    $promise_deadline   = $_POST['promise_deadline'];   //กำหนดส่งมอบ (สัญญาซื้อ-จ้าง) 
    $binding_statement  = $_POST['binding_statement'];  //ผูกพันงบประมาณ
    $check_accept       = $_POST['check_accept'];       //ตรวจรับ เมื่อ
    $send_withdraw      = $_POST['send_withdraw'];      //ส่งขอเบิกเงิน เมื่อ

    $sql = "insert into PROJECT (`project_title`, `book_no`, `date_at`, `check_budget`, `budget`, `principle_allow`, `buy_accept`, `check_form`, `order_no`, `order_date`, `order_deadline`, `promise_no`, `promise_date`, `promise_deadline`, `binding_statement`, `check_accept`, `send_withdraw`)
                    VALUES({$project_title},
                            $book_no,
                            $date_at         ,
                            $check_budget    ,
                            $budget          ,
                            $principle_allow ,
                            $buy_accept      ,
                            $check_form      ,
                            $order_no        ,
                            $order_date      ,
                            $order_deadline  ,
                            $promise_no      ,
                            $promise_date    ,
                            $promise_deadline,
                            $binding_statement,
                            $check_accept    ,
                            $send_withdraw    ) ";

                            if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


    echo $project_title     . '<br>';
    echo $book_no           . '<br>';
    echo $date_at           . '<br>';
    echo $check_budget      . '<br>';
    echo $budget            . '<br>';
    echo $principle_allow   . '<br>';
    echo $buy_accept        . '<br>';
    echo $check_form        . '<br>';
    echo $order_no          . '<br>';
    echo $order_date        . '<br>';
    echo $order_deadline    . '<br>';
    echo $promise_no        . '<br>';
    echo $promise_date      . '<br>';
    echo $promise_deadline  . '<br>';
    echo $binding_statement . '<br>';
    echo $check_accept      . '<br>';
    echo $send_withdraw     . '<br>';


?>