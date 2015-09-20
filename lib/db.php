<?php
class DbConnection {


    $dsn = 'mysql:dbname=;host=localhost';
    $user = 'root';
    $password = '';
    $conn = NULL;

    function __construct() {
        $this->conn = new PDO($dsn, $user, $password);
    }

    function execute($sql) {
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $result = [];
            foreach ($stmt->fetch() as $row) {
                $result[] = $row;
            }
            return $result;
        } catch (PDOException $e) {
            print('Error:'.$e->getMessage());
            die();
        } finally {
            $stmt->closeCursor();
            $this->conn = null;
        }
    }
}
