<?php

// session_start();

if (isset($_POST["submit"])) {

    include_once "dbh.inc.php";
    include_once 'functions.inc.php';

    $Soalan = $_POST["Soalan"];
    $Pilihan1 = $_POST["Pilihan1"];
    $Pilihan2 = $_POST["Pilihan2"];
    $Pilihan3 = $_POST["Pilihan3"];
    $Pilihan4 = $_POST["Pilihan4"];
    $JawapanBetul = $_POST["JawapanBetul"];
    $Kategori = $_POST["Kategori"];
    $Umur = $_POST["Umur"];
    //$UserID = $_POST["UserID"];

    // //$conn = OpenCon();
    // // $sql = "INSERT INTO quiz (question, choice_1, choice_2, choice_3, choice_4, correct_choice, topic_id, age_category) 
    // // VALUES ('".$Soalan."','".$Pilihan1."','".$Pilihan2."','".$Pilihan3."','".$Pilihan4."',".$JawapanBetul.",".$Kategori.",".$Umur.")";
    // $sql = "INSERT INTO quiz (question, choice_1, choice_2, choice_3, choice_4, correct_choice, topic_id, age_category, user_id) 
    // VALUES (?,?,?,?,?,?,?,?,?)";

    // //PREPARED STATEMENT TO AVOID SQL INJECTIONS
    // $statement = $conn->prepare($sql);
    // $statement->bind_param("sssssiiii", $Soalan, $Pilihan1, $Pilihan2, $Pilihan3, $Pilihan4, $JawapanBetul, $Kategori, $Umur, $UserID);
    // $statement->execute();

    // //mysqli_query($conn,$sql);

    insertQuestion($conn, $Soalan, $Pilihan1, $Pilihan2, $Pilihan3, $Pilihan4, $JawapanBetul, $Kategori, $Umur);
} else {
    header("Location: ./index.php?submit=success");
    exit();
}

//header("Location: ./index.php?submit=success"); 
    //CloseCon($conn);