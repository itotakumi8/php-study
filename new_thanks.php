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

$shipdate=$_POST['shipdate'];
$number=$_POST['number'];
$amount=$_POST['amount'];

$shipdate = htmlspecialchars($shipdate);
$number = htmlspecialchars($number);
$amount = htmlspecialchars($amount);

//print $shipdate;
//print '様<br/>';
// 'ご意見ありがとうございました<br/>';
//print 'いただいたご意見『';
//print $amount;
//print '』<br/>';
//print $amount;
//print 'にメールを送りましたのでご確認ください。<br/>';

print '送信完了<br/>';
print '<a href="index.html"><input type="button" value="戻る"></a>';

//$mail_sub='アンケートを受け付けました';
//$mail_body=$nickname."様へ\nアンケートご協力ありがとうございました。";
//$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
//$mail_head='From:xxx@xxx.co.jp';
//mb_language('Japanese');
//mb_internal_encoding("UTF-8");
//mb_send_mail($email,$mail_sub,$mail_body,$mail_head);
// '<a href="index.html"><input type="button" value="戻る"></a>';

$sql = 'INSERT INTO inf_dec (date_out , code_product , amount) VALUES ("'.$shipdate.'","'.$number.'","'.$amount.'")';
//$sql = 'INSERT INTO anketo (nickname , email , goiken) VALUES ("'.$shipdate.'","'.$amount.'","'.$amount.'")';
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