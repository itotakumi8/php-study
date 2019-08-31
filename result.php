<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charaset=UTF-8">
<title>入出庫管理</title>
</head>
<body>
<?php
$pc = $_POST['code_product'];

$dsn = 'mysql:dbname=shipphp;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh -> query('SET NAMES utf8');

$sql = 'SELECT * FROM inf_dec WHERE code_product =?';
$stmt = $dbh -> prepare ($sql);
$data[] = $pc; 
$stmt -> execute($data);

if($pc == ""){
    print '製品コードが入力されていません。<br/><br/>';
} else {
while(1)
{
    $rec = $stmt -> fetch (PDO::FETCH_ASSOC);
    if($rec == false)
    {
        break;
    }
    print '製品コード：';
    print $rec['code_product'];
    print '<br/>出荷数量：';
    print $rec['amount'];
    print '<br/><br/>';
}

$dbh = null;
};

print '<input type = "submit" onclick = "history.back()" value = "検索画面へ戻る"> ';
print '<a href="index.html"><input type = "button" value = "メニュー画面に戻る"></a>';
?>
</body>
</html>