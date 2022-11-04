
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kintamieji</h1>
    <?php
echo "<h3> Pirma uzd</h3>";
$name = "Vaidas";
$surname = "Šipelis";
$birthYear = "1993";
$currentYear = "2022";
echo "Aš esu $name $surname. Man yra " . ($currentYear - $birthYear) . " metai.";

echo "<h3> Antra uzd</h3>";

$firstRnd = rand(0,4);
$secondRnd = rand(0,4);

if($firstRnd == 0 || $secondRnd == 0){
    echo "Dalyba is nulio negalima $firstRnd , $secondRnd";
}
else if($firstRnd >= $secondRnd){
    $result = $firstRnd / $secondRnd;
    echo round($result, 2);
}
else if($secondRnd > $firstRnd){
    $result = $secondRnd / $firstRnd;
    echo round($result, 2);
}


echo "<h3> Trecia uzd</h3>";
$firstRnd = rand(0,25);
$secondRnd = rand(0,25);
$thirdRnd = rand(0,25);

echo "$firstRnd,   $secondRnd, $thirdRnd" ."<br>";

if ($firstRnd === $secondRnd || $secondRnd === $thirdRnd || $firstRnd === $thirdRnd) {
    echo "Nera vidurines reiksmes, nes dvi ar daugiau reiksmiu vienodos";
}   else if(($firstRnd > $secondRnd && $firstRnd < $thirdRnd)||($firstRnd < $secondRnd && $firstRnd > $thirdRnd)){
    $middle = "Si karta firstRnd yra vidurinis: $firstRnd";
    echo $middle;
}   else if(($secondRnd > $firstRnd && $secondRnd < $thirdRnd)||($secondRnd < $firstRnd && $secondRnd > $thirdRnd)){
    $middle = "Si karta secondRnd yra vidurinis: $secondRnd";
    echo $middle;
}   else if(($thirdRnd > $firstRnd && $thirdRnd < $secondRnd)||($thirdRnd < $firstRnd && $thirdRnd > $secondRnd)){
    $middle = "Si karta thirdRnd yra vidurinis: $thirdRnd";
    echo $middle;
}



echo "<h3> Ketvirta uzd</h3>";
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
if($a + $b > $c || $a + $c > $b || $b + $c > $a){
    echo "Gali susidaryti trikampis";
} else{
    echo "Negali susidaryti trikampis";
}
echo "<h3> Penkta uzd</h3>";

