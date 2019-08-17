<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charaset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
try
{
    $dsn = 'mysql:dbname=shipphp;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh -> query('SET NAMES utf8');
    
    $shipdate = $_POST['shipdate'];
    $number = $_POST['number'];
    $amount = $_POST['amount'];

    $shipdate = htmlspecialchars($shipdate);
    $number = htmlspecialchars($number);
    $amount = htmlspecialchars($amount);
    
    print $shipdate;
    print $number;
    print $amount."</br>";
    
    print "送信完了</br></br>";
    print '<a href = "input.html"><input type = "button" value="戻る"></a>';  
    
    $sql = 'INSERT INTO inf_dec (outdate, code_product, amount) VALUES ("'.$shipdate.'", "'.$number.'",  "'.$amount.'")';
    $stmt = $dbh->prepare($sql);
    $stmt-> execute();
    
    $dbh = null;  
}
catch(Exception $e)
{
    print 'ただいま障害により大変ご迷惑をおかけしております';
}
?>
</body>
</html>