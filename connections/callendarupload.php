<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$id = session_id();

if (isset($POST['save_callendar'])) {

    $fileName = $_FILES['classes']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls', 'xlsx', 'csv'];

    if (in_array($file_ext, $allowed_ext)) {

        $inputFileNamePath = $_FILES['classes']['tmp_name'];

        /** Load $inputFileName to a Spreadsheet object **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach ($data as $row) {
            if ($count > 0) {
                echo $start = $row['0'];
                echo $end = $row['1'];
                echo $name = $row['2'];
                echo $place = $row['3'];
                echo $summary = $row['4'];

                $callendarQuery = "INSERT INTO classes (id,'start','end','name', place, summary) VALUES('$id', '$start','$end','$name', '$summary','$place')";
                $result = mysqli_query($conn, $callendarQuery);
                $msg = ture;

            } else {
                $count = "1";
            }

        }
        if (isset($msg)) {
            $_SESSION['message'] = "Sikeres órarend feltöltés!";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Sikertelen órarend feltöltés!";
            header('Location: index.php');
            exit(0);
        }

    } else {
        //print "<div class='not'>Rossz file tipus! </div>";
        $_SESSION['message'] = "Rossz fájl formátum!";
        header('Location: index.php');
        exit(0);
    }


}
?>