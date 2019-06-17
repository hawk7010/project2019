<?php
$input_data = $_POST['input_data'];

if($input_data == 1) {
  echo 'こんにちは';
} else if($input_data == 2) {
  echo 'Hello';
} else if($input_data == 3) {
  echo 'Bonjour';
} else {
  echo '入力した数値が違います';
}
?>
