<?php

class Dbh {

    protected function connect() {
        try {
            $dsn = "mysql:host=localhost; port=3307; dbname=audatabase";
            $username = "root";
            $pwd = "root";

            $dbh = new PDO($dsn, $username, $pwd);
            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!: ". $e->getMessage() . "<br>";
            die();
        }
    }
}