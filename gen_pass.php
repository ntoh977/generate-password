<?php 

$rand = rand(4, 25);

echo '

Генерация "равномерного" пароля

<form method="post">
<input type="text" name="number" value="'.$rand.'">
<input type="submit" value="Генерировать">
<form><br><br>';

  // Параметр $number - сообщает число 
  // символов в пароле
if (isset($_POST['number'])) {
     generate_password(intval($_POST['number']));
}
  

  function generate_password($number)
  {
    $arr = array('a','b','c','d','e','f',
                 'g','h','i','j','k','l',
                 'm','n','o','p','r','s',
                 't','u','v','x','y','z',
                 'A','B','C','D','E','F',
                 'G','H','I','J','K','L',
                 'M','N','O','P','R','S',
                 'T','U','V','X','Y','Z',
                 '1','2','3','4','5','6',
                 '7','8','9','0','.',',',
                 '(',')','[',']','!','?',
                 '&','^','%','@','*','$',
                 '<','>','/','|','+','-',
                 '{','}','`','~');
    // Генерируем пароль
    $pass = "";
    for($i = 0; $i < $number; $i++)
    {
      // Вычисляем случайный индекс массива
      $index = rand(0, count($arr)-1);
      $pass .= $arr[$index];
    }
   
    echo "Пароль:: <div class ='pass'> $pass </div> \n";
  }
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
<style type="text/css">
    .pass {
        display: inline;
    border-style: dashed;
    border-color: red;
}
</style>