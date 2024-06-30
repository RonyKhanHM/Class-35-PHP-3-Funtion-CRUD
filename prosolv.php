    <?php
      echo '<a href=index.php>index</a><br>';

      $marks = [
        [51, -29, 39, 160, 90, 78],
        [51, 29, 39, 16, 90, 78],
        [51, 29, -39, 16, 190, 78],
        [51, 29, 39, -16, 90, 78],
        [51, 29, 39, 16, -90, 178],
      ];

      $row = count($marks);
      $col = count($marks[0]);

      echo'1.Find a given number is odd/even<br>';
      for ($i=0; $i<$row; $i++) {
        for( $j= 0; $j<$col; $j++) {
          if($marks[$i][$j]%2==0){
            echo $marks[$i][$j].':This is Even<br>';
          }
          else {
            echo $marks[$i][$j].':This is Odd<br>';
          }
        }         
      }
      echo '<br>';

      echo'2.Find a given number is positive/negative<br>';
      for( $i= 0; $i<$row; $i++) {
        for( $j= 0; $j<$col; $j++) {
          if($marks[$i][$j]>=0){
            echo $marks[$i][$j].':This is positive<br>';
          }
          else {
            echo $marks[$i][$j].':This is Negative<br>';
          }
        }
      }
      echo '<br>';

      echo'3.Find a grades of given marks using the array<br>';
      for( $i= 0; $i<$row; $i++) {        
        for( $j= 0; $j<$col; $j++) {
          if($marks[$i][$j]>100){
            echo $marks[$i][$j].'Invalid Number<br>';
          }
          elseif($marks[$i][$j]<=80){
            echo $marks[$i][$j].':A+<br>';
          }
          elseif($marks[$i][$j]<=70){
            echo $marks[$i][$j].':A<br>';
          }
          elseif($marks[$i][$j]<=60){
            echo $marks[$i][$j].':A-<br>';
          }
          elseif($marks[$i][$j]<=50){
            echo $marks[$i][$j].':B<br>';
          }
          elseif($marks[$i][$j]<=40){
            echo $marks[$i][$j].':C<br>';
          }
          elseif($marks[$i][$j]<=33){
            echo $marks[$i][$j].';D<br>';
          }
          else{
            echo $marks[$i][$j].':Fail<br>';
          }
        }
      }

      echo'4.Fine the larger number from the given number(two)<br>';
      $num1=15;
      $num2=20;
      if($num1>$num2){
        echo '$num1 is larger than $num2<br>';
      }
      else{
        echo '$num2 is larger than $num1<br>';
      }

    ?>