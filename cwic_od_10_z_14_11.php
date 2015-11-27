<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>$Title$</title>
</head>
<body>

<h4>Cwiczenie 10</h4>
<?php
$n=rand (4,10);

for($i=1; $i<=$n; $i++)
{
  for($j=1; $j<=$i; $j++)
  {
    echo ' * ';
    for($k=$j; $k<$n && $j>=$i ; $k++){
      $z = $k + 1;
      echo("$z ");
    }
  }
  echo '<br>';
}
for ($i = $n; $i > 0; $i--) {
  for ($j = 1; $j <= $i; $j++) {
    echo("* ");
    for ($k = $j; $k<$n && $j>=$i ; $k++) {
      $y = $k + 1;
      echo("$y ");
    }
  }
  echo ("<br>");
}
?>
<h4>cwiczenie 12</h4>

<table align="left" border="1" cellpadding="0" cellspacing="0" style="width:100%">
  <?php
  $n = rand(3,9);
  //$n = 3;
  for($i=1;$i<=$n;$i++)
  {
    echo ("<tr>");
    for ($j=1;$j<=$n;$j++)
    {
      echo ("<td>$i * $j = $i*$j</td>");
    }
    echo ("</tr>");
  }
  ?>
</table>

<h4>Cwiczenie 14</h4>

<?php

function FooBar ($x)
{
  for ($i = 1; $i <= $x; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
      if ($i % 3 == 0 && $i % 5 != 0) {
        echo("Foo");
      } elseif ($i % 3 != 0 && $i % 5 == 0) {
        echo("Bar");
      } else {
        echo("FOOBAR");
      }
    } else {
      echo("$i");
    }
  }  return;

}

$liczba = rand(10, 20);
echo FooBar($liczba);
echo("<br> Powstałe dla liczby $liczba");
?>
<!--         <?php    ?> <br> -->


<!--         <?php    ?> <br> -->

</body>
</html>