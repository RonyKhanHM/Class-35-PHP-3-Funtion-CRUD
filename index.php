    <?php
    echo '<a href=prosolv.php>Problem Solv</a><br>';
    echo "This is Function Class <br>";
    function sum()
    {
      $x = 10;
      $y = 20;
      $result = $x + $y;
      return $result;
    }
    echo sum() . '<br>';
    $result2 = sum() + 30;
    echo $result2 . '<br>';

    echo '<br>';
    echo "This is Function Paremetter <br>";
    function addition($x, $y)
    {
      // $x= 10;
      // $y= 20;
      $result = $x + $y;
      return $result;
    }
    echo addition(30, 40) . '<br>';
    $result2 = addition(40, 60) + 30;
    echo $result2 . '<br>';
    echo addition(60, 50) . '<br>';

    echo '<br>';
    echo "This is Nested Function Paremetter <br>";
    function add($x, $y)
    {
      $result = $x + $y;
      return $result;
    }
    function multiplay($number)
    {
      $result = add(300, 150);
      $multiplay = $result * $number;
      return $multiplay;
    }
    // echo multiplay(50) . "<br>";
    function divition($num1){
      $result = multiplay(50);
      $divition = $result / $num1;
      return $divition;
    }
    echo divition(20).'<br>';

    ?>