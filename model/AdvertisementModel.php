<?php

namespace App;

class AdvertisementModel
{
    const table = 'users';
    protected DBConnection $dbc;

    public function __construct()
    {
        $this->dbc = new DBConnection();
    }

    // Get all rows from the table
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

    // Get all rows with user data joined
    public function getAllWithUsers()
    {
        $sql = "SELECT 
        a.id as 'adid',
        a.userid as 'userid',
        a.title as 'adtitle',
        u.name as 'username'
        from advertisements a 
        left join users u ON a.userid = u.id;";

        $conn = $this->dbc->Get();
        $statement = $conn->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll();
        $conn = null;

        return $data;
    }
}