$pirmas = rand(0,2);
$antras = rand(0,2);
$trecias = rand(0,2);
$ketvirtas = rand(0,2);

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if($pirmas == 0){
    $nuliai++;
} else if($pirmas == 1){
    $vienetai++;
} else if ($pirmas==2){
    $dvejetai++;
}
if($antras == 0){
    $nuliai++;
} else if($antras == 1){
    $vienetai++;
} else if ($antras==2){
    $dvejetai++;
}
if($trecias == 0){
    $nuliai++;
} else if($trecias == 1){
    $vienetai++;
} else if ($trecias==2){
    $dvejetai++;
}
if($ketvirtas == 0){
    $nuliai++;
} else if($ketvirtas == 1){
    $vienetai++;
} else if ($ketvirtas==2){
    $dvejetai++;
   }
   
   echo "Yra $nuliai nuliu, $vienetai vienetu, $dvejetai dvejetu";
   
   
   echo "<h3> Sesta uzd</h3>";
   
   $rndHeading = rand(1,6);
   echo "<h$rndHeading>$rndHeading</h$rndHeading>";
   
   echo "<h3> Septinta uzd</h3>";
   
   $randNum1 = rand(-10,10);
   $randNum2 = rand(-10,10);
   $randNum3 = rand(-10,10);
   
   if($randNum1 < 0){
       $color = 'green';
    }
    if($randNum1>0){
        $color = 'blue';
    }
    if($randNum1 == 0){
        $color = 'red';
    }
    echo "<h2 style='color:$color;'>$randNum1</h2>";
    
    if($randNum2 < 0){
        $color = 'green';
    }
    if($randNum2>0){
        $color = 'blue';
    }
    if($randNum2 == 0){
        $color = 'red';
    }
    echo "<h2 style='color:$color;'>$randNum2</h2>";
    
    if($randNum3 < 0){
        $color = 'green';
    }
    if($randNum3>0){
        $color = 'blue';
    }
    if($randNum3 == 0){
        $color = 'red';
    }
    echo "<h2 style='color:$color;'>$randNum3</h2>";
    
    echo "<h3> Astunta uzd</h3>";
    
    $zvakiuKiekis = rand(5,3000);
    
    if($zvakiuKiekis < 1000){
        echo "$zvakiuKiekis zvakes kainuos $zvakiuKiekis eurus";
    }
    if($zvakiuKiekis >=1000 && $zvakiuKiekis <2000){
        echo "$zvakiuKiekis zvakes kainuos " . ($zvakiuKiekis - $zvakiuKiekis *0.03) . " eurus";
    }
    if($zvakiuKiekis > 2000){
        echo "$zvakiuKiekis zvakes kainuos " . ($zvakiuKiekis - $zvakiuKiekis * 0.04) . " eurus";
    }


    echo "<h3> Devinta uzd</h3>";
    
    $kint1 = rand(0,100);
    $kint2 = rand(0,100);
    $kint3 = rand(0,100);
    
    echo "Aritmetinis vidurkis $kint1, $kint2, $kint3 yra " . round((($kint1 + $kint2 + $kint3) / 3)) . "<br>";
    
    if (
        $kint1 < 10 &&
        $kint1 > 90 &&
        $kint2 < 10 &&
  $kint2 > 90 &&
  $kint3 > 10 &&
  $kint3 > 90
  ) {
      echo "visi skaiciai neatitinka reikalavimu";
    } else if ($kint1 < 10 && $kint1 > 90 && $kint2 < 10 && $kint2 > 90) {
        echo $kint3;
    } else if ($kint2 < 10 && $kint2 > 90 && $kint3 < 10 && $kint3 > 90) {
        echo $kint1;
    } else if ($kint1 < 10 && $kint1 > 90 && $kint3 < 10 && $kint3 > 90) {
        echo $kint2;
    } else if ($kint1 < 10 || $kint1 > 90) {
        echo "kitas vidurkis " . round((($kint2 + $kint3) / 2));
    } else if ($kint2 < 10 || $kint2 > 90) {
        echo "kitas vidurkis " . round((($kint1 + $kint3) / 2));
    } else if ($kint3 < 10 || $kint3 > 90) {
        echo "kitas vidurkis " . round((($kint1 + $kint2) / 2));
    }
    
    echo "<h3> Desimta uzd</h3>";
    
    $hours = rand(0,24);
    $minutes = rand(0,60);
    $seconds = rand(0,60);
    
    $additionalSeconds = rand(0,300);
    
    $currentSeconds = 0;
    $aditionalMinutes = 0;
    $currentMinutes = 0;
    $aditionalHours = 0;
    $currentHours = 0;
    
    echo "$hours, $minutes, $seconds, $additionalSeconds  <br><br>";


    if ($additionalSeconds + $seconds < 60) {
      $currentSeconds = $additionalSeconds + $seconds;
      echo "$hours:$minutes:$currentSeconds";
    }
    if ($additionalSeconds + $seconds > 60 && $minutes < 60) {
      $currentSeconds = ($additionalSeconds + $seconds) % 60;
      $aditionalMinutes = floor(($additionalSeconds + $seconds) / 60);
      $currentMinutes = $minutes + $aditionalMinutes;
      echo "$hours:$currentMinutes:$currentSeconds";
      if ($currentMinutes >= 60 && $hours < 24) {
        $currentMinutes = $currentMinutes - 60;
        $aditionalHours++;
        $currentHours = $aditionalHours + $currentHours;
        echo "$currentHours:$currentMinutes:$currentSeconds"
        ;
      }
      if ($currentHours > 24) {
        echo "KITOS DIENOS " . ($hours - 24) . ":$currentMinutes:$currentSeconds";
      }
    }

    ?>
</body>
</html>