<?php

session_start(); //Start Session

$username = $_POST['name1'];
$password = $_POST['pwd1'];

require_once 'config.php';




try {
    //Checking Text box input are empty
    if (empty($username) || empty($_POST['pwd1'])) {
        echo json_encode('empty');
    } else {
        //
        $sql = "select username from login where username=? AND password=?";

        $sq = $db->prepare($sql);


// bind name place holder
        $sq->bindParam(1, $username);
        $sq->bindParam(2, $password);

        $sq->execute();
        $result = $sq->fetchAll();


        

        foreach ($result as $row) {
            $_SESSION['login_user'] = $row["username"];
            echo json_encode('true');
        }
        if (!isset($_SESSION['login_user'])) {
            echo json_encode('false');
        }
    }
} catch (Exeption $ex) {
    echo json_encode($ex->getMessage());
}
?>