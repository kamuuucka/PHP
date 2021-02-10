<?php
$filename = $_POST['filename'];
$operation = $_POST['button'];
$newName = $_POST['newfilename'];
$dir1 = $_POST['dir1'];
$dir2 = $_POST['dir2'];
$text = $_POST['text'];

$filename = $filename.".txt";
$newName = $newName.".txt";

switch($operation){
    case 1:
        if(file_exists($filename)){
            echo "Taki plik już istnieje";
        }
        else{
            $plik = fopen($filename,'w+');
            fclose($plik);
            echo 'Plik '.$filename.' został pomyślnie utworzony';
        }
        break;
    case 2:
        if(file_exists($filename)){
            $plik = fopen($filename,'w+');
            unlink($filename);
            echo "Plik poprawnie usunięty";
        }
        else echo "Taki plik nie istnieje";
        break;
    case 3:
        if(file_exists($filename)){
            rename($filename,$newName);
            echo $filename." nazywa się teraz ".$newName;
        }
        else echo "Plik nie istnieje";
        break;
    case 4:
        mkdir("./".$dir1,0777);
        mkdir("./".$dir2,0777);
        echo "Katalogi utworzone";
        break;
    case 5:
        $file = fopen($filename, "w+");
        fputs($file, $text);
        fclose($file);
        echo 'Wpisano do pliku <br>'.$text;
        break;
    case 6:
        if ($dir = @opendir("./")) {
            while ($file = readdir($dir)) {
                echo $file.'<br>';
            }
            closedir($dir);
        }
        break;
    default:
        break;
}

