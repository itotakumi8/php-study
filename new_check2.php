<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charaset=UTF-8">
<title>入出庫管理</title>
</head>
<body>

<?php
$shipdate = $_POST['shipdate'];
$number = $_POST['number'];
$amount = $_POST['amount'];

$shipdate = htmlspecialchars($shipdate);
$number = htmlspecialchars($number);
$amount = htmlspecialchars($amount);

if( $shipdate == '')
{
    print '入荷日が入力されていません<br/>';
}
else
{
    print '入荷日：';
    print $shipdate;
    print '<br/>';
}

if( $number == '')
{
    print '製品コードが入力されていません<br/>';
}
else
{
    print '製品コード：';
    print $number;
    print '<br/>';
}

if( $amount == '')
{
    print '数量が入力されていません<br/>';
}
else
{
    print '数量『';
    print $amount;
    print '』<br/>';
}

if ($shipdate==''||$number==''||$amount=='')
{
    print '<form method="POST" action="new_thanks2.php">';
    print '<input type="button" onclick="history.back()"value="戻る">';
    print '</form>'; 
}
else
{
    print '<form method="POST" action="new_thanks2.php">';
    print '<input name = "shipdate" type="hidden" value="'.$shipdate.'">';
    print '<input name = "number" type="hidden" value="'.$number.'">';
    print '<input name = "amount" type="hidden" value="'.$amount.'">'.'<br/>';
    print '以上の内容を送信します'.'<br/>';
    print '<input type="button" onclick="history.back()"value="戻る">';
    print '<input type="submit" value="ＯＫ">';
    print '</form>';
}
?>

</body>
</html>