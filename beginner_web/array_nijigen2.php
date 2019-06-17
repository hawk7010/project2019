<?php
$array = array(
    0=>array(
        'name'=>'鈴木',
        'hobby'=>'テニス',
        'email'=>'sample@sample.com'
    ),
    1=>array(
        'name'=>'山田',
        'hobby'=>'パソコン',
        'email'=>'sample2@sample2.com'
    ),
    2=>array(
        'name'=>'斎藤',
        'hobby'=>'水泳',
        'email'=>'sample3@sample3.com'
    )
);

//cho $array[1]['name'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>array_nijigen2.php</title>
</head>
<body>
<table border="1">
<tr><th>名前</th><th>趣味</th><th>メールアドレス</th></tr>
<?php foreach($array as $var) {?>
<tr><td><?php echo $var['name']; ?></td><td><?php echo $var['hobby']; ?></td><td><?php echo $var['email']; ?></td>
<?php } ?>
</table>
</body>
</html>