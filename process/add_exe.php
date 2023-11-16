<?php
session_start();

include_once('../config/database.php');

// SPECIFY IN HERE "" THE NAME OF YOUR TABLE FROM YOUR DATABASE.
$table_name     = "";   
// INCLUDE IN HERE "" THE VARIABLES(COLUMNS) YOU USE IN YOUR DATABASE, MAKE SURE THE SPELLING IS THE SAME.
// DON'T NEED TO CHANGE ANYTHING BELOW if you follow the CREATE DATABASE in README.md
$user_level     = "userlevel";
$student_number = "studentNumber";
$full_name      = "fullName";
$midterm_grade  = "midtermGrade";
$final_grade    = "finalGrade";
$date_created   = "dateCreated";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userlevel = $_POST["userlevel"];
    $studentNumber = $_POST['studentNumber'];
    $fullName = $_POST['fullName'];
    $midtermGrade = $_POST['midtermGrade'];
    $finalGrade = $_POST['finalGrade'];

    $err = [
        'err_fullName' => '',
        'err_studentNumber' => '',
        'err_midtermGrade' => '',
        'err_finalGrade' => '',
    ];
    

    // Validation
    if (empty($fullName)) {
        $err['err_fullName'] = "Your Full Name cannot be blank.";
    }
    if (empty($studentNumber)) {
        $err['err_studentNumber'] = "Student Number cannot be blank.";
    }
    if (empty($midtermGrade)) {
        $err['err_midtermGrade'] = "Midterm Grade cannot be blank.";
    }
    if (empty($finalGrade)) {
        $err['err_finalGrade'] = "Final Grade cannot be blank.";
    }
    

    if (empty(array_filter($err))) {
        $dateCreated = date('Y-m-d');

        $query = "INSERT INTO $table_name (
            $user_level,
            $full_name,
            $student_number,
            $midterm_grade,
            $final_grade,
            $date_created
        )
        VALUES (
            '$userlevel', 
            '$fullName', 
            '$studentNumber',   
            '$midtermGrade',
            '$finalGrade',
            '$dateCreated')";

        if (mysqli_query($conn, $query)) {
            echo '<br>User was Added Successfully!';
        } else {
            echo '<br>Error: ' . $query . ' ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        $_SESSION['err'] = $err;
        header('location: ../user/add.php');
    }
}
?>
