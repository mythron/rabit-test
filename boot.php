<?php

namespace App;

// ROUTER
include_once('../router.php');

// DATABASE CONNECTION
include_once('database/connection.php');

//MODELS
include_once('model/UserModel.php');
include_once('model/AdvertisementModel.php');

//CONTROLLERS
include_once('controller/HomeController.php');
include_once('controller/UserController.php');
include_once('controller/AdvertisementController.php');

//HELPERS
include_once('../helpers.php');