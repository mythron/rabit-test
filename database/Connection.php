<?php

namespace App;

class DBConnection
{
    protected $dbh;
    protected $connectionstring;
    protected $username;
    protected $password;

    public function __construct($file = 'settings.ini')
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new \Exception('Unable to open ' . $file . '.');

        $this->connectionstring = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            ';dbname=' . $settings['database']['schema'];
        $this->username = $settings['database']['username'];
        $this->password = $settings['database']['password'];
    }

    public function Get()
    {
        try {
            $this->dbh = new \PDO($this->connectionstring, $this->username, $this->password);
            return $this->dbh;
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
}