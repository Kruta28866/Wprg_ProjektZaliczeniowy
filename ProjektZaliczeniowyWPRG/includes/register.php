<?php
include 'db.php';
$login = $_POST['login'] ?? '';
$pass = $_POST['password'] ?? '';
$mail = $_POST['mail'] ?? '';


if(!empty($login && $pass && $mail)) {
    $stmt = mysqli->prepare("INSERT INTO users (login, password, mail) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $login, $pass, $mail);

    if ($stmt->execute()) {
        echo "new record has been added";
    } else {
        echo "error while adding record" . $stmt->error;
    }
    $stmt->close();
}
else{
    echo "Pusty formularz";
}