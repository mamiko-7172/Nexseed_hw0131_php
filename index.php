<?php
  $var = 'この文字列と';
  $var .= 'この文字列を';
  $var .= '繋げます';
  echo $var . '<br>';

  echo '<br>';

  $var = 5;
  echo $var . '<br>';
  $var = '文字に上書き';
  echo $var;

  echo '<br>';

  $colorName = 'red';
  echo "frame is $colorName color";

  echo '<br>';

  for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
  }
  echo '問題１'. '<br>';

for ($i = 100; $i >= 1; $i--) {
    echo $i . '<br>';
}

echo '問題2'. '<br>';

for ($i = 1; $i <= 9; $i++) {
    echo $i * 3 . ' ';
}


echo '問題3'. '<br>';

for ($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo 'FizzBuzz' . '<br>';
    } elseif($i % 5 == 0){
        echo 'Buzz' . '<br>';
    } elseif($i % 3 == 0){
        echo 'Fizz' . '<br>';
    } else{
        echo $i . '<br>';
    }
}

echo '問題4'. '<br>';

for ($i = 1; $i <= 100; $i++){
    if($i % 10 === 0){
        echo $i . '<br>';
    }else{
        echo $i . ' ';
    }
}

echo '問題5'. '<br>';

$alpha = array('E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');
$counts = array_count_values($alpha)
echo $counts['A']


}
?>