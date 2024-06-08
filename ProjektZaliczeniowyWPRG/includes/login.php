<?php
include 'db.php';

// Pobranie danych z formularza
$email = $_POST['login'] ?? '';
$pass = $_POST['password'] ?? '';

if(!empty($email && $pass)) {
    $stmt = mysqli->prepare('SELECT * FROM users WHERE login = ? AND password = ?');
    $stmt->bind_param('ss', $email, $pass);

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        echo 'zalogowany pomyslnie';
    }
    else{
        echo "bład podczas logowania";
    }

}
?>






