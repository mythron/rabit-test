<?php

namespace App;

class UserController
{
    public function __construct()
    {
        $this->um = new UserModel();
    }

    public function index()
    {
        return render_php('../view/users.php', [
            'users' => $this->um->getAll(),
        ]);
    }

    // Shows the view for creating new users (this is not for registration, that should be handled by a login controller)
    public function create()
    {
    }

    // Uses the model to insert the (validated) data into DB
    public function insert($data)
    {
    }

    // Continue this to get complete CRUD......
}