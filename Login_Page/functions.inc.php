<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
    $result = false;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result = false;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat)
{
    $result = false;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExist($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO users (fullname, usersEmail, username, usersPwd) VALUES (?,?,?,?) ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ./signup.php?error=none");
    exit();
}

function insertQuestion($conn, $Soalan, $Pilihan1, $Pilihan2, $Pilihan3, $Pilihan4, $JawapanBetul, $Kategori, $Umur)
{
    $sql = "INSERT INTO quiz (question, choice_1, choice_2, choice_3, choice_4, correct_choice, topic_id, age_category ) VALUES (?,?,?,?,?,?,?,?) ";
    $stmt = mysqli_stmt_init($conn);

    // if (!mysqli_stmt_prepare($stmt, $sql)) {
    //     header("Location: ./questionbank.php?error=stmtfailed");
    //     exit();
    // }

    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_close($stmt);

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssiii", $Soalan, $Pilihan1, $Pilihan2, $Pilihan3, $Pilihan4, $JawapanBetul, $Kategori, $Umur);
    $stmt->execute();

    header("Location: ./index.php?submit=success");
    exit();
}

function emptyInputLogin($username, $pwd)
{
    $result = false;

    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExist($conn, $username, $username);

    if ($uidExists === false) {
        header("Location: ./login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("Location: ./login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["user_id"];
        $_SESSION["useruid"] = $uidExists["username"];
        header("Location: ./index.php");
        exit();
    }
}
