<?php
ob_start();
require '../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$id = $_SESSION['id'];

if (isset($_POST['save_callendar'])) {

    $fileName = basename($_FILES["import_file"]["name"]);
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls', 'xlsx', 'csv'];

    if (in_array($file_ext, $allowed_ext)) {

        $idExtension = 0;
        $fileName = $_FILES["import_file"]["tmp_name"];
        /** Load $inputFileName to a Spreadsheet object **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);

        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = 0;
        foreach ($data as $row) {
            if ($count > 0) {

                $start = $row['0'];
                $end = $row['1'];
                $num = 2;

                $temp_start = str_replace(". ", "-", $start, $num);
                $temp_end = str_replace(". ", "-", $end, $num);

                $start_formatted = str_replace(". ", " ", $temp_start);
                $end_formatted = str_replace(". ", " ", $temp_end);

                $name = $row['2'];
                $place = $row['3'];
                $summary = $row['4'];
                $id_str = $id . $idExtension;

                try {
                    $conn->autocommit(FALSE);
                    $msg1 = $conn->query("INSERT INTO classes(`id`,`start`,`end`,`name`, `summary`,`place`) VALUES('$id_str', '$start_formatted','$end_formatted','$name', '$summary','$place');");
                    $msg2 = $conn->query("INSERT INTO taken_classes(`neptun`,`classes_id`) VALUES ('$id','$id_str');");
                    if ($msg1) {

                        if ($msg2) {
                            $conn->commit();
                            $idExtension++;
                            $msg=true;
                        } else {

                            throw new Exception($conn->error);
                        }

                    } else {
                        throw new Exception($conn->error);
                    }

                } catch (Exception $ex) {
                    $conn->rollback();
                    $conn->autocommit(TRUE);
                }


            } else {
                $count = 1;
            }
        }

        if ($msg != false) {
            $_SESSION['message'] ="Sikeres órarend feltöltés!";
            echo "<script>window.location.href='index.php'</script>";
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
echo "<script>window.location.href='index.php'</script>";
ob_end_flush();
exit();
?>