<?php

require "database.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class User
{
    public $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function validateEmail($email) {
        $sql = "SELECT 1 FROM loginInfo WHERE email = :email";
        return $this->pdo->run($sql, ["email" => $email])->fetchColumn();
    }

    public function validatePassword($password) {
        $pattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/';
    
        if (preg_match($pattern, $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function registerLoginInfo($email, $password) {
        if ($this->validateEmail($email)) {
            return false;
        }

        if (!$this->validatePassword($password)) {
            return false;
        }

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql_insert = "INSERT INTO loginInfo (email, password_hash) VALUES (:email, :password_hash)";
        $placeholder = [
            "email" => $email,
            "password_hash" => $password_hash,
        ];

        $this->pdo->run($sql_insert, $placeholder);

        $sql_select_id = "SELECT userId FROM loginInfo WHERE email = :email";
        $userId = $this->pdo->run($sql_select_id, ["email" => $email])->fetchColumn();

        $_SESSION['userId'] = $userId;
        return $_SESSION['userId'];
    }
}

$User = new User($pdo);

?>
