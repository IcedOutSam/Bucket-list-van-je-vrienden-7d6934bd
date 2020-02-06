<?php
echo "> Hoeveel vrienden zal ik vragen om hun droom?";
$hvl = readline();
$hvl--;
if (is_numeric($hvl)){
;}else {
  echo "Dit is geen cijfer, boeler.";
  exit;
}
for ($i=0; $i <= $hvl; $i++) {
  echo "Wat is jouw naam?" . PHP_EOL;
  $naam = readline(">");

  echo "Wat is jouw droom?" . PHP_EOL;
  $droom = readline(">");
  $student[$naam] = $droom;
}
foreach ($student as $key => $value) {

echo $key . " heeft dit als droom: " . $value . PHP_EOL;
}

 ?>
