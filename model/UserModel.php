<?php

namespace App;

class UserModel
{
    const table = 'users';
    protected DBConnection $dbc;

    public function __construct()
    {
        $this->dbc = new DBConnection();
    }

    // Gets all record from the table
    public function GetAll()
    {
        $sql = "SELECT * FROM " . self::table . ";";

        $conn = $this->dbc->Get();
        $statement = $conn->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll();
        $conn = null;
        return $data;
    }
}