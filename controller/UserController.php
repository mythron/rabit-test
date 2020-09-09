<?php

namespace App;

class UserController
{
    public static function index()
    {
        $um = new UserModel();
        return render_php('../view/users.php', [
            'users' => $um->GetAll(),
        ]);
    }
}