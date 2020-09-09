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
    public function getAll()
    {
        $sql = "SELECT * FROM " . self::table . ";";

        $conn = $this->dbc->Get();
        $statement = $conn->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll();
        $conn = null;
        return $data;
    }

    // Show the data of a single user
    public function show($userid)
    {
    }

    // Insert a user into the DB
    public function insert(array $userdata)
    {
    }
}