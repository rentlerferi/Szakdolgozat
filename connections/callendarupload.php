<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


//$id = $_SESSION['id'];

if (isset($_POST['save_callendar'])) {

    $fileName = basename($_FILES["import_file"]["name"]);
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls', 'xlsx', 'csv'];

    if (in_array($file_ext, $allowed_ext)) {


        $fileName = $_FILES["import_file"]["tmp_name"];
        /** Load $inputFileName to a Spreadsheet object **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);

        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = 0;
        foreach ($data as $row) {
            if ($count > 0) {

                $start = $row['0'];
                $end = $row['1'];
                $num=2;

                $temp_start = str_replace(". ", "-", $start, $num);
                $temp_end = str_replace(". ", "-", $end, $num);

                echo $start_formatted = str_replace(". ", " ", $temp_start);
                echo $end_formatted = str_replace(". ", " ", $temp_end);

                $name = $row['2'];
                $place = $row['3'];
                $summary = $row['4'];

                $msg = $conn->query("INSERT INTO classes(`start`,`end`,`name`, `summary`,`place`) VALUES( '$start_formatted','$end_formatted','$name', '$summary','$place');");

                //$conn->query("INSERT INTO classes(`start`,`end`,`name`, `summary`,`place`) VALUES( '2023-04-10 14:00:00','2023-04-10 14:00:00','$name', '$summary','$place');");

                //echo $conn->connect_error;

            } else {
                $count = 1;
            }
        }

        if ($msg != false) {
            $_SESSION['message'] = "Sikeres órarend feltöltés!";

            exit(0);
        } else {
            $_SESSION['message'] = "Sikertelen órarend feltöltés!";

            exit(0);
        }

    } else {
        //print "<div class='not'>Rossz file tipus! </div>";
        $_SESSION['message'] = "Rossz fájl formátum!";

        exit(0);
    }


}
?>

<html>
<h1>KUrva anyád</h1>

</html>