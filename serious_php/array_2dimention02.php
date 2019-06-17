<?php
$array = array(
  0 => array(
    'name' => '鷹觜',
    'hobby'=> 'テニス',
    'email'=> 'takanohasi@gmail.com'
  ),

  1 => array(
    'name' => '上田',
    'hobby'=> '風俗',
    'email'=> 'ueda@gmail.com'
  ),

  2 => array(
    'name' => '清水',
    'hobby'=> '仕事',
    'email'=> 'shimizu@gmail.com'
  )
);
 ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <table border="1">
    <tr><th>名前</th><th>趣味</th><th>メールアドレス</th></tr>
    <?php foreach($array as $row) { ?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['hobby']; ?></td>
              <td><?php echo $row['email']; ?></td>
            </tr>
    <?php } ?>
  </table>
</body>
</html>
