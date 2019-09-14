<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charaset=UTF-8">
<title>入出庫管理</title>
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

$shipdate=$_POST['shipdate'];
$number=$_POST['number'];
$amount=$_POST['amount'];

$shipdate = htmlspecialchars($shipdate);
$number = htmlspecialchars($number);
$amount = htmlspecialchars($amount);

print '送信完了<br/>';
print '<a href="index.html"><input type="button" value="戻る"></a>';
$sql = 'INSERT INTO inf_dec (date_in , code_product , amount) VALUES ("'.$shipdate.'","'.$number.'","'.$amount.'")';

$stmt = $dbh-> prepare($sql);
$stmt -> execute();

$dbh = null;
}
catch (Exception $e)
{
    print 'ただいま障害により大変ご迷惑をおかけしております。';
}
?>

</body>
</html>