<?php
//ホスト内容を取得し、入力値が正しいか検証する
$movie = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $movie = $_POST['movie'];

    if( mb_strlen($movie) === 0 ) {
        $err = '文字を入力してください。';
    } else if(mb_strlenn($movie) > 20){
        $err = '20文字以内で入力してください。';
    }
}
?>

<!DOCTYPE html>
<head>
</head>
<body>
<div class="center">
<h1>入力フォームを検証しよう</h1>
<p>
<?php
//入力内容に誤りがあればエラーメッセージを、正しければ「あなたの好きな映画は～です」と表示する。
if(isset($err)){
    echo $err;
} else {
    echo 'あなたの好きな映画は'.$movie.'です。';
}

?>
</p>
<form action="" method="POST">
<label>好きな映画</label>
<input type="text" name="movie"><br>
<input type="submit">
</form>
</div>
</body>
</html>