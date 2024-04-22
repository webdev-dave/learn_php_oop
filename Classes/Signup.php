<?php

class Signup extends Dbh
{
    private $username;
    private $pwd;
    public function __construct(string $username, string $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser()
    {
        $query = "INSERT INTO users ('username','pwd') VALUES (:username, :pwd);";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    public function signupUser()
    {
        //Error handlers
        if ($this->isEmptySubmit()) {
            //if there is an error, return user to home page and kill script
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . './index.php');
            die();
        }

        //if no errors, signup user
        $this->insertUser();
    }

    public function isEmptySubmit()
    {
        if (isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }


}