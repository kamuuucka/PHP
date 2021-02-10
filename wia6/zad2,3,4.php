<?php

$fileOpen = fopen("imiona_czyste.txt", "r");
$file = fread($fileOpen, filesize("imiona_czyste.txt"));
$lines = explode("\n", $file);
$characters = "";

echo 'ZADANIE 2: <br>';
foreach ($lines as $item){
    $firstCharacter = substr($item, 0, 1);
    if ($item == null) break;
    echo $item." zaczyna się na: ".$firstCharacter.'<br>';
    $characters = $characters.$firstCharacter;
}

echo '<br> ZADANIE 3: <br>';

$letters = str_split($characters);
$result = 0;
$previous = 'A';

for ($i=0; $i < sizeof($letters); $i++){
    if ($letters[$i] == $previous) $result++;
    else {
        echo $letters[$i-1].' - '.$result.'<br>';
        $previous = $letters[$i];
        $result = 1;
    }
    if ($i == sizeof($letters)-1) echo $letters[$i-1].' - '.$result.'<br>';
}

echo '<br> ZADANIE 4: <br>';

$count = 0;
foreach($lines as $item){
    if($item != null) $count++;
}
echo 'Dane z pliku: imiona_czyste.txt: <br>';
echo 'Liczba imion: '.$count.'<br>';
echo 'Liczba niepustych linii: '.$count.'<br>';
$linesString = implode("",$lines);
echo 'Liczba znaków: '.strlen($linesString).'<br>';

fclose($fileOpen);

$fileOpen = fopen("imiona.txt", "r");
$file = fread($fileOpen, filesize("imiona.txt"));
$lines = explode("\n", $file);

$count = 0;
foreach($lines as $item){
    if($item != null) $count++;
}
echo '<br>Dane z pliku: imiona.txt: <br>';
echo 'Liczba imion: '.$count.'<br>';
echo 'Liczba niepustych linii: '.$count.'<br>';
$linesString = implode("",$lines);
echo 'Liczba znaków: '.strlen($linesString).'<br>';

fclose($fileOpen);