<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $semester_fee = 16000;
        $discount = 0.5;
        $u_discount = 0.2;

        $fee_after_u_discount = $semester_fee * (1 - su_discount);
        echo $fee_after_u_discount 
    ?>
</body>
</html>